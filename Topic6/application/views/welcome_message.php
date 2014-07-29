<<<<<<< HEAD
<?php
	$hostname = "Localhost";
	$dataname = "topic6";
	$username = "root";
	$password = "";
	if (!($connection = @mysql_connect($hostname, $username, $password)))
	    die("Error: Cannot connect to database !!!");
	if (!(mysql_select_db($dataname, $connection)))
		die("Error: Cannot select database name: $databaseName");
?>


	<nav class="navbar navbar-default" role="navigation" style=" padding-bottom: 10px">
     <!-- Brand and toggle get grouped for better mobile display -->
    
     </div>
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse navbar-ex1-collapse">
      <?php 
      		// include(".././Model/connect.php");

			 $user1 = 'June';
			 $user2 = 'Salm';
			 $user3 = 'Daisy';
			 $user4 = 'Nga';

			$query = "SELECT distinct(username) FROM account ";
			$result = mysql_query($query) or die ("query fail");
			echo "<strong> List user </strong>";
			echo "<ul class='nav nav-pills nav-stacked text-left'>";
				
			while ($row = mysql_fetch_array($result)) {
				echo "<li>$row[username] <li>";
				//echo "$row[username]";
				# code...
			}
			echo "</ul>";
       ?>
     </div><!-- /.navbar-collapse -->
    </nav>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
>>>>>>> 8aac2dd45fae4af14a8cb31403f7d19e7c52d96a
