<?php
	/**
	* 
	*/

	class ListPost extends CI_Model
	{
		
		public  function __construct()
		{
			parent::__construct();
			$config['hostname'] = "localhost";
			$config['username'] = "root";
			$config['password'] = "";
			$config['database'] = "topic6";
			$this->load->database($config);
		}
		public function listpost(){
			$query = $this->db->get("post");
			return $query->result_array();
		}
	}
?>