<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->helper("url");
    }
	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/account/signin_view.php');
		$this->load->view('template/list_user.php');
		// $this->load->view('content.php');
		$this->load->model("ListPost");
		$data['result'] = $this->ListPost->listpost();
		$this->load->view("Viewlistpost", $data);
		$this->load->view('template/footer.php');
	}
}
