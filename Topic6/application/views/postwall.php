<li>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- conntent -->
				<ul>
			<?php foreach($result as $post) { ?>
				<li><input type='hidden' id="idpost" value="<?php echo $post['postId']; ?>" /></li>
			     <li><?php echo $post["postAuthor"]; ?></li>
			    <li><?php echo $post["postTitle"]; ?></li>
			     <li><?php echo $post["postContent"]; ?></li>
			     <li><?php echo $post["postCreate"]; ?></li>
			     <li><a href="<?php echo $user['wall_link_delete']; ?>">Delete</a></li>
			     <li><a href="">see more</a></li>
			<?php } ?>
</ul>
			</div>
</li>