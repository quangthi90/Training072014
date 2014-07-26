<?php
	ob_start();
	session_start();
?>
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
					<?php if (!isset($_SESSION["sess_user"])) { ?>

					<form action="Login.php" method="post">
						<div class="col-md-7">
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
					</form>
					<?php } else { ?>
						<div class="col-md-7">
							<div class="input-group" style="margin: 10px 5px">
								<h4> Welcome, <?php echo ($_SESSION["sess_user"]);?>!
								<a href="Logout.php">Logout</a>
							</div>
						</div>
					<?php }; ?>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<a href="index.php" class="btn btn-success pager center-block">Home Page</a>
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
			<?php
				if(!isset($_REQUEST['idPost'])) return;
				$idPost = $_REQUEST['idPost'];
				include "php/connect.php";
				$result = mysql_query("SELECT `ID`, DATE_FORMAT(`Date`,'%d/%m/%y') time, `Content`, `UserPost`, `Title` FROM `post` WHERE `ID` = $idPost") or die ("Query failed");
				$result1 = mysql_query("SELECT `IDPost`, `UserCmt`, `Date`, `Content` FROM `comment` WHERE `IDPost` = $idPost
					") or die ("Query failed");
				$row = mysql_fetch_array($result); 
				$str_echo = "<div class='page-header text-warning'><h3>$row[Title]</h3></div>
				<p>$row[Content]</p>
				<h4><small>$row[time]</small></h4><br>
				<h4>Comment</h4>
				<ul class='list-group'>";
				while ($row1 = mysql_fetch_array($result1)) {
					$str_echo = $str_echo."<li class='list-group-item'>
							<p><strong>$row1[UserCmt]</strong>: $row1[Content]</p>
							<h5><small>$row1[Date]</small></h5>
						</li>";
				}
					
				$str_echo = $str_echo."</ul>
				<div class='list-group'>
					<h5>Add Comment</h5>
<<<<<<< HEAD
					<form action = 'addcComment.php' method ='get'>
					<textarea class='form-control' rows='3'></textarea>
					<input type='submit' class='btn btn-warning pull-right' style='margin: 10px; padding: 5px 40px' value = 'Comment'/>
					</form>
=======
					<textarea class='form-control' rows='3'></textarea>
					<button type='button' class='btn btn-warning pull-right' style='margin: 10px; padding: 5px 40px'>Add</button>
>>>>>>> 2b8d5eee437d4d8d5cbd56b639a1410c7d29c79b
				</div>";
				echo $str_echo;
			?>
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