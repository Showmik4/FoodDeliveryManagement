<?php
	include 'controllers/AdduserController.php';
?>
  


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script  src="js/uservalidation"></script>
</head>
<!--login starts -->
<body style="background-color:skyblue;"> 
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	 
	<form action="" method="post" onchange="return validate()" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">username</h4>
			<input type="text" id="uid" name="id"  class="form-control">
			<span class="text-danger" id="uidErr"><?php echo $err_uid;?></span>
		 
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" id="password" class="form-control">
			<span class="text-danger" id="passErr"><?php echo $err_pass;?></span>

		 
		</div>

		<div class="form-group text-center">
			
		<a href="change-password.php">Forget Password</a>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet?Sign Up</a>
		</div>
	</form>
</body>
</div>
</html>
<!--login e