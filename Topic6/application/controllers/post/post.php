<?php
/**
 * Module post - delete post
 * @author: NguyenNga
 * @param: none
 * @return: postId to delete
 */
class post extends CI_Controller
{
	
	public function delete($postId)
	{
		// GET USER USERNAME
		$aUser = $this->session->userdata('username');
		// get post from DB
		$this->load->model("mpost");

		//echo '<pre>';var_dump($postId);exit();
		//call model: funtion getposts(), get list post of current user
		$aPosts = $this->mpost->getPosts( array('user_wall' => $aUser) );

		// CALL MODEL: FUNCTION DELETE POST
		$this->mpost->deletePost($postId, $aUser);

		$this->load->view( "module/listPosts", array('aPosts' => $aPosts) );
		// REDIRECT TO HOME PAGE
	}

	public function edit(){
		
	}
}
?>