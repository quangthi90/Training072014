<?php
	if (isset($_POST["login"])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];

		include "php/connect.php";

		$query = mysql_query("SELECT * FROM account WHERE username= '".$username."' AND password='".$password."'");
		$numrows = mysql_num_rows($query);

		if ($numrows!= 0) {
			# code...
			while ($row = mysql_fetch_assoc($query)) {
				# code...
				$dbuser = $row['Username'];
				$dbpass = $row['Password'];
			}
			if ($username == $dbuser && $password == $dbpass) {
				$strSQl = mysql_query("UPDATE `account` SET `status`= 1 WHERE `Username` = '$username'") or die("Query failed");
				# code...
				session_start();
				$_SESSION['sess_user'] = $username;
				header("location:userprofile.php");
			}
		}else{
			echo "Invalid username or password";
		}
	}
?>