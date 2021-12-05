<?php include 'admin_header.php';
	require_once 'controllers/employeeController.php';
	$id = $_GET["id"];
	$pr= getEmployee($id);
?>
<!--editproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
			
            <input type="text" name="username" value="<?php echo $pr["username"];?>" class="form-control">
            <input type="text" name="password" value="<?php echo $pr["password"];?>" class="form-control">
			<input type="text" name="gender" value="<?php echo $pr["gender"];?>" class="form-control">
            <input type="text" name="email" value="<?php echo $pr["email"];?>" class="form-control">
            <input type="text" name="address" value="<?php echo $pr["address"];?>" class="form-control">
            
            
          
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_employee" class="btn btn-success" value="Edit Product" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>