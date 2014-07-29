<?php
	/**
	* 
	*/
	class Wallpost extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function listpost($username){
			$this->db->select("postId,postAuthor,userWall,postTitle,postContent,postCreate,postUpdate");
			$this->db->where("userWall", "$username");
			$query=$this->db->get("post");
			return $query->result_array();
		}
	}
	
?>