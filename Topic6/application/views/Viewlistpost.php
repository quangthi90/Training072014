
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- conntent -->
	<ul class="list-group">
		<?php foreach($result as $post) { ?>
		     
		    <li class="list-group-item" style="margin-bottom: 5px">
				<h5><img src="..." alt="<?php $post['postAuthor']; ?>" class="img-circle">
				<strong><?php echo $post["postAuthor"]; ?></strong>
				<small><?php echo $post["postCreate"]; ?></small></h5>
			    <h3 class="text-uppercase"><strong><?php echo $post["postTitle"]; ?></strong></h3>
			    <a href="postdetail.php" class="pull-right">See more</a>
			    <p><?php echo $post["postContent"]; ?></p>
			    
		    </li>
		<?php } ?>
	</ul>
</div>