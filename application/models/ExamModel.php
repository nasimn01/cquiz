<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamModel extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	/* for index function */
	public function get_question($subject,$grade,$limit){
		$this->db->select('*');
		$this->db->from('question');
		$this->db->where('sub',$subject);
		$this->db->where('grade',$grade);
		$this->db->limit($limit,0);
		return $this->db->get()->result();
	}

}
