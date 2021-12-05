<?php
require_once 'models/db_config.php';

$rating="";
  $pdctratingErr="";


  $comments="";
  $pdctcommentsErr="";


  
  $cust_name="";
  $custnameErr="";

  $food_name="";
  $foodnameErr="";

 

  $err_db="";
  $hasError=false;


  if(isset($_POST["add_review"]))
  {
    if(empty($_POST["cust_name"])){
      $hasError=true;
      $pdctnameErr="&nbsp;&nbsp;*Customer name Required";
    }

    else{
        $name = htmlspecialchars($_POST["cust_name"]); 
    }

    if(empty($_POST["food_name"])){
        $hasError=true;
        $catnameErr="&nbsp;&nbsp;*Food Name Required";
      }
  
      else
      {
        $c_id = $_POST["food_name"];
      }


    if(empty($_POST["rating"]))
    {
      $hasError=true;
      $pdctpriceErr="&nbsp;&nbsp;*Rating Required";
    }
    
    else
    {
      $price = htmlspecialchars($_POST["rating"]);
    }

   

    if(empty($_POST["comments"]))
    {
      $hasError=true;
      $pdctcodeErr="&nbsp;&nbsp;*Comments Required";
    }
   
    else
    {
      $code = htmlspecialchars($_POST["comments"]);
    }


   

    


if(!$hasError){
    
    $rs = insertReview($_POST["cust_name"],$_POST["food_name"],$_POST["rating"],$_POST["comments"]);
   
    $err_db = $rs;

}
}




else if (isset($_POST["edit_product"])){
    //do validations
    //if no error
    $rs = updateProduct($_POST["product_name"],$_POST["product_price"],$_POST["product_code"],$_POST["id"]);
    if($rs === true){
        header("Location: All_Product.php");
    }
    $err_db = $rs;
}

else if (isset($_POST["delete_product"])){
    //do validations
    //if no error
    $rs = delete_food($_POST["id"]);
    if($rs === true){
        header("Location: All_Product.php");
    }
    $err_db = $rs;
}


function insertReview($cust_name,$food_name,$rating,$comments){
    $query="insert into review values (NULL,'$cust_name','$food_name','$rating','$comments')";
    return execute($query);
}


function getProducts(){
    $query= "select p.*,c.name as 'c_name' from admin_products p left join categories c on p.c_id = c.id";
    $rs = get($query);
    return $rs;
}
function getReview(){
    $query="select * from review";
    $rs = get($query);
    return $rs;
}
/*	function updateProduct($name,$price,$code,$id){
    $query="update product set product_name='$name',product_price='$price',product_code='$code' where id=$id";
    return execute($query);  
    
}*/

function updateProduct($name,$price,$code,$id){

    $query="update admin_products set product_name='$name',product_price='$price',product_code='$code' where id = $id";
  
    return execute($query);
  }

  function delete_food($id)
  {
      $query = "delete from admin_products where id = $id";
      return execute($query);
  }

function searchProduct($key){
    $query = "select p.id,p.product_name from product p left join categories c on p.c_id=c.id where p.product_name like '%$key%' or c.name like '%$key%'";
    $rs = get($query);
    return $rs;
}

 ?>
