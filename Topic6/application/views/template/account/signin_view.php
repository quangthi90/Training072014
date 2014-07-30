<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
	<?php echo form_open("account/account/login"); ?>
	
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
			<button type="submit" name="login" class="btn btn-success pull-left" style="padding: 7px 20px; margin: 13px -25px">Login</button>
			<a href="<?php echo $sResgisterLink; ?>" style="margin: 30px -12px" >Register</a>
		</div>
	</div> <!-- /end row -->

	<?php echo form_close(); ?>
	
</div>
</div>