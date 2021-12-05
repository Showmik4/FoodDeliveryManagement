<?php
	include 'controllers/AdduserController.php';
?>
  


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script  src="js/uservalidation.js"></script>
</head>
<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	 
	<form action="" method="post" onchange="return validate()" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">User Id</h4>
			<input type="text" id="uid" name="id"  class="form-control">
			<span id="uidErr"  class="text-danger"><?php echo $err_uid;?></span>
		 
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input id="password" type="password" name="password"   class="form-control">
			<span id="passErr" class="text-danger"><?php echo $err_pass;?></span>

		 
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet?Sign Up</a>
		</div>
	</form>
</div>
</html>
<!--login e