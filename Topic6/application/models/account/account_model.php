<?php 
	if (! defined('BASEPATH')) {
		# code...
		exit('No direct script access allowed');
	}

	/**
	* 
	*/
	class account_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		public function login($usename, $password)
		{
			# code...
			$this->db->where("username", $username);
			$this->db->where("password", $password);

			$query = $this->db->get("account");
			if ($query->num_rows()>0) {
				# code...
				foreach ($query->result() as $row) {
					# code...
					$newdata = array(
						'username' => $row->username, 
						'email' => $row->email,
						'logged_in' => true,
						);
				}

				$this->session->set_userdata($newdata);
				return true;
			}
			return false;
		}

		public function add_account()
		{
			# code...
			$data = array(
				'username' 	=>$this->input->post('username') ,
				'password' 	=>md5($this->input->post('password')) ,
				'email'		=>$this->input->post('email') ,
				//'avatar'	=>$this->input->post('avatar') ,
				'fullname'	=>$this->input->post('fullname') ,
				'birthday'	=>$this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day'),
				);
			$this->db->insert('account', $data);
		}

		public function email_exists($email)
		{
			# code...
			$query = "SELECT username, email FROM account WHERE email = '{$email}' LIMIT 1";
			$result = $this->db->query($query);
			$row = $result->row();

			return ($result->num_rows()===1 && $row->email) ? $row->username : false;
		}

		public function verify_reset_password_code($email,$code)
		{
			# code...
			$query = "SELECT username, email FROM account WHERE email = '{$email}' LIMIT 1";
			$result = $this->db->query($query);
			$row = $result->row();

			if ($result->num_rows()===1) {
				# code...
				return ($code = md5($this->config->item('salt').$row->username))? true:false;
			}
			else{
				return false
			}
		}

		public function update_password()
		{
			# code...
		}
	}
 ?>