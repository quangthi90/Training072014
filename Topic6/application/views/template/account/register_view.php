<div class="row">
	<h4>Register</h4>
	<h5>Join with us and enjoy funny together</h5>
	<?php $this->load->helper('dob'); ?>
	
		<form action="" method="post">
			<?php echo validation_errors('<span class="error">'); ?>
			<?php echo form_open("account/register/registeration"); ?>
			<div class="col-xs-5 col-md-5 input-group" style="margin: 10px 5px" >
				<span class="input-group-addon">User name</span>
				<input type="text" class="form-control" placeholder="Username"  id="username" name="username" value="<?php echo set_value('username'); ?>"/>
			</div>
			<div class="input-group"  style="margin: 10px 5px">
				<span class="input-group-addon">Password</span>
				<input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>"/>
			</div>

			<div class="input-group"  style="margin: 10px 5px">
				<span class="input-group-addon">Confirm Password</span>
				<input type="text" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php echo set_value('confirmpassword'); ?>"/>
			</div>

			<div class="input-group" style="margin: 10px 5px">
				<span class="input-group-addon">Email</span>
				<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('username'); ?>"/>
			</div>

			<div class="input-group" style="margin: 10px 5px">
				<span class="input-group-addon">Fullname</span>
				<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo set_value('fullname'); ?>"/>
			</div>

			<div class="input-prepend" style="margin: 10px 5px">
				<span class="input-group-addon">Birthday</span>
				<select name="day" id="day" required="required"><option value="0">Day</option><?php echo generate_options(1, 31); ?></select>
				<select name="day" id="day" required="required"><option value="0">Month</option><?php echo generate_options(1, 12, 'callback_month'); ?></select>
				<select name="day" id="day" required="required"><option value="0">Year</option><?php echo generate_options(2014, 1980); ?></select>
			</div>

			<div class="input-group" style="margin: 10px 5px">
				<span class="input-group-addon">Choose image</span>
				<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo set_value('fullname'); ?>"/>
				<button type="submit" name="upload" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Upload</button>
			</div>

			<button type="submit" name="register" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Register</button>
		</form>
	<?php echo form_close(); ?>
</div>