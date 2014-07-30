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

		$aPosts = $this->post->getPosts();

		// Format list users again---change wall_link
		foreach ( $aPosts as $key => $aPost) {
			$aPosts[$key]['wall_link_delete'] = site_url(array('post', 'postAction', 'delete', $aPost['postId']));
			$aPosts[$key]['wall_link_edit'] = site_url(array('post','postAction', 'edit', $aPost['postContent']));
		}

		$aData['aPosts'] = $aPosts;

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