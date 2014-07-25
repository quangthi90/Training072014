<?php 
	include ("connect.php");
	$strsql = "SELECT `ID`, `Date`, `Content`, `UserPost`, `Title` FROM `post`";
	$result = mysql_query($strsql) or die ("Query failed");

	$str_echo = "<ul class='list-group'>";
	while ($row = mysql_fetch_array($result)) {
		$str_echo = $str_echo."<li class='list-group-item' style='margin-bottom: 10px'>
					  	<h4><strong style='float:left'>$row[UserPost]</strong>
					  	<h3 class='text-center'>$row[Title]</h3></h4>";
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
?>