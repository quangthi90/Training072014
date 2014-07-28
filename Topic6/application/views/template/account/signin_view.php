<div class="col-md-10">
	
	<?php echo form_open("account/login"); ?>
	
	<div class="row">
		<div class="col-md-9">
			<div class="input-group" style="margin: 10px 5px">
				<span class="input-group-addon">User name</span>
				<input type="text" class="form-control" placeholder="Username"  id="username" name="username">
			</div>
			<div class="input-group"  style="margin: 10px 5px">
				<span class="input-group-addon">Password</span>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>
		</div>
			

		<div class="col-md-3">
			<button type="submit" name="login" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Login</button>
			<a href="Register.php" style="margin: 15px">Register</a>
		</div>
	</div> <!-- /end row -->

	<?php echo form_close(); ?>
	
</div> <!-- /end col-md-10 -->