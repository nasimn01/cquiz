<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StuQuestionCtrl extends StudentController {

	function __construct(){
		parent::__construct();

		$this->load->model('ExamModel','em');
		$this->load->model('CommonModel','cm');
	}

	public function congratspage()
	{
		$data['pages']="congratspage";
		$this->load->view('stu_app',$data);
	}

	public function subject_choose(){
		$data['pages']="question/exam";
		$this->load->view('stu_app',$data);
	}

	public function exam_start()
	{
		if($this->input->post('subject') && $this->input->post('grade')){
			$con['student_id']=$this->session->get_userdata()['student']->id;
			$con['status']=0;
			$r=$this->cm->common_select('result','id',$con);
			if($r){
				$result_id=$r[0]->id;
			}else{
				$data_exam['student_id']=$this->session->get_userdata()['student']->id;
				$data_exam['total_marks']=20;
				$data_exam['created_at']=date('Y-m-d H:i:s');
				$data_exam['starttime']=time();
				$data_exam['status']=0;
				$result_id=$this->cm->common_insert('result',$data_exam);
			}
			
			$subject=$this->input->post('subject');
			$grade=$this->input->post('grade');
			$question=array();

			foreach($subject as $s){
				$limit=ceil(20/count($subject));
				$question=array_merge($question,$this->em->get_question($s,$grade,$limit));
			}
			$data['questions']=$question;
			$data['subject']=$subject;
			$data['result_id']=$result_id;
			$data['pages']="question/examquestion";
			$this->load->view('stu_app',$data);
		}else{
			redirect('qchoose');
		}
		
	}
	public function exam_submit(){
		$q_answer=$this->input->post('q_answer');
		$ud=array();
		$totalobtain=0;
		foreach($q_answer as $q=>$rq){
			$ud[]=array(
				'student_id'=>$this->session->get_userdata()['student']->id,
				'result_id'=>$this->input->post('result_id'),
				'question_no'=>$q,
				'stu_ans' => explode('-',$rq)[0],
				'created_at' =>date('Y-m-d H:i:s')
			);
			if(explode('-',$rq)[0] == explode('-',$rq)[1])
				$totalobtain++;
		}

		if($this->db->insert_batch('result_details',$ud)){
			$upr['obtain_marks']=$totalobtain;
			$upr['status']=1;
			$con['id']=$this->input->post('result_id');
			$result_id=$this->cm->common_update('result',$upr,$con);
			$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
			redirect('congratspage');
		}else{
			$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
			redirect('question/question_create');
		}
            
        
    }

	public function result_retrive()
	{
		$data['rs']=$this->cm->common_select('result');
		$data['pages']="question/result";
		$this->load->view('stu_app',$data);
	}

	public function result_details_retrive($id)
	{

		$data['rsd']=$this->db->query("SELECT question.*, result_details.stu_ans FROM `result_details` JOIN question on question.id=result_details.question_no WHERE result_details.result_id=$id")->result();
		$data['pages']="question/result_details";
		$this->load->view('stu_app',$data);
	}
	// SELECT question.*, result_details.stu_ans, result_details.student_id FROM `result_details` JOIN question on question.id=result_details.question_no WHERE result_details.result_id=1;

    
}