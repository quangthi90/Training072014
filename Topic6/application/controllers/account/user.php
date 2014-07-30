<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//session_start();
	/**
	* 
	*/
	class user extends CI_Controller
	{
		public function  __construct()
		{
			parent:: __construct();
			 $this->load->helper("url");

			# code...
		}

		public function show_info()
		{
			//	$info = $_SESSION['username'];


			 $this->load->model('account/user_info', 'account');
			 $data['info'] = $this->account->select_user_profile();
			$this->load->view('account/info_user',$data);

		}
	}
?>