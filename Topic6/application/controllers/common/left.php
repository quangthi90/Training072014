<?php
/**
 * Common Left - Show Left for template
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template left
 */
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