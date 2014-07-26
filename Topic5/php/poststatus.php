<?php
 
  // bắt đầu session
	session_start();
	// kết nối db

//// exit; 
	$connection = mysql_connect("localhost","root", "");
	if(!$connection) {
	    die ('Not connect: '.mysql_error());
	    
	}

	$IsSuccess = mysql_selectdb("topic5", $connection);
	if(!$IsSuccess){
	    die('Cannot selected db: '.mysql_error());
	    echo "ket noi that bai";
	}
	// gán thử
	$_SESSION['Username'] = 'thuy';
	$user = $_SESSION['Username'];
	$stt = $_REQUEST["status"];
	$tt = $_REQUEST["titlepost"];
	$date = getdate();
	$datepost = "$date[year]".'-'."$date[mon]".'-'."$date[mday]".'  '."$date[hours]".':'."$date[minutes]".':'."$date[seconds]";
	
	$insert_data = "insert into post values ('null','$datepost','$stt','$user','$tt')";
	echo $insert_data;
	mysql_query($insert_data) or die ("Query failed");

//exit;
?>

