<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-top: 20px">
	<h4>Welcome <?php echo $this->session->userdata('username'); ?></h4>
	<h4><?php echo anchor('account/logout', 'Logout'); ?></h4>
</div> <!-- end col -->
</div> <!-- end row -->