<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		function __contruct()
		{
			parent::__contruct();
			$this->load->model('login_model');
		}

		public function index()
		{
			// load Controller Header
			include_once(APPPATH.'controllers/common/header.php');
	    	$clsHeader = new Header();
			$clsHeader->index();

			// load Controller Left
			include_once(APPPATH.'controllers/common/left.php');
	    	$clsLeft = new Left();
			$clsLeft->index();

			$this->load->view('signin_view');
			
			// load Controller Footer
			include_once(APPPATH.'controllers/common/footer.php');
	    	$clsFooter = new Footer();
			$clsFooter->index();
		}

		public function sign_in()
		{
			$this->load->library('form_validation');

			//set rules when login
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[50]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]');

			if ($this->form_validation->run() == false) {
				$this->index();
			} else {
				$result = $this->login_model->login_account();

				switch ($result) {
					case 'logged_in':
						//authentication complete, send to logged in homepage
						redirect('/', 'location');
						break;

					case 'incorrect_password':
						$this->index();
						break;
					case 'not_activated':
						$this->index();
						break;
					case 'username_not_found':
						$this->index();
						break;
				}
			}
			
		}
	}
 ?>