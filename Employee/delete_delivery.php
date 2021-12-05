


<?php include 'header.php';
	include 'Controllers/AddDeliverymanController.php';
	$id = $_GET["id"]; //get hyperlink 
	$c = getDeliveryman($id);
?>
<!--edit category starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material" >
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
            <input type="text" name="username" value="<?php echo $c["username"];?>" class="form-control" disabled>
            <input type="text" name="password" value="<?php echo $c["password"];?>" class="form-control" disabled>
            <input type="text" name="gender" value="<?php echo $c["gender"];?>" class="form-control" disabled>
            <input type="text" name="email" value="<?php echo $c["email"];?>" class="form-control" disabled>
            <input type="text" name="address" value="<?php echo $c["address"];?>" class="form-control" disabled>
            <input type="text" name="usertype" value="<?php echo $c["usertype"];?>" class="form-control" disabled>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_delivery" class="btn btn-danger" value="Delete Delivery" &tab;>

			<a href="All_Delivery.php"> Cancel</a>
		</div>
	</form>
</div>

<!--edit category ends -->
