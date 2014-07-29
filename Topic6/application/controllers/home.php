<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Homepage - Show Header Homepage
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template home
 */
class Home extends CI_Controller {
	public function index()
	{
		// load Controller Header
		include_once(APPPATH.'controllers/common/header.php');
    	$clsHeader = new Header();
		$clsHeader->index();
		
		// load Controller Left
		include_once(APPPATH.'controllers/common/left.php');
    	$clsLeft = new Left();
		$clsLeft->index();

		// $this->load->view('template/left.php');
		// $this->load->view('template/right.php');
		// $this->load->view('template/header.php');
		
		/*$this->load->view('template/header.php');
		$this->load->view('template/account/signin_view.php', array('sResgisterLink' => $sResgisterLink));

		// GET LIST USER
		$users = array();
		$this->load->model("user");
		$users = $this->user->getUsers();
		foreach ($users as $key => $user) {
			$users[$key]['wall_link'] = site_url(array('homepage', 'wall', $user['username']));
		}
		$this->load->view('template/list_user.php', array( 'users' => $users));
		
		$this->load->model("ListPost");
		$data['result'] = $this->ListPost->listpost();
		$this->load->view("viewlistpost", $data);
		$this->load->view('template/footer.php');*/
	}
	public function wallpostdelete($postId){
		$this->load->model("Wallpost");
		$this->Wallpost->deletepost($postId);
	}
}
?>