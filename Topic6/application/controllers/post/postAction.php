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
		// GET USER USERNAME
		$aUser = $this->session->userdata('username');
		// get post from DB
		$this->load->model("post");

		//echo '<pre>';var_dump($postId);exit();
		//call model: funtion getposts(), get list post of current user
		$aPosts = $this->post->getPosts( array('user_wall' => $aUser) );

		// CALL MODEL: FUNCTION DELETE POST
		$this->post->deletePost($postId, $aUser);

		$this->load->view( "module/listPosts", array('aPosts' => $aPosts) );
		// REDIRECT TO HOME PAGE
	}

	public function edit($postContent){
		//GET CURRENT USER NAME
		$aUser = $this->session->userdata('username');
		echo "<input type='text' id = 'content' value = '$postContent' width = '70px' height = '50px'> ";
		echo "<input type= 'button' id = 'save' value ='Save'>";
		// get post from DB
		$this->load->model("post");
		$this->post->editPost($postContent, $aUser);
	}
}
?>