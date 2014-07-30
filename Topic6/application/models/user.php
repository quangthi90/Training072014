<?php
	class User extends CI_Model
	{
		public function getAllUsers() {
			$sQuery = "SELECT username, fullname, avatar, email, birthday FROM Account";

			return $this->db->query($sQuery)->result_array();
		}


		// function getUserProfile: lay thong tin ve 1 tai khoan; author: June
		public function getUserProfile($data){
			$user = $data['username'];
			//this->load->database();
			$query = $this->db->query("SELECT * FROM account WHERE username = '" . $user . "'");

			$result = $query->result_array();

			// CHECK EXIST RESULT
			if (isset($result[0])) {
				return $result[0];
			}else {
				return array();
			}
		}
		// function: update thong tin tai khoan ; author: June
		public function updateInfo($data){
			$this->db->query(" UPDATE account SET  fullname = '" .$data['fullname']. "', birthday = '" .$data['birthday']. "', email = '" .$data['email']. "' WHERE  username = '" .$data['username']. "' ");

		}
		public function updatePass($data)
		{
			$this->db->query("UPDATE account SET password = '" .$data['pass_new']. "' WHERE username = '" .$data['username']. "' ");
		}
		public function getPass($data){
			$result = $this->db->query("SELECT password FROM account WHERE username = '" . $data['username'] . "'");
			return $result;
		}

	}
?>