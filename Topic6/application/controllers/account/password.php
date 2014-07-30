<?php
		// author: June
		// show: form change password
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class password extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->helper("url");
		}
		public function index(){
			$data['username'] = 'June';
			if(!empty($_REQUEST)){
				$data['pass_cur'] = $_REQUEST['pass_cur'];
				$data['pass_new'] = $_REQUEST['pass_new'];
				$data['pass_new_con'] = $_REQUEST['pass_new_con'];
				$data['flag'] = "1";
				$this->load->view('account/change_pass_result',$data);


			}
			else{
				
				$this->load->view('account/change_pass');

			}
		}
	}
?>