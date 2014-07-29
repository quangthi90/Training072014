<?php
	session_start();
	class user_profile extends CI_Controller{
		function __construct(){
			parent:: __construct();
		}
		function user_profile(){
			//this->load->database();
			$query = $this->db->query('SELECT * FROM account WHERE username = $user');
			return $query;
		}

	}
?>