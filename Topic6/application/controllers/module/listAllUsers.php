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

		// Format list users again
		foreach ( $aUsers as $key => $aUser ) {
			$aUsers[$key]['wall_link'] = site_url(array('homepage', 'wall', $aUser['username']));
		}

		$this->load->view('module/listUser.php', array( 'aUsers' => $aUsers));
	}
}
?>