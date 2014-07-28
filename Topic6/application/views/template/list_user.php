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

	<div class="row">
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 bg-danger">
			<nav class="navbar navbar-default" role="navigation" style=" padding-bottom: 10px; margin-top: 10px">
		     <!-- Brand and toggle get grouped for better mobile display -->

		     <!-- Collect the nav links, forms, and other content for toggling -->
		     <div class="collapse navbar-collapse navbar-ex1-collapse">
		      <?php 
		      		include(".././Model/connect.php");

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
						code...
					}
					echo "</ul>";
		       ?>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		</div>