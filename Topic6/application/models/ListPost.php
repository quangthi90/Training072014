<?php
	/**
	* 
	*/

	class ListPost extends CI_Model
	{
		
		public  function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function listpost(){
			$query = $this->db->get("post");
			return $query->result_array();
		}
	}
?>