<?php
	/**
	* 
	*/
	class Wallpost extends CI_Model
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}
		public function listpost(){

			$user = $_REQUEST["user"];
			$query = $this->db->get("post");
			$query =$this->db->where("postWall",$user);
			return $query->result_array();
		}
	}
	
?>