<?php
	session_start();
	if (!isset($_SESSION["sess_user"])) {
		# code...
		header("location:userprofile.php");
	}
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
				  <h1><a href="index.php">Topic - 5</h1>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<h4> Welcome, <?=$_SESSION['sess_user'];?>!
					<a href="Logout.php">Logout</a>
				</h4> 
			</div>
		</div>
		<div class="row">
			<?php
				$session_user = $_SESSION['sess_user'];
			 	include"php/list_post_user.php"; 
			 ?>
		</div>
	</div>


</body>
</html>