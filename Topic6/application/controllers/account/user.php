<?php
	/* 
		show: infomation user
		Author: June
		Note: chưa có layout
	*/
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
			 $data['info'] = $this->account->selectUserProfile();
			$this->load->view('account/info_user',$data);

		}
		public function edit_info(){
			$this->load->model('account/user_info','account');
			$data['info'] = $this->account ->selectUserProfile();
			$this->load->view('account/edit_info',$data);

		}
		public function insert_info(){
			// lay gia tri khi nhan submit
			$data['username'] = $_REQUEST['account'];
			$data['account'] = $_REQUEST['fullname'];
			$data['birthday'] = $_REQUEST['birthday'];
			// insert
			//$this->load->model('account/user_info','account');
			//$this->account->updateInfo($data);
			// update info usr
			$this->load->view('account/edit_info_suc',$data);


		}
	}
?>