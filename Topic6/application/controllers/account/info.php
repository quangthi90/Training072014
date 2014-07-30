<?php
	/* 
		show: edit infomation user
		Author: June
		Note: chưa có layout
	*/
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//session_start();
	/**
	* 
	*/
	class info extends CI_Controller
	{
		public function  __construct()
		{
			parent:: __construct();
			 $this->load->helper("url");

			# code...
		}
		public function index(){
			$data['username'] = "June";
			// khi co  yeu cau gui len
			if(!empty($_REQUEST)){
				
				$data['username'] = "June";
				$data['fullname'] = $_REQUEST['fullname'];
				$data['birthday'] = $_REQUEST['birthday'];
				$data['email'] = $_REQUEST['email'];
				// update user info
				$this->load->model('user');
				$this->user->updateInfo($data);
				// alert success
				$this->load->view('account/edit_info_suc',$data);
				// reload edit_info
				$this->load->model('user');
				$data['info'] = $this->user->getUserProfile($data);
				$this->load->view('account/edit_info',$data);
				


			}
			// khong co yeu cau gui len
			else{
				$this->load->model('user');
				$data['info'] = $this->user->getUserProfile($data);
				$this->load->view('account/edit_info',$data);	
			}
		}


	}
?>