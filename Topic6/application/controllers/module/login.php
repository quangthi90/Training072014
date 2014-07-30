<?php
/**
 * Module Login - Show login form in header
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template login form
 */
class Login extends CI_Controller
{
	
	public function index()
	{
		// Load helper
		$this->load->helper("url");

		$sResgisterLink = site_url( array('account', 'account', 'register') );
		$this->load->view('template/account/signin_view.php', array('sResgisterLink' => $sResgisterLink));
	}
}
?>