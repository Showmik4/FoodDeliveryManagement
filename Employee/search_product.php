<?php
	include 'Controllers/ProductController.php';
	$key = $_GET["key"];
	$products = searchProduct($key);
	if(count($products) > 0){
		foreach($products as $p){
			echo "<a href='allproducts.php?id=".$p["id"]."'>".$p["product_name"]."</a><br>";
		}
	}
?>