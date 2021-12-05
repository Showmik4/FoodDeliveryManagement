<?php
require_once 'Models/db_config.php';

$username="";
  $dlnameErr="";


  $password="";
  $dlpassErr="";


  
  $gender="";
  $dlgenderErr="";

  $email="";
  $dlemailErr="";

 

  $address="";
  $dladdressErr="";

  $usertype="";
  $dlusertypeErr="";


  $err_db="";
  $hasError=false;


  if(isset($_POST["add_delivery"]))
  {
    if(empty($_POST["username"])){
      $hasError=true;
      $dlnameErr="&nbsp;&nbsp;* username Required";
    }

    else{
        $username = htmlspecialchars($_POST["username"]); 
    }

    if(empty($_POST["password"])){
        $hasError=true;
        $dlpassErr="&nbsp;&nbsp;*Password Required";
      }
  
      else
      {
        $password = $_POST["password"];
      }


    if(empty($_POST["gender"]))
    {
      $hasError=true;
      $dlgenderErr="&nbsp;&nbsp;*gender Required";
    }
    
    else
    {
      $gender = htmlspecialchars($_POST["gender"]);
    }

   

    if(empty($_POST["email"]))
    {
      $hasError=true;
      $dlemailErr="&nbsp;&nbsp;*Email Required";
    }
   
    else
    {
      $email = htmlspecialchars($_POST["email"]);
    }


    if(empty($_POST["address"]))
    {
      $hasError=true;
      $dladdressErr="&nbsp;&nbsp;*Address Required";
    }
   
    else
    {
      $address = htmlspecialchars($_POST["address"]);
    }


    if(empty($_POST["usertype"]))
    {
      $hasError=true;
      $dlusertypeErr="&nbsp;&nbsp;*Usertype Required";
    }
   
    else
    {
      $email = htmlspecialchars($_POST["usertype"]);
    }




if(!$hasError){
    
    $rs = insertdelivery($_POST["username"],$_POST["password"],$_POST["gender"],$_POST["email"],$_POST["address"],$_POST["usertype"]);
    if($rs === true){
        header("Location: All_Delivery.php");
    }
    $err_db = $rs;

}
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

else if (isset($_POST["delete_delivery"])){
    //do validations
    //if no error
    $rs = delete_food($_POST["id"]);
    if($rs === true){
        header("Location: All_Delivery.php");
    }
    $err_db = $rs;
}


function insertdelivery($username,$password,$gender,$email,$address,$usertype){
    $query="insert into deliveryman values (NULL,'$username','$password','$gender','$email','$address','$usertype')";
    return execute($query);
}
function getDelivery(){
    $query= "select * from deliveryman";
    $rs = get($query);
    return $rs;
}

function getDeliveryman($id){
    $query= "select * from deliveryman where $id=id";
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
      $query = "delete from deliveryman where id = $id";
      return execute($query);
  }


 ?>
