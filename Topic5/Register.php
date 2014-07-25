<?php
	if(isset($_POST["register"])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$skypename = $_POST['skypename'];

		include "php/connect.php";

		$query = mysql_query("SELECT * FROM account WHERE username= '".$username."'");
		$numrows = mysql_num_rows($query);

		if ($numrows == 0) {
			# code...
			$sql = "INSERT INTO account (username, password, skype_name, status) VALUES ('$username', '$password', '$skypename', 0)";

			$result =  mysql_query($sql);

			if ($result) {
				# code...
				header("location:index.php");
			}else{
				echo"Your registration failure";
			}

		}else{
			echo "Your username already exists. Please try again with another.";
		}
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="page-header">
				  <h1><a href="index.php">Topic - 5</a></h1> 
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<form action="" method="post">
					<div class="input-group" style="margin: 10px 5px">
						<span class="input-group-addon">User name</span>
						<input type="text" class="form-control" placeholder="Username"  id="username" name="username">
					</div>
					<div class="input-group"  style="margin: 10px 5px">
						<span class="input-group-addon">Password</span>
						<input type="text" class="form-control" placeholder="Password" id="password" name="password">
					</div>	
					<div class="input-group" style="margin: 10px 5px">
						<span class="input-group-addon">Skype name</span>
						<input type="text" class="form-control" placeholder="Skype rname"  id="skypename" name="skypename">
					</div>

					<button type="submit" name="register" class="btn btn-success" style="padding: 7px 20px; margin: 10px 5px">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>