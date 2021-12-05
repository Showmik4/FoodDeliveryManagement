<?php
require_once 'models/db_config.php';

$month="";
$err_month="";
$day="";
$err_day="";
$year="";
$err_year="";
$fname="";
$err_fname="";
$lname="";
$err_lname="";
$uname="";
$err_uname="";
$phone_num="";
$err_phone_num="";
$salary="";
$err_salary="";
$amount="";
$err_amount="";
$due="";
$err_due="";
$paid="";
$err_paid="";
$ref_id="";
$err_ref_id="";
$err_db="";
$hasError=false;


if(isset($_POST["paying_salary"])){
  if(empty($_POST["f_name"])){
    $hasError=true;
    $err_fname="&nbsp;&nbsp;*First name required";
  }
  elseif (strlen($_POST["f_name"]) <3){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["f_name"])){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be characters";
      }
  else
  {
    $fname = htmlspecialchars($_POST["f_name"]);
  }

  if(empty($_POST["l_name"])){
    $hasError=true;
    $err_lname="&nbsp;&nbsp;*Last name required";
  }
  elseif (strlen($_POST["l_name"]) <3){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["l_name"])){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
      }
  else
  {
    $lname = htmlspecialchars($_POST["l_name"]);
  }

  if(empty($_POST["username"])){
    $hasError=true;
    $err_uname= "&nbsp;&nbsp;*Username Required";
  }
  

else
  {
    $uname = htmlspecialchars($_POST["username"]);

  }

  if(empty($_POST["salary"])){
    $hasError=true;
    $err_salary= "&nbsp;&nbsp;*salary Required";
  }



  else
  {
    $salary = htmlspecialchars($_POST["salary"]);

  }


  if(empty($_POST["paid"])){
    $hasError=true;
    $err_paid= "&nbsp;&nbsp;*paid salary Required";
  }



  else
  {
    $paid = htmlspecialchars($_POST["paid"]);

  }


  if(empty($_POST["due"])){
    $hasError=true;
    $err_due= "&nbsp;&nbsp;*due Required";
  }



  else
  {
    $due = htmlspecialchars($_POST["due"]);

  }

  if(!isset($_POST["month"])){
        $hasError = true;
        $err_month= "&nbsp;&nbsp;*Month Required";
      }
      else{
        $month = $_POST["month"];
      }

      if(!isset($_POST["day"])){
        $hasError = true;
        $err_day= "&nbsp;&nbsp;*Day Required";
      }
      else{
        $day = $_POST["day"];
      }

      if(!isset($_POST["year"])){
        $hasError = true;
        $err_year= "&nbsp;&nbsp;*Year Required";
      }
      else{
        $year = $_POST["year"];
      }





 /* if(empty($_POST["salary"])){
    $hasError = true;
    $err_salary = "Salary Required";
  }
  elseif (!is_numeric($_POST["salary"])){
    $hasError=true;
    $err_salary="&nbsp;&nbsp;*Salary must be number";
  }
  else{
    $salary= $_POST["salary"];
  }





  if(empty($_POST["amount"])){
  			$hasError=true;
  			$err_amount="&nbsp;&nbsp;*Amounte required";
  		}
      // elseif (is_numeric($_POST["amount"])){
      //   $hasError = true;
      //   $err_amount = "&nbsp;&nbsp;*First name must be characters";
      //     }

      // elseif (is_numeric($_POST["amount"])){
      //   $hasError = true;
      //   $err_amount = "&nbsp;&nbsp;*First name must be characters";
      //     }
  		else
  		{
  			$amount = htmlspecialchars($_POST["amount"]);
  		}

      if($salary<$amount){
        $hasError=true;
        $err_amount="&nbsp;&nbsp;*Amount must be less than or equal to salary";
      }

      if( $amount!="" && ($salary>=$amount)){
        $due=$salary-$amount;
      }*/
  if(!$hasError){

    $payment_date= $year.'-'.$month.'-'.$day;

    $rs=insertPayingSalary($fname,$lname,$uname,$salary,$paid,$due,$payment_date);
    if ($rs === true) {
      header("Location: paid_list.php");
    }
    $err_db = $rs;
    }

}



//---------------------------------------------------

