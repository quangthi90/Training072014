<?php
	class ListPost extends CI_Model
	{
		
		public  function __construct()
		{
			
			$this->load->database();
		}
		public function listpost(){
			$query = $this->db->get("post");
			return $query->result_array();
		}

		public function listpost_user($username){
			$this->db->where('userWall', $username); 
			$query = $this->db->get('post');
			return $query->result_array();	
		}
	}
?>