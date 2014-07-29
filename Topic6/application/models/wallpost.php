<?php
	/**
	* 
	*/
	class Wallpost extends ACI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}
		public  function __construct()
		{
			
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