/*elseif(isset($_POST["paying_due"]))
{
  if(empty($_POST["f_name"])){
    $hasError=true;
    $err_fname="&nbsp;&nbsp;*First name required";
  }
  elseif (strlen($_POST["f_name"]) <3){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["f_name"])){
    $hasError = true;
    $err_fname = "&nbsp;&nbsp;*First name must be characters";
      }
  else
  {
    $fname = htmlspecialchars($_POST["f_name"]);
  }

  if(empty($_POST["l_name"])){
    $hasError=true;
    $err_lname="&nbsp;&nbsp;*Last name required";
  }
  elseif (strlen($_POST["l_name"]) <3){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["l_name"])){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
      }
  else
  {
    $lname = htmlspecialchars($_POST["l_name"]);
  }

  if(empty($_POST["username"])){
    $hasError=true;
    $err_uname= "&nbsp;&nbsp;*Username Required";
  }
  elseif (strlen($_POST["username"]) < 5){
    $hasError = true;
    $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
  }
elseif(strpos($_POST["username"]," "))
    {
      $hasError = true;
      $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
    }
else
  {
    $uname = htmlspecialchars($_POST["username"]);

  }




  if(!isset($_POST["month"])){
        $hasError = true;
        $err_month= "&nbsp;&nbsp;*Month Required";
      }
      else{
        $month = $_POST["month"];
      }

      if(!isset($_POST["day"])){
        $hasError = true;
        $err_day= "&nbsp;&nbsp;*Day Required";
      }
      else{
        $day = $_POST["day"];
      }

      if(!isset($_POST["year"])){
        $hasError = true;
        $err_year= "&nbsp;&nbsp;*Year Required";
      }
      else{
        $year = $_POST["year"];
      }






  if(empty($_POST["salary"])){
    $hasError = true;
    $err_salary = "Salary Required";
  }
  elseif (!is_numeric($_POST["salary"])){
    $hasError=true;
    $err_salary="&nbsp;&nbsp;*Salary must be number";
  }
  else{
    $salary= $_POST["salary"];
  }

  if(empty($_POST["due"])){
    $hasError = true;
    $err_due = "Due Required";
  }
  elseif (!is_numeric($_POST["due"])){
    $hasError=true;
    $err_due="&nbsp;&nbsp;*Due must be number";
  }
  else{
    $due= $_POST["due"];
  }

  // if(empty($_POST["ref_id"])){
  //   $hasError = true;
  //   $err_ref_id = "Reference ID Required";
  // }
  //
  // else{
  //   $ref_id= $_POST["ref_id"];
  // }

  if(empty($_POST["paid"])){
    $hasError = true;
    $err_paid = "paid Required";
  }
  elseif (!is_numeric($_POST["paid"])){
    $hasError=true;
    $err_paid="&nbsp;&nbsp;*paid must be number";
  }
  else{
    $paid= $_POST["paid"];
  }

  if(empty($_POST["amount"])){
  			$hasError=true;
  			$err_amount="&nbsp;&nbsp;*Amounte required";
  		}

  		else
  		{
  			$amount = htmlspecialchars($_POST["amount"]);
  		}

      if($due<$amount){
        $hasError=true;
        $err_amount="&nbsp;&nbsp;*Amount must be less than or equal to due";
      }
      if ($amount==0) {
        $err_amount="&nbsp;&nbsp;*Amount can not be 0";
      }
      if( $amount!="" && ($due>=$amount)){
        $hasError=false;
        $New_due=$due-$amount;
        $New_paid=$paid+$amount;
        // $payment_date= $year.'-'.$month.'-'.$day;

      }*/
//   if(!$hasError){
// $err_amount= $fname.'-'.$lname.'-'.$uname.'-'.$salary.'-'.$New_paid.'-'.$New_due.'-'.$payment_date.'-'.$_POST["id"];
//     $payment_date= $year.'-'.$month.'-'.$day;
//
//     $rs=UpadatePayingSalary($fname,$lname,$uname,$salary,$New_paid,$New_due,$payment_date,$_POST["id"]);
//     if ($rs === true) {
//       header("Location: paid_list.php");
//     }
//     $err_db = $rs;
//     }
/*if(!$hasError){

  $payment_date= $year.'-'.$month.'-'.$day;

  $rs=UpadatePayingSalary($fname,$lname,$uname,$salary,$New_paid,$New_due,$payment_date,$_POST["id"]);
  if ($rs === true) {
    header("Location: paid_list.php");
  }
  $err_db = $rs;
  }
}*/


function UpadatePayingSalary($fname,$lname,$uname,$salary,$New_paid,$New_due,$payment_date,$id){

  $query="update salary set f_name='$fname',l_name='$lname',username='$uname',salary='$salary',paid='$New_paid',due='$New_due',payment_date='$payment_date'  where id = $id ";

  return execute($query);
}

function insertPayingSalary($fname,$lname,$uname,$salary,$paid,$due,$payment_date){
  $query="insert into salary values (NULL,'$fname','$lname','$uname','$salary','$paid','$due','$payment_date')";

  return execute($query); 

}

function getallEmployees(){
  $query="select * from users";
  $rs=get($query);
  return $rs;
}

function getEmployee($id){
  $query="select * from users where id=$id";
  $rs=get($query);
  return $rs[0];
}

function getAllPaidEmployees(){
  $query="select * from salary";
  $rs=get($query);
  return $rs;
}

function getDueSalary($id){
  $query="select * from salary where id=$id";
  $rs=get($query);
  return $rs[0];
}
// getDueSalary
 ?>
