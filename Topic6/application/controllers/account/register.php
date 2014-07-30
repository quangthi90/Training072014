<?php 
	if (! defined('BASEPATH')) {
		exit('No direct script access allowed');
	}

	/**
	* 
	*/
	class Register extends CI_Controller
	{
		
		public function index()
		{
			//$this->load->view('header');
			$this->load->view('template/account/register_view');
			//$this->load->view('footer');
		}

		public function registeration($value='')
		{
			$this->load->library('form_validation');

			//rules:
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[50]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|match[password]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'callback_date_check');

			if ($this->form_validation->run() == false) {
				$this->index();
			}
			else{
				// register success
				$this->load->model('register_model');
				$result = $this->register_model->add_account();

				if ($result) {
					//$this->load->view('header');
					$this->load->view('template/account/welcome_view');
					//$this->load->view('footer');
				} else {
					echo "Sorry, we can't create your account. Please contact bommer@design.com and let us know.";
				}
			}
		}
	}
 ?>