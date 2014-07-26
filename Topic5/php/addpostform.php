<?php
	echo "<ul class=list-group>
				 
				
				 <li class=list-group-item>
			 		<form action= php/poststatus.php method= post > 
			 			<input type =  text style=width:100%; border-radius: 5px; id = titlepost name = titlepost placeholder =  'Nhập tiều đề bài viết'>
			 			<textarea style= width:100% border-radius: 5px margin-top: 5px; row = 3 id = status name= status placeholder =  'Nhập nội dung bài viết? '></textarea>
			 			<input class= btn-primary type= submit  value= post>
			 		</form>
				 </li>
				 </ul> ";
?>