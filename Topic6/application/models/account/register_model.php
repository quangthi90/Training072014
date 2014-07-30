<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');}
	/**
	* 
	*/
	class Register_model extends CI_Model
	{
		private $email_code; 

		public function add_account()
		{
			# code...
			$data = array(
				'username' 	=>$this->input->post('username') ,
				'password' 	=>md5($this->input->post('password')) ,
				'email'		=>$this->input->post('email') ,
				'avatar'	=>$this->input->post('avatar') ,
				'fullname'	=>$this->input->post('fullname') ,
				'birthday'	=>$this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day'),
				);
			$query = $this->db->insert('account', $data);
			$result = $this->db->query($query);
			if ($this->db->affect_rows()===1) {
				$this->set_session($data->username);
				print_r($this->session->all_accountdata());
				return $data->username;
			} else {
				$this->load->library('email');
				$this->email->from('bommer@design.com', 'Bommer Design Admin');
				$this->email->to('hoathachthao1606@gmail.com');
				$this->email->subject('Problem inserting account into database');

				if (isset($data->email)) {
					$this->email->message('Unable to register and insert account with email of'. $data->email.'to database');
				} else {
					$this->email->message('Unable to register and insert account to database');
				}
				$this->email->send();
				return false;
			}
		}

		public function set_session($username)
		{
			$query = $this->db->where("username",$username);
			$result = $this->db->query($query);

			$row = $result->row();

			$sess_data = array(
				'username' 	=>$row->username,
				'password' 	=>$row->password,
				'email'		=>$row->email,
				'avatar'	=>$row->avatar,
				'fullname'	=>$row->fullname,
				'birthday'	=>$row->birthday,
				'logged_in' => 0
				);
			$this->session->set_userdata($sess_data);
		}
	}
?>