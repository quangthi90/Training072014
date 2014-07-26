<?php
	$user = 'root';
	$pass ='';
	$db = 'topic_5';
	$link = mysql_connect("localhost",$user,$pass);
	if (!$link) {
		die("could'nt connect to MySQL");
	}
	mysql_select_db($db) or die("Couldn't open $db: ".mysql_error());

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
				  <h1>Topic - 5</h1>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-md-7">
						<div class="input-group" style="margin: 10px 5px">
							<span class="input-group-addon">User name</span>
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="input-group"  style="margin: 10px 5px">
							<span class="input-group-addon">Password</span>
							<input type="text" class="form-control" placeholder="Password">
						</div>	
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Login</button>
						<a href="" style="margin: 15px">Register</a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<nav class="navbar navbar-default" role="navigation" style="background-color:#ffcc00; padding-bottom: 10px">
					<!-- Brand and toggle get grouped for better mobile display -->
					<h5 class="text-danger">List user</h5>
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
						<ul class="nav nav-pills nav-stacked text-left">
							<li><a href="">User1</a><li>
							<li><a href="">User2</a><li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>	
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php
						$table = "post";
						$userCmt = $_SESSION["username"];
						$query1 = "SELECT `ID`, year(`Date`) year_post, MONTH(`Date`) month_post ,DATE_FORMAT(`Date`,'%m/%y') time_post, `Title` FROM `post` WHERE `UserPost` =  '$userCmt'" 

						$result1 = mysql_query($query1) or die ("Query failed");
						$nam = $result1[0]['year_post'];
						$thang = $result1[0]['month_post'];
						$str_echo = "<ul><li>$nam
										<ul><li>$thang<ul>";

						while ($row = mysql_fetch_array($result1)) {
							if($row['year_post'] != $nam){
								$nam = $row['year_post'];
								$str_echo = $str_echo."</ul><ul>$nam";
							}
							if($row['month_post'] != $thang){
								$thang = $row['month_post'];
								$str_echo = $str_echo."</ul></li></ul><ul><li>$thang<ul>";
							}

							$time = $row['time_post'];
							$title = $row['Title'];
							  $str_echo = $str_echo."<li>$time: $title</li>";
						}

						$str_echo = $str_echo."</ul></li></ul></li></ul>";
						echo $str_echo;
					

				?>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<ul class="list-group">

				<!-- June add -->


				 <li class="list-group-item">
				 		<form action="poststatus.php" method="get"> 
				 			<textarea style="width:100%; border-radius: 5px; " row = "3" id = "status" name="status" placeholder = " Bạn đang nghĩ gì?" ></textarea>
				 			<input class="btn-primary" type="submit" value="post">
				 			
				 		</form>
						<form action="addComment.php" method="get"> 
					        <input style="width:100%; border-radius: 5px; "  type="text" id = "enterComment" name="enterComment" placeholder = " Enter comment" ></textarea>
					        <input class="btn-primary" type="submit" value="Comment">
					        
					     </form>
				 	
				 </li>
				 <div id = "formStatus" style = "height: 40px; width: 40px;">
				 		
				 	</div>	
				  <li class="list-group-item">
				  	<h4><strong> <?php echo $user ?></strong></h4>
				  	<?php
				  	echo $stt;
				  	?>
				  	<h5><small>Date post: <?php echo $datepost?></small></h5>
				  </li>
	
					<li class="list-group-item">
				  	<h4><strong>User 2</strong></h4>
				  	<p>Content Post</p>
				  	<h5><small>Date post</small></h5>
				  </li>
				</ul>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<nav class="navbar navbar-default" role="navigation" style="background-color:#ffcc00; padding-bottom: 10px">
					<!-- Brand and toggle get grouped for better mobile display -->
					<h5>Skype</h5>
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
						<ul class="nav nav-pills nav-stacked text-left">
							<li><i style="color: red" class="fa fa-heart fa-2x"></i> User1<li>
							<li><i class="fa fa-heart fa-2x"></i> User2<li>
						</ul>
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
<footer>
	<hr>Topic 5
</footer>
</html>

