<?php
	require_once 'models/db_config.php';








  
	//validations variables
	$err_db="";
	if(isset($_POST["add_employee"])){
		echo "submiited";
		//doo validations
		//if no error
		
		/*$name = basename($_FILES["p_image"]["name"]);
		$ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
		$myfilename=uniqid().".$ext";
		$target = "storage/product_images/$myfilename";
		$tmp_path = $_FILES["p_image"]["tmp_name"];
		move_uploaded_file($tmp_path,$target);*/
		
		$fileType = strtolower(pathinfo(basename($_FILES["u_image"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/user_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["u_image"]["tmp_name"],$target);
		
		
		$rs = insert_employee($_POST["f_name"],$_POST["l_name"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["phone"],$_POST["gender"],$_POST["role"],$_POST["salary"],$target);
		if($rs === true){
			header("Location: all_employee.php");
		}
		$err_db = $rs;
	
	}

	else if (isset($_POST["edit_employee"])){
		//do validations
		//if no error
		$rs = updateEmployee($_POST["username"],$_POST["password"],$_POST["gender"],$_POST["email"],$_POST["address"],$_POST["id"]);
    //$rs=updateEmployee($fname,$lname,$uname,$pass,$email,$phone_num,$gender,$role,$salary,$_POST["id"]);
		if($rs === true){
			header("Location: all_employee.php");
		}
		$err_db = $rs;
	}

	else if (isset($_POST["delete_employee"])){
		//do validations
		//if no error
		$rs = delete_employee($_POST["id"]);
		if($rs === true){
			header("Location: all_employee.php");
		}
		$err_db = $rs;
	}
  

	function insert_employee($fname,$lname,$uname,$pass,$email,$phone_num,$gender,$role,$salary,$img){
		$query="insert into user values (NULL,'$fname','$lname','$uname','$pass','$email',$phone_num,'$gender','$role',$salary,'$img')";
		return execute($query);
	}
	function getEmployees(){
		$query= "select * from users";
		$rs = get($query);
		return $rs;
	}
	function getEmployee($id){
		$query="select * from users where id=$id";
		$rs = get($query);
		return $rs[0];
	}
/*	function updateProduct($name,$price,$code,$id){
		$query="update product set product_name='$name',product_price='$price',product_code='$code' where id=$id";
		return execute($query);  
		
	}*/

	function updateEmployee($uname,$pass,$gender,$email,$address,$id){

		$query="update user set username='$uname',password='$pass',gender='$gender',email='$email',address='$address' where id = $id";
	  
		return execute($query);
	  }

	  function delete_Employee($id)
	  {
		  $query = "delete from users where id = $id";
		  return execute($query);
	  }

	function searchProduct($key){
		$query = "select p.id,p.name from product p left join categories c on p.c_id=c.id where p.name like '%$key%' or c.name like '%$key%' or p.description like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>