<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Topic-5</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.1.0/css/font-awesome.css"/>
</head>
<body>
	<div <div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
				<div class="page-header">
				  <h1><a href="index.php">Topic - 5</a></h1>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="row">
					<form action="Login.php" method="post">
						<div class="col-md-7">
							<div class="input-group" style="margin: 10px 5px">
								<span class="input-group-addon">User name</span>
								<input type="text" class="form-control" placeholder="Username"  id="username" name="username">
							</div>
							<div class="input-group"  style="margin: 10px 5px">
								<span class="input-group-addon">Password</span>
								<input type="text" class="form-control" placeholder="Password" id="password" name="password">
							</div>	
						</div>
						<div class="col-md-3">
							<button type="submit" name="login" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Login</button>
							<a href="Register.php" style="margin: 15px">Register</a>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<nav class="navbar navbar-default" role="navigation" style="background-color:#ffcc00; padding-bottom: 10px">
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
						<?php 
							include "php/list_user.php"; ?>
					</div><!-- /.navbar-collapse -->
				</nav>	
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8">
				< <ul class="list-group">
				  <!--li class="list-group-item">
				  	<h4><strong style="float:left">User 1</strong>
				  		<h3 class="text-center">Title</h3>
				  	</h4>
				  	<p>Content Post</p>
				  	<h5><small>Date post</small></h5>
				  </li-->
				
				 <li class="list-group-item">
				 		<form action="php/poststatus.php" method="get"> 
				 			<textarea style="width:100%; border-radius: 5px; " row = "3" id = "status" name="status" placeholder = " Bạn đang nghĩ gì?" ></textarea>
				 			<input class="btn-primary" type="submit" value="post">
				 			
				 		</form>
				 	
				 </li>
				 </ul> 
				<?php include "php/content.php"; ?>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<nav class="navbar navbar-default" role="navigation" style="background-color:#ffcc00; padding-bottom: 10px">
					<!-- Brand and toggle get grouped for better mobile display -->
					<h5 class="text-danger" style="margin-left: 20px">Skype</h5>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex2-collapse">
						<?php include "php/list_skyper.php"; ?>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<!-- jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/knockout-3.1.0.js"></script>
</body>
<footer class="text-center">
	<hr>@Topic 5
</footer>
</html>