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
			/*$sql = "select * from `post` where `userWall` =  '$user'";
			$query = $this->db->query($sql);*/
			$user = $_REQUEST["user"];
		    $this->db->select("postId, postAuthor, userWall,postTitle, postContent, postCreate,postUpdate");
	        $this->db->where("postWall","$user");
	        $query=$this->db->get("post");
			
	        return $query->result_array();
		}
	}
	
?>