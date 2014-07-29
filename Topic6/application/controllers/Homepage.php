<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homepage extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->helper("url");
    }
	public function index()
	{
		$sResgisterLink = site_url( array('account', 'account', 'register') );
		
		$this->load->view('template/header.php');
		$this->load->view('template/account/signin_view.php', array('sResgisterLink' => $sResgisterLink));
		// GET LIST USER
		$users = array();
		$this->load->model("user");
		$users = $this->user->getUsers();
		foreach ($users as $key => $user) {
			$users[$key]['wall_link'] = site_url(array('homepage', 'wall', $user['username']));
		}
		$this->load->view('template/list_user.php', array( 'users' => $users));
		// $this->load->view('content.php');
		$this->load->model("ListPost");
		$data['result'] = $this->ListPost->listpost();
		$this->load->view("viewlistpost", $data);
		$this->load->view('template/footer.php');

		// $this->load->model("Wallpost");
		// $data1['result']= $this->Wallpost->listpost();
		// $this->load->view('postwall', $data1);
	}

	public function wall( $username ) {
		//echo ' day la wall ' . $username ;exit();
		$this->load->model("Wallpost");
		$data1['result']= $this->Wallpost->listpost($username);
		$this->load->view('postwall', $data1);
	}
}
