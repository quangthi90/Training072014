<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');}
	/**
	* 
	*/
	class Login_model extends CI_Model
	{
		
		public function login_account()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->db->where("username",$username);
			$this->db->where("password",$password);

 			$query=$this->db->get("account");
 			$result = $this->query($query);
 			$row = $result->row();

 			if ($result->num_rows()===1) {
 				if ($row->activated) {
 					if ($row->password == md5($this->input->post('password')))					 {
 						$sess_data = array(
 							'username' 	=>$row->username,
 							'password' 	=>$row->password,
 							'email'		=>$row->email,
 							'avatar'	=>$row->avatar,
 							'fullname'	=>$row->fullname,
 							'birthday'	=>$row->birthday							
 						);
 						$this->session->set_userdata($sess_data);
 						return 'logged_in';
 					} else {
 						return 'incorrect_password';
 					}
 					
 				} else {
 					return 'not_activated';
 				}
 				
 			} else {
 				return 'username_not_found';
 			}
 			
		}
	}
 ?>