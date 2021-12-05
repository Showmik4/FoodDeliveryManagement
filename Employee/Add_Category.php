
<?php 

 
?>
<?php include 'header.php';
	include 'Controllers/CategoryController.php';
?>

<script  src="js/Add_Category.js"></script>
<!--addproduct starts -->
	
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post" name="addcategoryForm" onsubmit="return isvalid()">

				<h4 class="text">Name:</h4> 
				<input type="text" name="name" >
				<span id="catnameErr" style="color : red;"><?php echo $catnameErr; ?></span>
				<br>
				<br>
				<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">

		</form>
	</div>
	
<!--addproduct ends --