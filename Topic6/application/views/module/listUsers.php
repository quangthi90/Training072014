	<div class="row">
		<div class="col-md-2 col-lg-2">
			<nav class="navbar navbar-default" role="navigation" style=" padding-bottom: 10px; margin-top: 10px">
		     <!-- Brand and toggle get grouped for better mobile display -->
				<h5 class="text-danger" style="margin-left: 20px">List user</h5>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
		     <!-- Collect the nav links, forms, and other content for toggling -->
		     <div class="collapse navbar-collapse navbar-ex1-collapse">
		     	<ul class='nav nav-pills nav-stacked text-left'>
		     	<?php foreach ($aUsers as $aUser) { ?>
		     		<li><a href="<?php echo $aUser['wall_link']; ?>"><?php echo $aUser['fullname']; ?></a> <li>
		     	<?php } ?>
		       </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		</div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
