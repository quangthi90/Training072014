<?php
	include "connect.php";
	$strsql = "SELECT `skype_name`, `status` FROM `account`";
	$result = mysql_query($strsql) or die ("Query failed");
	$str_echo ="<script type='text/javascript' src='http://www.skypeassets.com/i/scom/js/skype-uri.js'></script>
				<ul class='nav nav-pills nav-stacked text-left'>";
	while ($row = mysql_fetch_array($result)) {
		if($row['status'] != 0)
			$str_echo = $str_echo."<div id='SkypeButton_Call_SalmDo_1'>
					  <script type='text/javascript'>
					    Skype.ui({
					      'name': 'dropdown',
					      'element': 'SkypeButton_Call_SalmDo_1',
					      'participants': [$row[skype_name]],
					      'imageSize': 32
					    });
					  </script>
				</div>";
	}
	$str_echo = $str_echo."</ul>";
	echo $str_echo;

	
?>