<?php
	include "connect.php";
	$strsql = "SELECT `skype_name`, `status` FROM `account`";
	$result = mysql_query($strsql) or die ("Query failed");
	$str_echo ="<ul class='nav nav-pills nav-stacked text-left'>
		<li><i style='color: red; margin: 5px' class='fa fa-heart fa-2x'></i> User1<li>
	</ul>";
	echo $str_echo;
?>