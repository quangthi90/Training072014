<?php 
	include "php/connect.php";
	$sql = "SELECT * FROM `post` WHERE UserPost = '$session_user'";
	$result = mysql_query($sql) or die ("Query failed");
	$numrows = mysql_num_rows($result);
	if ($numrows == 0) {
		echo "You have no post. How do you feel now? Share with us and have fun together.";
	}else{
		$str_echo = "<ul class='list-group'>";
		while ($row = mysql_fetch_array($result)) {
			$str_echo = $str_echo."<li class='list-group-item' style='margin-bottom: 10px'>
							  		<h3 class='text-center'>$row[Title]</h3>";
			if( strlen($row['Content']) > 50){
				$sub_str = substr($row['Content'],0,50);
				$str_echo = $str_echo."<p>$sub_str....<a href='#'>See more</a></p>";
			}
			else
				$str_echo = $str_echo."<p>$row[Content]</p>";
			$str_echo = $str_echo."<h5><small>$row[Date]</small></h5>
						  </li>";
		}
		$str_echo = $str_echo."</ul>";

		echo $str_echo;
	}
?>