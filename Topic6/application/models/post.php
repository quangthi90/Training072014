<?php
	class Post extends CI_Model
	{
		public function getPosts( $aData = array() ) {
			$sQuery = "SELECT postId, postAuthor, userWall, postTitle, postContent, postCreate, postUpdate FROM Post";

			if ( !empty($aData['user_wall']) ){
				$sQuery .= " WHERE userWall = '" . $aData['user_wall'] . "'";
			}

			return $this->db->query($sQuery)->result_array();
		}

		// FUNCTION DELETE POST
		public function deletePost($postId, $aUser){
			// KIEM TRA USER CO DC PHEP DELETE POST NAY HAY KO
			if ($aUser == $this->db->query("SELECT userWall FROM Post WHERE postId = '$postId'")) {
				$sql = "DELETE Post WHERE postId = '$postId' AND userWall = '$aUser' OR postAuthor = '$aUser'";
				$this->db->query($sql);
			}
			else{
				echo "You might not delete";
			}
			// DELETE POST
			
		}
	}
?>