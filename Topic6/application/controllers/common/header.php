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

		// Load modules
		include_once(APPPATH.'controllers/module/login.php');
    	$clsLogin = new Login();
		$clsLogin->index();
	}
}
?>