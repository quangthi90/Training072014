<?php
	/**
	* 
	*/
	class ViewPost extends CI_Controller
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("ListPost");
		}
		public function view_post(){
			
			$data['result'] = $this->ListPost->listpost();
			$this->load->view("viewlistpost", $data);
		}
		public function view_post_user($username){
			$data['result'] = $this->ListPost->listpost_user($username);
			if(empty($data['result'])) show_404();
			$this->load->view("viewlistpost", $data);
		}
	}
?>