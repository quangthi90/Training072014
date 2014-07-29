<?php
	class user extends CI_Model
	{
		public function getAllUsers() {
			$sQuery = "SELECT username, fullname, avatar, email, birthday FROM Account";

			return $this->db->query($sQuery)->result_array();
		}
	}
?>