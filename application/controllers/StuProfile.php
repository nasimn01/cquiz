<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StuProfile extends StudentController {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('CommonModel','cm');
	}
	public function index()
	{
		$data['userdata']=$this->session->get_userdata()['student'];
		$data['pages']="profile/stu_profile";
		$this->load->view('stu_app',$data);
	}
	
	public function store(){
		/* load helper and library */
		$this->load->library('form_validation');
		/* default unique */
		$userdata=$this->session->get_userdata()['student'];
		$uniqueem = "";
		
		if($this->input->post('email') != $userdata->email)
		   $uniqueem =  '|is_unique[users.email]';
		
		/* set validatin */
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		
		$this->form_validation->set_rules('email', 'Email Address', "required|valid_email$uniqueem");
		
		if ($this->form_validation->run() == FALSE){
            $data['userdata']=$this->session->get_userdata()['student'];
			$data['pages']="profile/stu_profile";
			$this->load->view('stu_app',$data);
        }else{
			
			if($_FILES['photo']['name']){
				$imgname=time().rand(1000,9999);

				$c['file_name']=$imgname;
				$c['upload_path']='upload/profile/';
				$c['allowed_types']='jpeg|jpg|png|gif';
				$c['max_height']='1000'; //px
				$c['max_width']='1000'; //px
				$c['max_size']='1000'; //kb

				$this->load->library('upload',$c);
				// "photo" is form name 
				if(!$this->upload->do_upload('photo')){
					$this->session->set_flashdata('msg',$this->upload->display_errors());
					redirect('sprofile');
					exit;
				}else{
					$image_data=$this->upload->data();
					$image_name=$image_data['file_name'];
					// this is from AdminController file
					$this->resizeimage($image_data);
					$this->watermark($image_data,'Copyright 2022 WDPF-50');

					$ud['photo']=$image_name;
				}
			}

			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['email']=$this->input->post('email');
			$ud['updated_at']=date('Y-m-d H:i:s');

			$con['id']=$userdata->id;
			
			if($this->cm->common_update('users',$ud,$con)){
				/* set data to session again */
				
				$d=$this->db->where($con)->get('users')->row();
				$this->session->set_userdata('student',$d);

				$this->session->set_flashdata('msg','<b class="text-success">Data update</b>');
				redirect('sprofile');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('sprofile');
			}
        }
	}
	
	public function cp()
	{
		$data['pages']="profile/change_password";
		$this->load->view('stu_app',$data);
	}
	
	public function cp_store(){
		/* load helper and library */
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('opassword', 'Old Password', 'required|callback_checkPass');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
		

		if ($this->form_validation->run() == FALSE){
			$data['pages']="profile/change_password";
			$this->load->view('stu_app',$data);
        }else{
			$ud['password']=sha1(md5($this->input->post('password')));
			$ud['updated_at']=date('Y-m-d H:i:s');

			$con['id']=$this->session->get_userdata()['student']->id;
			
			if($this->cm->common_update('users',$ud,$con)){
				/* set data to session again */
				$d=$this->db->where($con)->get('users')->row();
				$this->session->set_userdata('student',$d);
				
				$this->session->set_flashdata('msg','<b class="text-success">Data update</b>');
				redirect('change_password');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('change_password');
			}
        }
	}
	
	function checkPass($old){
		$old=sha1(md5($old));
		if($old !=$this->session->get_userdata()['student']->password){
			$this->form_validation->set_message('checkPass', 'Old password is not matched');
			return false;
		}else{
			return true;
		}
	}

}
