
<?php
	echo $pass_new. "    ";
	echo $pass_cur."    ";
	echo $pass_new_con;
	echo "select pass ne: ".$pass;
	if($flag == "1")
	{
		echo "<script> alert('Thay đổi mật khẩu thành công!'); </script>";
	}
	else {
		if ($flag == "2")
			echo "<script> alert(' Mật khẩu xác nhận không đúng'); </script>";
		else if($flag == '3')
			echo "<script> alert(' Xin vui lòng nhập đầy đủ mật khẩu'); </script>";	
			else
			"<script> alert('Mật khẩu hiện tại không đúng'); </script>";
			
	}
?>

