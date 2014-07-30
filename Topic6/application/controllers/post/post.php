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
		// get post from DB
		$this->load->model("post");

		
		// GET USER USERNAME
		$user = $this->session->userdata('username');
		// CALL MODEL: FUNCTION DELETE POST
		$this->post->deletePost($postId, $user);
		
		$this->load->view("module/listPosts",'user'=> $user);
		// REDIRECT TO HOME PAGE
	}
	}
}
?>