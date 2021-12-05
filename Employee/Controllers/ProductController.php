<?php
require_once 'Models/db_config.php';

$name="";
  $pdctnameErr="";


  $c_id="";
  $catnameErr="";


  
  $price="";
  $pdctpriceErr="";

  $code="";
  $pdctcodeErr="";

 

  $p_image="";
  $err_p_image="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["add_product"]))
  {
    if(empty($_POST["product_name"])){
      $hasError=true;
      $pdctnameErr="&nbsp;&nbsp;*Product name Required";
    }

    else{
        $name = htmlspecialchars($_POST["product_name"]); 
    }

    if(empty($_POST["c_id"])){
        $hasError=true;
        $catnameErr="&nbsp;&nbsp;*Category Required";
      }
  
      else
      {
        $c_id = $_POST["c_id"];
      }


    if(empty($_POST["product_price"]))
    {
      $hasError=true;
      $pdctpriceErr="&nbsp;&nbsp;*Price Required";
    }
    
    else
    {
      $price = htmlspecialchars($_POST["product_price"]);
    }

   

    if(empty($_POST["product_code"]))
    {
      $hasError=true;
      $pdctcodeErr="&nbsp;&nbsp;*Code Required";
    }
   
    else
    {
      $code = htmlspecialchars($_POST["product_code"]);
    }


   

    


    if($_FILES["img"]["name"]==""){
     // echo "string";
			$hasError=true;
			$err_p_image="&nbsp;&nbsp;*Image Required";
		}




else{
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
}

if(!$hasError){
    
    $rs = insertProduct($_POST["product_name"],$_POST["c_id"],$_POST["product_price"],$_POST["product_code"],$target);
    if($rs === true){
        header("Location: allproducts.php");
    }
    $err_db = $rs;

}
}
else if (isset($_POST["edit_product"])){
    //do validations
    //if no error
    $rs = updateProduct($_POST["product_name"],$_POST["product_price"],$_POST["product_code"],$_POST["id"]);
    if($rs === true){
        header("Location: allproducts.php");
    }
    $err_db = $rs;
}

else if (isset($_POST["delete_product"])){
    //do validations
    //if no error
    $rs = delete_food($_POST["id"]);
    if($rs === true){
        header("Location: allproducts.php");
    }
    $err_db = $rs;
}


function insertProduct($name,$c_id,$price,$code,$img){
    $query="insert into employee_product values (NULL,'$name',$c_id,$price,'$code','$img')";
    return execute($query);
}
function getProducts(){
    $query= "select p.*,c.name as 'c_name' from employee_product p left join categories c on p.c_id = c.id";
    $rs = get($query);
    return $rs;
}
function getProduct($id){
    $query="select * from employee_product where id=$id";
    $rs = get($query);
    return $rs[0];
}
/*	function updateProduct($name,$price,$code,$id){
    $query="update product set product_name='$name',product_price='$price',product_code='$code' where id=$id";
    return execute($query);  
    
}*/

function updateProduct($name,$price,$code,$id){

    $query="update employee_product set product_name='$name',product_price='$price',product_code='$code' where id = $id";
  
    return execute($query);
  }

  function delete_food($id)
  {
      $query = "delete from employee_product where id = $id";
      return execute($query);
  }



function getReview(){
    $query="select * from review";
    $rs = get($query);
    return $rs;
}

function searchProduct($key){
    $query = "select p.id,p.product_name from employee_product p left join categories c on p.c_id=c.id where p.product_name like '%$key%' or c.name like '%$key%'";
    $rs = get($query);
    return $rs;
}

 ?>
