<?php
	$user = 'root';
	$pass ='';
	$db = 'topic5';
	$link = mysql_connect("localhost",$user,$pass);
	if (!$link) {
		die("could'nt connect to MySQL");
	}
	mysql_select_db($db) or die("Couldn't open $db: ".mysql_error());

?>