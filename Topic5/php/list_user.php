<?php 
	include ("connect.php");
	$strsql = "SELECT Username, Password FROM account";
	$result = mysql_query($strsql) or die ("Query failed");

	$str_echo ="<ul class='nav nav-pills nav-stacked text-left'>";
	while ($row = mysql_fetch_array($result)) {
		$str_echo = $str_echo."<li><a href='index.php?user_page=$row[Username]'>$row[Username]</a><li>";
	}
	$str_echo = $str_echo."</ul>";
	echo $str_echo;
?>