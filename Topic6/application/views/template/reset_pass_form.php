
<?php echo form_open('account/account/reset_password'); ?>
<h2>Reset Your password</h2>
<h4>Email</h4>
<input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" >
<button type="submit" name="resetpass" id="resetpass">Reset Password</button>
<?php echo form_close(); ?>
<?php 
	echo validation_errors('<p class="error">'); 
	if (isset($error)) {
		# code...
		echo '<p class="error">'.$error.'</p>';
	}
?>
