<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
				<h4> Welcome, <?php echo ($_SESSION["sess_user"]);?>!
					<a href="Logout.php">Logout</a>
				</h4> 
			</div>
		</div>
		<div class="row">
			<?php 
				include "php/connect.php";
				$sql = "SELECT * FROM `post` WHERE UserPost = '".$_SESSION['sess_user']."'";
				$result = mysql_query($sql) or die ("Query failed");
				$numrows = mysql_num_rows($result);
				if ($numrows == 0) {
					# code...
					echo "You have no post. How do you feel now? Share with us and have fun together.";
				}else{
					$str_echo = "<ul class='list-group'>";
					while ($row = mysql_fetch_array($result)) {
						$str_echo = $str_echo."<li class='list-group-item' style='margin-bottom: 10px'>
										  		<h3 class='text-center'>$row[Title]</h3>";
						if( strlen($row['Content']) > 50){
							$sub_str = substr($row['Content'],0,50);
							$str_echo = $str_echo."<p>$sub_str....<a href='#'>See more</a></p>";
						}
						else
							$str_echo = $str_echo."<p>$row[Content]</p>";
						$str_echo = $str_echo."<h5><small>$row[Date]</small></h5>
									  </li>";
					}
					$str_echo = $str_echo."</ul>";

					echo $str_echo;
				}
				
?>
		</div>
	</div>


</body>
</html>