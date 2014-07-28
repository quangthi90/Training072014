<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Topic6</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>application/views/template/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>application/views/template/css/bootstrap-theme.css"/>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
				<img src="img/icon.png" style="width: 100px">
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<div class="page-header text-center">
				  <h1 class="text-danger">Mini Blog</h1>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<!-- from login -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 bg-danger">
				<!-- List user  -->
			</div>
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 bg-info">
				<!-- conntent -->
				<?php include "/template/add_post.php"; ?>
			</div>
		</div>
	</div>
</body>
<footer class="bg-primary text-center">
	<p style="padding: 30px 5px">@Topic6</p>
</footer>
</html>