<?php 
	/**
	* Common Welcome user after login
	*/
	class WelcomeUser extends CI_Controllser
	{
		
		public function index()
		{
			$this->load->view('template/welcome_view.php');
		}
	}
 ?>