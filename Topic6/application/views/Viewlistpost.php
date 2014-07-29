
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- conntent -->
				<ul>
			<?php foreach($result as $post) { ?>
			     
			    <li><?php echo $post["postTitle"]; ?></li>
			     <li><?php echo $post["postContent"]; ?></li>
			     <li><?php echo $post["postCreate"]; ?></li>
			     <li><a href="postdetail.php">see more</a></li>
			<?php } ?>
</ul>
			</div>