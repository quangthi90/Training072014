<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Controller {
	public function index()
	{
		// Load helper
		$this->load->helper("url");
		$sResgisterLink = site_url( array('account', 'account', 'register') );

		$this->load->view('template/header.php');

		$this->load->library('../controllers/common/header');
		$this->header->index();
		
		// load base layout
		// $this->load->library('../controllers/common/header');
		// $this->header->index();
		// $this->load->view('template/header.php');
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