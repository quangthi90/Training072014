<?php
/**
 * Common Header - Show Header for template
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template header
 */
class Header extends CI_Controller {
	public function index()
	{
		// load template
		$this->load->view('common/header.php');

		if ($this->session->userdata('username')){
			// Load modules welcomeuser
			$data['title'] = 'Welcome';
			$this->load->view('template/account/welcome_view', $data);
		}
		else {
			// Load modules login
			include_once(APPPATH.'controllers/module/login.php');
	    	$clsLogin = new Login();
			$clsLogin->index();	
		}
		
	}
}
?>