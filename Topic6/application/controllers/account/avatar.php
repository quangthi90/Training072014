<?php
	session_start();

class avatar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('account/avatar', array('error' => ' ' ));
		$model = $this ->load ->model('account/user');
	}

	function do_upload()
	{
		$_SESSION['username'] = 'phuong';
		$folder_name = $_SESSION['username'];

		$path_upload = BASEPATH . 'images/'."$folder_name";
		echo BASEPATH;
		if(!file_exists($path_upload))
		{
			$create = mkdir($path_upload, 0777);
			$createThumbsFolder = mkdir($path_upload.'/thumbs', 0777);
			if(!$create || !$createThumbsFolder)
				return;
		}
		$config['upload_path'] = "$path_upload";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = "$folder_name";

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('account/avatar', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('account/change_ava_succ', $data);
		}
	}
}
?>