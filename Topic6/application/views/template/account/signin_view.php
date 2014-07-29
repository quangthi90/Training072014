<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
	
	<?php echo form_open("account/login"); ?>
	
	<div class="row">
		<div class="col-xs-9 col-sm-9 col-md-9">
			<div class="input-group" style="margin: 10px 5px">
				<span class="input-group-addon">User name</span>
				<input type="text" class="form-control" placeholder="Username"  id="username" name="username">
			</div>
			<div class="input-group"  style="margin: 10px 5px">
				<span class="input-group-addon">Password</span>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<button type="submit" name="login" class="btn btn-success pull-left" style="padding: 7px 20px; margin: 13px -25px">Login</button>
			<a href="Register.php" style="margin: 30px -15px" >Register</a>
		</div>
	</div> <!-- /end row -->

	<?php echo form_close(); ?>
	
</div> <!-- end col -->
</div> <!-- end row -->