<?php
	$user = 'root';
	$pass ='';
	$db = 'topic_5';
	$link = mysql_connect("localhost",$user,$pass);
	if (!$link) {
		die("could'nt connect to MySQL");
	}
	mysql_select_db($db) or die("Couldn't open $db: ".mysql_error());
	$table = "comment";
	$date = date();

	$userCmt = $_SESSION["username"];
	$comment = $_REQUEST["enterComment"];
	$content = $_REQUEST["status"];
	$query1 = "SELECT ID From post where 'Content' = '$content' ";
	$idpost = mysql_query($query1 , $link);
	if (isset($_REQUEST("enterComment"))) {
		# code...
		$query= "INSERT INTO $table VALUES('$idpost', '$userCmt' , '$date' , '$comment')";
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
