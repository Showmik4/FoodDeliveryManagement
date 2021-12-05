<?php include 'header.php';
	include 'controllers/UserController.php';
	$id = $_GET["id"];
	$c = getuser($id);
?>
<!--edit category starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="username" value="<?php echo $c["username"];?>" class="form-control">
            <input type="text" name="gender" value="<?php echo $c["gender"];?>" class="form-control">
            <input type="text" name="email" value="<?php echo $c["email"];?>" class="form-control">
            <input type="text" name="address" value="<?php echo $c["address"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_profile" class="btn btn-success" value="Edit profile" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends --