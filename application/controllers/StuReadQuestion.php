<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StuReadQuestion extends StudentController {

	function __construct(){
		parent::__construct();

		$this->load->model('UserModel','um');
		$this->load->model('CommonModel','cm');
	}

    public function question_retrive()
	{
		$data['questions']=$this->cm->common_select('question');
		$data['pages']="question/questions";
		$this->load->view('stu_app',$data);
	}

}