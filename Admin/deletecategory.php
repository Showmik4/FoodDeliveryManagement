<?php include 'admin_header.php';
	include 'controllers/CategoryController.php';
	$id = $_GET["id"]; //get hyperlink 
	$c = getCategory($id);
?>
<!--edit category starts -->

<script src="js/delete_massage.js"></script>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control" disabled>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_category" onclick="delete_alert()" class="btn btn-danger" value="Delete Category" &tab;>

			<a href="allcategories.php"> Cancel</a>
		</div>
	</form>
</div>
  
<?php require_once 'admin_footer.php';?>
