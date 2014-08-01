
<!-- <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"> -->
				<!-- conntent -->
		<?php foreach( $aPosts as $aPost ) { ?>
		     
		    <div class="col-md-5 list-group-item" style="margin: 5px 10px; margin-left: 30px">
				<h5><img src="<?php APPPATH.'assets/img/avatar1.jpg'?>" class="img-circle"/>
				<strong><?php echo $aPost["postAuthor"]; ?></strong>
				<small><?php echo $aPost["postCreate"]; ?></small></h5>
				<input type="hidden" value="<?php echo $aPost['postId']; ?>">
			    <h3 class="text-uppercase"><strong><?php echo $aPost["postTitle"]; ?></strong></h3>
			    <p><?php echo $aPost["postContent"]; ?></p>
			    <div style="margin-bottom: 10px">
			    	<a href="postdetail.php" class="pull-right">See more</a><br/>
				    <a href="<?php echo $aPost['wall_link_delete']; ?>" class="pull-right">Delete</a><br/>
				    <a href="<?php echo $aPost['wall_link_edit']; ?>" class="pull-right">Edit</a>
			    </div>
			    
		    </div>
		<?php } ?>
<!-- </div> -->