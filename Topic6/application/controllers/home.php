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
		// load data for content
		$this->load->model("post");
		$aData['aPosts'] = $this->post->getPosts();

		// load Controller Header
		include_once(APPPATH.'controllers/common/header.php');
    	$clsHeader = new Header();
		$clsHeader->index();
		
		// load Controller Left
		include_once(APPPATH.'controllers/common/left.php');
    	$clsLeft = new Left();
		$clsLeft->index();

		// Load list Posts template
		$this->load->view("module/listPosts", $aData);

		// load Controller Footer
		include_once(APPPATH.'controllers/common/footer.php');
    	$clsFooter = new Footer();
		$clsFooter->index();
	}
}
?>