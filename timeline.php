<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include "php/content.php";
	$table = "post";
	$query1 = "SELECT `ID`, year(`Date`), MONTH(`Date`),DATE_FORMAT(`Date`,'%m/%y'), `Title` FROM `post` WHERE `UserPost` = ";
	$result1 = mysql_query($query1,$link) or die ("Query failed");


	while ($row = mysql_fetch_array($result1)) {
		$nam = $row[0]['year'];
		echo $nam;
	}
?>
</body>
</html>
