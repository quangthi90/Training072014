<?php 
	include ("connect.php");
	$strsql = "SELECT `ID`, `Date`, `Content`, `UserPost`, `Title` FROM `post`";
	$result = mysql_query($strsql) or die ("Query failed");

	$str_echo = "<ul class='list-group'>";
	while ($row = mysql_fetch_array($result)) {
	$str_echo = $str_echo."<li class='list-group-item' style='margin-bottom: 10px'>
				  	<h4><strong style='float:left'>$row[UserPost]</strong>
				  		<h3 class='text-center'>$row[Title]</h3>
				  	</h4>
				  	<p>$row[Content]</p>
				  	<h5><small>$row[Date]</small></h5>
				  </li>";
	}
	$str_echo = $str_echo."</ul>";

	echo $str_echo;
?>