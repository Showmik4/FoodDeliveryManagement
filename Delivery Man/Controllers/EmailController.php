<?php
include 'Model/db_config.php';
$email="";
  $err_email="";
  $hasError="";
  $text="";
  $err_text="";
  $err_db="";
  
  if(isset($_POST["send_email"]))
  {

		
   if(empty($_POST["email"])){
      $hasError=true;
      $err_email="&nbsp;&nbsp;*Email Required";
    }
    elseif (!strpos($_POST["email"],"@") ){
      $hasError = true;
      $err_email = "&nbsp;&nbsp;*Email must have '@' symbol";
    }
    else
    {
      $dot=strpos($_POST["email"],"@");
      if(!strpos($_POST["email"],".",$dot+1))
      {
        $hasError = true;
        $err_email = "&nbsp;&nbsp;*Email must have '.' after @ symbol";
      }
      else {
        $email = htmlspecialchars($_POST["email"]);
      }

    }



    if(empty($_POST["text"])){
      $hasError = true;
      $err_text= "&nbsp;&nbsp;*Text Box Empty";
    }
    else{
      $text = $_POST["text"];
    }
	 if(!$hasError){
      $rs=insertEmail($_POST["email"],$_POST["text"]);
      if ($rs === true) {
        header("Location:all_email.php");
      }
      $err_db = $rs;
      }

  }

function insertEmail($email,$text){
    $query="insert into send_email values (NULL,'$email','$text')";

    return execute($query);

  }
function getAllEmail(){
   //$query="select * from products";
  $query="select * from send_email";
  $rs=get($query);
  return $rs;
}

function getEmail($id){
  $query="select * from send_email where id=$id";
  $rs=get($query);
  return $rs[0];
}









?>