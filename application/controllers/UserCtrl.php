<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends AdminController {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');

		// /* authorization  */
		// if($this->session->get_userdata()['ud']->role_id !=1){
		// 	redirect('/');
		// }

		$this->load->model('UserModel','um');
		$this->load->model('CommonModel','cm');
	}

	public function index()
	{
		$data['users']=$this->cm->common_select('users');
		$data['page']="users/student";
		$this->load->view('app',$data);
	}
	public function auth_retrive()
	{
		$data['auth_user']=$this->cm->common_select('tbl_auth');
		//$data['auth_user']= $this->um->get_LoggedIn_user();
		$data['page']="users/index";
		$this->load->view('app',$data);
	}

	public function create(){
		/* load helper and library */
		
		$data['page']="users/create";
		$this->load->view('app',$data);
	}

	public function stu_create(){
		/* load helper and library */
		
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$data['page']="users/create";
            $this->load->view('app',$data);
        }else{
			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['email']=$this->input->post('email');
			$ud['password']=sha1(md5($this->input->post('password')));
			if($this->um->create($ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('users');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				$data['page']="users/create";
           		$this->load->view('app',$data);
			}
            
        }
	}

	public function update($id){
		/* load helper and library */
		
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		
		if($this->input->post('password')){ // check validation if user provide password
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
		}

		if ($this->form_validation->run() == FALSE){
			$data['user']=$this->um->single_retrive($id);
			$data['page']="users/edit";
            $this->load->view('app',$data);
        }else{
			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['email']=$this->input->post('email');
			if($this->input->post('password')){ // update if user provide password
				$ud['password']=sha1(md5($this->input->post('password')));
			}
			if($this->um->update($id,$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				//$this->load->view('users/edit/'.$id);
			}
			redirect('users');
        }
	}

	public function destroy($id){
		$condition['id']=$id;
		if($this->um->delete($condition)){
			$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
		}else{
			$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
		}

		redirect('users');
	}

	/* student login*/ 
	function student_login(){
		$this->load->view('auth/stu_login');
	}

	function student_login_check(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->load->view('auth/stu_login');
        }else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->db->where('password',$password);
			$this->db->where('email',$email);
			

			
			$d=$this->db->get('users')->row();
			


			if($d){
				// $data = $this->db->query("SELECT a.*,r.role_name,r.role from tbl_auth a JOIN tbl_role r on  a.role_id=r.id where a.id={$d->id}")->row();
				$this->session->set_userdata('ud',$d);
				redirect('stu_dashboard');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Email or password is not correct</b>');
				redirect('login');
			}
            
        }
	}
	public function student_logout(){
		session_destroy();
		redirect('login');
	}
}
