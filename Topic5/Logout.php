<?php
	session_start();
	include "php/connect.php";
	$username = $_SESSION['sess_user'];
	$strSQl = mysql_query("UPDATE `account` SET `status`= 0 WHERE `Username` = '$username'") or die("Query failed");
	unset($_SESSION['sess_user']);
	session_destroy();
	header("location:index.php")
?>