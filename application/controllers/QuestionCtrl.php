<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionCtrl extends AdminController {

	function __construct(){
		parent::__construct();

		$this->load->model('UserModel','um');
		$this->load->model('CommonModel','cm');
	}

	public function subject_choose(){

		$data['pages']="question/exam";
		$this->load->view('stu_app',$data);
	}

    public function question_retrive()
	{
		if(isset($_GET['sub']) && $_GET['sub']){
			$where['sub']=$_GET['sub'];
		}
		if(isset($_GET['grade']) && $_GET['grade']){
			$where['grade']=$_GET['grade'];
		}
		if(isset($where)){
			$data['questions']=$this->cm->common_select('question','*',$where);
		}else{
			$data['questions']=$this->cm->common_select('question');
		}
		//print_r($this->db->last_query()); 
		$data['page']="question/questionlist";
		$this->load->view('app',$data);
	}


    public function result_retrive()
	{
		$data['rs']=$this->cm->common_select('result');
		$data['page']="question/results";
		$this->load->view('app',$data);
	}


    public function result_details_retrive()
	{
		$data['rsd']=$this->cm->common_select('result_details');
		$data['page']="question/results_details";
		$this->load->view('app',$data);
	}


    public function ques_create(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('ques', 'Question', 'required');
		$this->form_validation->set_rules('sub', 'Subject', 'required');
		$this->form_validation->set_rules('grade', 'Grade', 'required');
		

		if ($this->form_validation->run() == FALSE){
            $data['ques']=$this->cm->common_select('question');
			$data['page']="question/question_create";
			$this->load->view('app',$data);
			
        }else{

			$ud['question']=$this->input->post('ques');
			$ud['option_one']=$this->input->post('option_one');
			$ud['option_two']=$this->input->post('option_two');
			$ud['option_three']=$this->input->post('option_three');
			$ud['option_four']=$this->input->post('option_four');
			$ud['ans']=implode(',',$this->input->post('ans'));
			$ud['sub']=$this->input->post('sub');
			$ud['grade']=$this->input->post('grade');
			
			$ud['created_at']=date('Y-m-d H:i:s');

			if($this->cm->common_insert('question',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('queslist');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('question/question_create');
			}
            
        }
    }
}