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
	}
?>