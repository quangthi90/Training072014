<form role="form">
	<div class="form-group">
		<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li class="active"><a href="#newarrival" role="tab" data-toggle="tab">New Arrivals</a></li>
				<li><a href="#special" role="tab" data-toggle="tab"> Special Offers</a></li>
		</ul>
		<div class="tab-content">    
          	<?php foreach ($modules as $module) { ?>
			<?php echo $module; ?>
			<?php } ?>
  		</div>
  	</div>
</form>
<script type="text/javascript">
	$('#myTab a').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
	})
</script>
