<?php
	include "php/connect.php";

	$query = "SELECT * FROM `post` WHERE UserPost = '".$_SESSION['sess_user']."'";

	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result)) {
		# code...
		if (strlen($row['Content']) > 50){
			$content = substr($row['Content'],0, 50);
			$text = $content.'....<a href="post.php?id=' .$row['ID'].'"> See more</a>';
		}
		else{
			$text = $row['Content'];
		}
		echo $text;
	}
?>
