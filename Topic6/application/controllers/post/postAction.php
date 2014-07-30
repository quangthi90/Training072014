<?php
/**
 * Module post - delete post
 * @author: NguyenNga
 * @param: none
 * @return: postId to delete
 */
class PostAction extends CI_Controller
{
	
	public function delete($postId)
	{
		// get post from DB
		$this->load->model("post");


		//echo '<pre>';var_dump($postId);exit();
		// GET USER USERNAME
		$aUser = $this->session->userdata('username');
		$aPosts = $this->post->getPosts( array('user_wall' => $aUser) );
		// CALL MODEL: FUNCTION DELETE POST
		$this->post->deletePost($postId, $aUser);

		$this->load->view( "module/listPosts", array('aPosts' => $aPosts) );
		// REDIRECT TO HOME PAGE
	}
}
?>