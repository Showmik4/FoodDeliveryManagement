<?php include 'header.php';
	include 'controllers/ProductController.php';
	include 'controllers/CategoryController.php';
	$categories = getAllCategories();
	$id = $_GET["id"]; //get hyperlink 
	$c = getProduct($id);
?>
<!--edit category starts -->



<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="product_name" value="<?php echo $c["product_name"];?>" class="form-control" disabled>
			<input type="text" name="c_id" value="<?php echo $c["c_id"];?>" class="form-control" disabled>
			<input type="text" name="product_price" value="<?php echo $c["product_price"];?>" class="form-control" disabled>
			<input type="text" name="product_code" value="<?php echo $c["product_code"];?>" class="form-control" disabled>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_product" class="btn btn-danger" value="Delete Food" &tab;>

			<a href="allproducts.php"> Cancel</a>
		</div>
	</form>
</div>
  
