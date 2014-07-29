<?php
	/**
	* 
	*/
	class account extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('account/account_model');
			
		}

		public function index()
		{
			# code...
			if (($this->session ->userdata('username')!= "")) {
				# code...
				$this->welcome();
			}
			else{
				$data['title'] = 'Home';
				$this->load->view('template/header', $data);
				$this->load->view('template/account/register_view', $data);
				$this->load->view('template/footer', $data);
			}
		}
		public function welcome()
		{
			# code...
			$data['title'] = 'Welcome';
			$this->load->view('template/header', $data);
			$this->load->view('template/account/welcome_view', $data);
			$this->load->view('template/footer', $data);
		}
		public function login()
		{
			# code...
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->account_model->login($username, $password);
			if ($result) {
				# code...
				$this->welcome();
			}
			else{
				$this->index();
			}
		}

		public function reset_password()
		{
			# code...
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				# code...
				$this->load->library('form_validation');
				//check if its a valid email or not
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

				if ($this->form_validation->run() == false) {
					# code...
					// email didn't validate, send back to reset password form and show errors
					$this->load->view('template/header');
					$this->load->view('template/reset_pass_form', array('error' =>'Please supple a valid email address'));
					$this->load->view('template/footer');
				}
				else{
					$email = trim($this->input->post('email'));
					$result = $this->account_model->email_exists($email);

					if ($result) {
						# code...
						//if we found the email
						$this->send_reset_pass_email($email, $result);
						$this->load->view('template/header');
						$this->load->view('template/reset_pass_sent', array('email' => $email));
						$this->load->view('template/footer');
					}
					else{
						$this->load->view('template/header');
						$this->load->view('template/reset_pass', array('error' => 'Email address not registed'));
						$this->load->view('template/footer');
					}
				}
			}
			else{
					$this->load->view('template/header');
					$this->load->view('template/reset_pass_sent', array('email' => $email));
					$this->load->view('template/footer');
				}
		}

		public function register()
		{
			# code...
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[50]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|match[password]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'callback_date_check');

			if ($this->form_validation->run()== false) {
				# code...
				$this->index();
			}
			else{
				$this->account_model->add_account();
				$this->index();
			}
		}

		public function date_check(){
		  	if(checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
				return TRUE;
			}
			else{
			   	$this->form_validation->set_message('date_check', 'Correct you Date of Birth.');
			   	return FALSE;
			}
		}

		public function logout()
		{
			# code...
			$newdata = array(
				'username' => '', 
				'email' => '',
				'logged_in' => false,
				);
			$this->session->unset_userdata($newdata);
			$this->session->sess_detroy();
			$this->index();
		}
	}
?>