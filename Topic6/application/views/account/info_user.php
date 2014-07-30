<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php echo 'Tài khoản :'.$info["username"].'   ';?>
<?php echo  'Tên người dùng'.$info["fullname"];?>
<?php echo 'Email: '.$info["email"];?>
<?php 
	$birthday = (substr($info["birthday"],0,11));
	echo 'Ngày sinh: '.$birthday;?>
<?php echo '<pre>';var_dump($info); ?>
</body>
</html>