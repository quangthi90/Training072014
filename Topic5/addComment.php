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
	session_start(); // Start call PHP session
	$date = date ("Y-m-d H:i:s", time()); // time() <-- timestamp of now
	print("<pre>");
	var_dump($_REQUEST); // Cho nay e bik tai sao co error ko ?da hk
	exit;
	$userCmt = $_SESSION["Username"];
	if ( empty($_REQUEST["enterComment"]) || empty($_REQUEST["status"]) ){
		echo "must submit form <br> Client <a href=" . @$_SERVER['HTTP_REFERER'] . ">here</a> to back";
		return false;
	}
	$comment = $_REQUEST["enterComment"];
	$content = $_REQUEST["status"];
	$idPost = $_REQUEST['idPost'];
	$query= "INSERT INTO $table VALUES('$idPost', '$userCmt' , '$date' , '$comment')";
	$result = mysql_query($query , $link);
		# code...
	echo "<div><span>$userCmt: </span>$comment</div>";
	mysql_close($link);
?>

