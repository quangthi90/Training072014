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
				$this->load->model('user');
						$data['pass'] = $this->user->getPass($data);
				
				if(''.$data['pass_new'].'' != ''.$data['pass_new_con'].'')
				{
					$data['flag'] = "2";
					
				}
				else {
						$this->load->model('user');
						$data['pass'] = $this->user->getPass($data);
							if(''.$data['pass'].'' != ''.$data['pass_cur'].'' ){
								$data['flag'] = '4';
							}
							else{

								$this->load->model('user');
								$this->user->updatePass($data);
								$data['flag'] = "1";
							}
						}
				print("<pre>");
				var_dump($data['pass_cur']); exit;
				$this->load->view('account/change_pass_result',$data);
				$this->load->view('account/change_pass');
			}

			else{
				
				$this->load->view('account/change_pass');

			}
		}
	}
?>