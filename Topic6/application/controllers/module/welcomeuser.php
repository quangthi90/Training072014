<?php 
	/**
	* Common Welcome user after login
	* @author: Daisy(hoathachthao1606@gmail.com)
 	* @param: none
 	* @return: template welcome
	*/
	class WelcomeUser extends CI_Controller
	{
		function __construct()
		{
			//Load helper
			$this->load->helper('url');
			$sLogout = site_url('account', 'acount', 'logout');
			$this->load->view('template/account/welcome_view.php', array('sLogout' => $sLogout));
		}
	}
 ?>