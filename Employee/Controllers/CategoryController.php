<?php
require_once 'Models/db_config.php';
$name="";
$catnameErr="";
$err_db="";
$hasError="";

if(isset($_POST["add_category"])){

if(empty($_POST["name"]))

{
  
  $hasError=true;
  $catnameErr="&nbsp;&nbsp;*Name Required";
}
elseif (strlen($_POST["name"]) <2){
  $hasError = true;
  $catnameErr = "&nbsp;&nbsp;*Name must be greater than 1 characters";
}
elseif (is_numeric($_POST["name"])){
  $hasError = true;
  $catnameErr = "&nbsp;&nbsp;*Name must be characters";
    }
else
{
  $name = $_POST["name"];
}

if(!$hasError){
  $rs=insertCategory($name);
  if ($rs === true) {
    header("Location: allcategories.php");
  }
  $err_db = $rs;
  }



}

elseif (isset($_POST["edit_category"])) {
  if(empty($_POST["name"])){
    $hasError=true;
    $err_name="&nbsp;&nbsp;*Name Required";
  }
  elseif (strlen($_POST["name"]) <3){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be greater than 5 characters";
  }
  elseif (is_numeric($_POST["name"])){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be characters";
      }
  else
  {
    $name = $_POST["name"];
  }

  if(!$hasError){
    $rs=updateCategory($name,$_POST["id"]);
    if ($rs === true) {
      header("Location: allcategories.php");
    }
    $err_db = $rs;
    }


}

else if (isset($_POST["delete_category"])){

  // $rs = deleteCategory($id);
  // echo $e["image"];
  // echo "<pre>";
  // print_r($rs);
  // echo "</pre>";
  // echo $rs;
  $rs = deleteCategory($_POST["id"]);
   if($rs === true){
  header("Location: allcategories.php");
  }
  $err_db = $rs;
}


function getAllCategories(){
  $query="select * from categories";
  $rs=get($query);
  return $rs;
}

function insertCategory($name){
  $query="insert into categories values (NULL,'$name')";
  return execute($query);

}

function getCategory($id){
  $query="select * from categories where id=$id";
  $rs=get($query);
  return $rs[0];
}

function updateCategory($name,$id){
  $query="update categories set name='$name' where id=$id";
  return execute($query);
}

function checkCategory($name){
  $query="select name from categories where name='$name'";
  $rs=get($query);
  if(count($rs)>0){
    return true;
  }
  return false;
}

function deleteCategory($id){
	//   echo "string";
		$query="delete from categories where id=$id";
    return execute($query);
	}
 ?>
