<?php
	$conn = new mysqli("localhost","root","","inventories");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>