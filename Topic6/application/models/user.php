<?php
	class user extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
        	$this->load->database();
		}

		public function getUsers() {
			$this->db->select("username, fullname");
			$query = $this->db->get("account");
			return $query->result_array();
		}
	}
?>