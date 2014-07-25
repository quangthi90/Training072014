<?php
	$user = 'root';
	$pass ='';
	$db = 'topic5';
	$link = mysql_connect("localhost",$user,$pass);
	if (!$link) {
		die("could'nt connect to MySQL");
	}
	mysql_select_db($db) or die("Couldn't open $db: ".mysql_error());
	$table = "comment";
	$date = date();
	$idpost= $_REQUEST[""];
	$userCmt = $_REQUEST["username"];
	$comment = $_REQUEST["enterComment"];
	if (isset($_GET('enterComment'))) {
		# code...
		$query= "INSERT INTO $table VALUES($idpost, $userCmt , $date , $comment)";
	}
	$result = mysql_query($query , $link);
	if (!$result) {
		# code...
		echo "Don't connect Database";
	}
	elseif () {
		# code...
		echo "<div><span>$userCmt: </span>$comment</div>";
	}
	mysql_close($link);
?>
