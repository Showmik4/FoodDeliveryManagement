<?php
	require_once 'Models/db_config.php';
	require_once 'Models/database.inc.php';
	require_once 'function.inc.php';
	//validations variables
	$err_db="";
	if(isset($_POST["add_product"])){
		echo "submiited";
		//doo validations
		//if no error
		
		/*$name = basename($_FILES["p_image"]["name"]);
		$ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
		$myfilename=uniqid().".$ext";
		$target = "storage/product_images/$myfilename";
		$tmp_path = $_FILES["p_image"]["tmp_name"];
		move_uploaded_file($tmp_path,$target);*/
		
		$fileType = strtolower(pathinfo(basename($_FILES["img"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["img"]["tmp_name"],$target);
		
		
		$rs = insertProduct($_POST["product_name"],$_POST["c_id"],$_POST["product_price"],$_POST["product_code"],$target);
		if($rs === true){
			header("Location: all_food.php");
		}
		$err_db = $rs;
	
	}

	else if (isset($_POST["edit_product"])){
		//do validations
		//if no error
		$rs = updateProduct($_POST["product_price"],$_POST["product_code"],$_POST["id"]);
		if($rs === true){
			header("Location: all_food.php");
		}
		$err_db = $rs;
	}

	else if (isset($_POST["delete_product"])){
		//do validations
		//if no error
		$rs = delete_food($_POST["id"]);
		if($rs === true){
			header("Location: all_food.php");
		}
		$err_db = $rs;
	}
  

	function insertProduct($name,$c_id,$price,$code,$img){
		$query="insert into product values (NULL,'$name',$c_id,$price,'$code','$img')";
		return execute($query);
	}
	function getOrders(){
		$query= "select * from orders";
		$rs = get($query);
		return $rs;
	}
	function getProduct($id){
		$query="select * from product where id=$id";
		$rs = get($query);
		return $rs[0];
	}
/*	function updateProduct($name,$price,$code,$id){
		$query="update product set product_name='$name',product_price='$price',product_code='$code' where id=$id";
		return execute($query);  
		
	}*/

	function updateProduct($price,$code,$id){

		$query="update product set product_price=$price,product_code=$code where id = $id";
	  
		return execute($query);
	  }

	  function delete_food($id)
	  {
		  $query = "delete from product where id = $id";
		  return execute($query);
	  }

	function searchProduct($key){
		$query = "select p.id,p.name from product p left join categories c on p.c_id=c.id where p.name like '%$key%' or c.name like '%$key%' or p.description like '%$key%'";
		$rs = get($query);
		return $rs;
	}

	if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
		$type=get_safe_value($_GET['type']);
		$id=get_safe_value($_GET['id']);
	
		if($type=='active' || $type=='deactive'){
			$status=1;
			if($type=='deactive'){
				$status=0;
			}
			mysqli_query($con,"update orders set order_status='$status' where id='$id'");
			redirect('all_orders.php');
		}
	
	}
	//$res=mysqli_query($con,$sql);
	$sql="select * from orders ";
	$res=mysqli_query($con,$sql);

?>