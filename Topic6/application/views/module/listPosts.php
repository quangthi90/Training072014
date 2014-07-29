
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- conntent -->
	<!-- <ul class="list-group"> -->
		<?php foreach( $aPosts as $aPost ) { ?>
		     
		    <div class="col-md-5 list-group-item" style="margin: 5px 10px; margin-left: 30px">
				<h5><img src="./../assets/img/avatar1.jpg" class="img-circle"/>
				<strong><?php echo $aPost["postAuthor"]; ?></strong>
				<small><?php echo $aPost["postCreate"]; ?></small></h5>
			    <h3 class="text-uppercase"><strong><?php echo $aPost["postTitle"]; ?></strong></h3>
			    <a href="postdetail.php" class="pull-right">See more</a>
			    <p><?php echo $aPost["postContent"]; ?></p>
			    
		    </div>
		<?php } ?>
	<!-- </ul> -->
</div>