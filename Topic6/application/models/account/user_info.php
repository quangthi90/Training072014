<?php
	class user_info extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load ->database();
		}

		public function selectUserProfile() {
			// $user = $_SESSION('')
			$user = 'June';
			//this->load->database();
			$query = $this->db->query("SELECT * FROM account WHERE username = '" . $user . "'");

			return $query->result_array()[0];
		}
		public function updateUserInfo($data){
			
		}

	}
?>