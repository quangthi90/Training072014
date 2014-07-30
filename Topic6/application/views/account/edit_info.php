<?php
 echo "$info[birthday]";
?>
<!DOCTYPE html>
<div class = "col-md-7" >
	<form action="http://localhost/training/Topic6/index.php/account/user/insert_info" method="post" accept-charset="utf-8">
		<!-- Edit account name -->
		<div class="form-group">
    		<label for="account" class="col-sm-2 control-label"> Account: </label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name = "account" value = "<?php
 echo $info["username"];?>";>
    		</div>
  		</div>
  		<!-- Edit full name -->
		<div class="form-group">
    		<label for="Fullname" class="col-sm-2 control-label"> Fullname:</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name = "fullname" value = "<?php
 echo $info["fullname"];?>";>
    		</div>
  		</div>
  		<!-- email: khong được chỉnh sửa -->
  		<div class="form-group">
    		<label for="Email" class="col-sm-2 control-label"> Email: </label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name = "emailt" value = "<?php
 echo $info["email"];?>" disabled>
    		</div>
  		</div>
  		<!-- Edit birhday-->
  		<div class="form-group">
    		<label for="Fullname" class="col-sm-2 control-label"> Birthday:</label>
    		<div class="col-sm-10">
      			<input type="date" class="form-control" name = "birthday" value = "<?php
 						$day =  (substr($info["birthday"],8,2));
 						$month = (substr($info["birthday"],5,2));
 						$year = (substr($info["birthday"],0,4));
 						echo $day.'/'.$month.'/'.$year;?>
 				">
    		</div>
  		</div>
  		<input type = "submit" class="btn-primary" value ="Save">
  		</form>
	
</div>