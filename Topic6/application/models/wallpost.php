<?php
	/**
	* 
	*/
	class Wallpost extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		/**
		 * Get list posts by username
		 * @author: NguyenNga<nguyennga.khtn10@gmail.com>
		 * @param: string username
		 * @return: array object Posts
		 */
		public function listpost($username){
			$sQuery = "SELECT postId, postAuthor, userWall, postTitle, postContent, postCreate, postUpdate FROM Post WHERE userwall = '$username'";
			
			$query = $this->db->query( $sQuery );

			return $query->result_array();
		}
		public function deletepost($postId){
			$this->db->where("postId","$postId");
			$this->db->delete("post");
		}
	}
	
?>