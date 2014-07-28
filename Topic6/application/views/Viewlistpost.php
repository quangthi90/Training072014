<?php
	while($result)
	{
		$title = $result["postTitle"];
		$content = $result["postContent"];
		$create = $result["postCreate"];
		echo "<div> <strong>$title</strong></div> </br>";
		echo "<div> $content</div> </br>";
		echo "<div stype = 'float: left'>$create</div>";
		echo "<a href='PostDetail.php' stype = 'float: right'> see more</a>";
	}
?>