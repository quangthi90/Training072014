<li>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- conntent -->
				<ul>
			<?php foreach( $aPosts as $aPost ) { ?>
				<li><input type='hidden' id="idpost" value="<?php echo $aPost['postId']; ?>" /></li>
			     <li><?php echo $aPost["postAuthor"]; ?></li>
			    <li><?php echo $aPost["postTitle"]; ?></li>
			     <li><?php echo $aPost["postContent"]; ?></li>
			     <li><?php echo $aPost["postCreate"]; ?></li>
			     <li><a href="<?php echo $aPost['wall_link_delete']; ?>">Delete</a></li>
			     <li><a href="">see more</a></li>
			<?php } ?>
</ul>
			</div>
</li>