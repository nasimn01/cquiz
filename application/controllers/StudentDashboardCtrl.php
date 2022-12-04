<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentDashboardCtrl extends StudentController {


	public function index()
	{
		$data['pages']="stu_dashboard";
		$this->load->view('stu_app',$data);
	}

	
}

