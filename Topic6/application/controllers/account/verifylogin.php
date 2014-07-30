<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class VerifyLogin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('account','', true);
		}

		public function index()
		{
			
		}
	}
?>