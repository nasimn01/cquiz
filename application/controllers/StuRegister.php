<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StuRegister extends StudentController {

	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel','cm');
		$this->load->helper('form');
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
			$data['page']="auth/stu_register";
            $this->load->view('stu_app',$data);
        }else{
			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['email']=$this->input->post('email');
			$ud['password']=sha1(md5($this->input->post('password')));
			if($this->um->create($ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('login');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				$data['page']="auth/stu_register";
           		$this->load->view('stu_app',$data);
			}
            
        }
	}
	
}
