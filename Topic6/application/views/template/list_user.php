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
		<div class="col-md-2 col-lg-2">
			<nav class="navbar navbar-default" role="navigation" style=" padding-bottom: 10px; margin-top: 10px">
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
		     	<ul class='nav nav-pills nav-stacked text-left'>
		      <?php 
		      		include("application/models/connect.php");
					$query = "SELECT username FROM account ";
					$result = mysql_query($query) or die ("query fail");
					while ($row = mysql_fetch_array($result)) {
						echo "<li><a href=''>$row[username]</a> <li>";
					}
		       ?>
		       </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		</div>