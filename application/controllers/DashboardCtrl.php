<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends AdminController {

	public function index()
	{
		$data['page']="dashboard";
		$this->load->view('app',$data);
	}

	public function stu_index()
	{
		$data['pages']="stu_dashboard";
		$this->load->view('stu_app',$data);
	}

	

	
}

