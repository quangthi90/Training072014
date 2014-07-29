<?php

class Left extends CI_Controller {
	public function index()
	{
		// Load modules
		include_once(APPPATH.'controllers/module/listAllUsers.php');
    	$clsListAllUsers = new ListAllUsers();
		$clsListAllUsers->index();
	}
}
?>