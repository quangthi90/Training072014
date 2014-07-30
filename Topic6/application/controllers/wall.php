<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Homepage - Show Header Homepage
 * @author: NguyenNga<nguyennga.khtn10@gmail.com>
 * @param: none
 * @return: template wall
 */
class Wall extends CI_Controller {
	public function index($username)
	{
		// load data for content
		$this->load->model("post");
		$aPosts = $this->post->getPosts( array('user_wall' => $username) );

		foreach ( $aPosts as $key => $aPost) {
			$aPosts[$key]['wall_link_delete'] = site_url(array('post','postAction', 'delete', $aPost['postId']));
			$aPosts[$key]['wall_link_edit'] = site_url(array('post','postAction', 'edit', $aPost['postContent']));
		}

		// load Controller Header
		include_once(APPPATH.'controllers/common/header.php');
    	$clsHeader = new Header();
		$clsHeader->index();
		
		// load Controller Left
		include_once(APPPATH.'controllers/common/left.php');
    	$clsLeft = new Left();
		$clsLeft->index();

		// Load list Posts template
		$this->load->view( "module/listPosts", array('aPosts' => $aPosts) );
		// load Controller Footer
		include_once(APPPATH.'controllers/common/footer.php');
    	$clsFooter = new Footer();
		$clsFooter->index();
	}
}
?>