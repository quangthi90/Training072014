<?php
/**
 * Module ListAllUser - Show All Users
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template list all users
 */
class ListAllUsers extends CI_Controller
{
	
	public function index()
	{
		// get all users from DB
		$aUsers = array();
		$this->load->model("user");
		$aUsers = $this->user->getAllUsers();

		// Format list users again---change wall_link
		foreach ( $aUsers as $key => $aUser ) {
			$aUsers[$key]['wall_link'] = site_url(array('wallPage', 'wall', $aUser['username']));
		}

		$this->load->view('module/listUsers.php', array( 'aUsers' => $aUsers));
	}
}
?>