<?php 
session_start();

session_unset();
session_destroy();

header("Location: login.php");


setcookie("login","",time()+10);//for delete the cookie //destroy the cookie 
header("location:login.php");
	


?>