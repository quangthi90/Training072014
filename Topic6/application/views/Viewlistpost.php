<?php
	while($result)
	{
		echo "<div> <>strong>$result[postTitle]</strong></div>";
		echo "<div> $result[postContent]</div>";
		echo "<div> $result[postCreate]</div>";
		echo "<a href='#'> see more</a>";
	}
?>