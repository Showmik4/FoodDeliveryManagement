<?php include 'admin_header.php';
	include 'controllers/employeeController.php';
//	include 'controllers/CategoryController.php';
//	$categories = getEmployees();
	$id = $_GET["id"]; //get hyperlink 
$pr = getEmployee($id);
?>
<!--edit category starts -->



<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
            <input type="hidden" name="id" value="<?php echo $pr["id"];?>">
			<input type="text" name="username" value="<?php echo $pr["username"];?>" class="form-control" disabled>
            <input type="text" name="password" value="<?php echo $pr["password"];?>" class="form-control"  disabled>
            <input type="text" name="gender" value="<?php echo $pr["gender"];?>" class="form-control"  disabled>
            <input type="text" name="email" value="<?php echo $pr["email"];?>" class="form-control"  disabled>
            <input type="text" name="address" value="<?php echo $pr["address"];?>" class="form-control"  disabled>
            <input type="text" name="usertype" value="<?php echo $pr["usertype"];?>" class="form-control"  disabled>
       
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_employee" class="btn btn-danger" value="Delete Employee" &tab;>

			<a href="all_food.php"> Cancel</a>
		</div>
	</form>
</div>
  
<?php require_once 'admin_footer.php';?>
