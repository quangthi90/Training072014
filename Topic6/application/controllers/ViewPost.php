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
		}
		public function view_post(){
			$this->load->model("ListPost");
			$data['result'] = $this->ListPost->listpost();
			$this->load->view("Viewlistpost", $data);
		}
	}
?>