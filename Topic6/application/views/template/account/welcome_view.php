<div class="col-md-7">
	<h4>Welcome <?php echo $this->session->userdata('username'); ?></h4>
	<h4><?php echo anchor('account/logout', 'Logout'); ?></h4>
</div>