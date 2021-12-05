<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

include 'Model/db_config.php';
$uid="";
$err_uid="";
$password="";
$err_pass="";
$err_db="";
$idErr="";
$id="";
$rs="";


$name=$username=$password=$email=$address=$gender=$usertype="";
$nameErr=$usernameErr=$passwordErr=$emailErr=$addressErr=$genderErr=$usertypeErr="";
$successfulMessage=$errorMessage="";
$hasError=false;
             
if(isset($_POST["sign_up"]))//sign_up $_SERVER['REQUEST_METHOD']=='POST'
{
    if(empty($_POST['id']))
     {
      $idErr="* id required.";
     $hasError=true;
                    
     }
    else
    {
        if(checkUserId($_POST['id']))
        {
            $idErr="* id already exist. Try another.";
            $hasError=true;
        }
        else if($_POST['id']<0)
        {
            $idErr="* id cannot be negative";
            $hasError=true;
        }
        else
        {
            $id=$_POST['id'];
        }
    }
    
    // if(empty($_POST['name']))
    //  {
    //   $nameErr="* Name required.";
    //  $hasError=true;
                    
    //  }
    //  else
    //  {
        
    //     $name= $_POST["name"];
    //  }

     if(empty($_POST['username']))
     {
      $usernameErr="* Userame required.";
     $hasError=true;
                    
     }
     else
     {
         $username=$_POST["username"];
     }

      if(empty($_POST['gender']))
     {
      $genderErr="* gender required.";
     $hasError=true;
                    
     }
     else
     {
        $gender= $_POST["gender"];
     }

      if(empty($_POST['password']))
     {
      $passwordErr="* password required.";
     $hasError=true;
                    
     }
     else
     {
        $password= $_POST["password"];
     }

     if(empty($_POST['email']))
     {
      $emailErr="* email required.";
     $hasError=true;                
     }
    
   else{
       $s=strpos($_POST["email"],"@");
       if($s!=false){
           $t=strpos($_POST["email"],".", $s+1);
           if($t!=false){
               $email=$_POST["email"];
           }
           else{
               $emailErr="*Invalid email";
           }
       }
       else{
           $emailErr="*Invalid email";
       }
   }
      

    if(empty($_POST['address']))
     {
      $addressErr="* address required.";
     $hasError=true;
                    
     }
     else
     {
        $address=$_POST["address"];
     }

     if(empty($_POST['usertype']))
     {
      $usertypeErr="* usertype required.";
     $hasError=true;
                    
     }
     else
     {
         
        $usertype=$_POST["usertype"];
     }



    if(!$hasError)
    {
        $rs = insertUser($id,$username,$password,$gender,$email,$address,$usertype );
        if($rs===true)
        {
            $successfulMessage= "Registration Successful";
            header("Location: login.php");
        }
        else
        {
            $errorMessage="Registration Unsuccessful";
        }
   
       /* if(!$hasError)
   
        {​​​​​​​​
      
       } */
       //$name= $_POST["name"];
       //$username=$_POST["username"];
       //$gender= $_POST["gender"];
       //$password= $_POST["password"];
       //$email= $_POST["email"];
       //$address=$_POST["address"];
       //$usertype=$_POST["usertype"];
   
       // $rs = insertUser($name,$username,$password,$gender,$email,$address,$usertype );
       //$rs = insertUser($_POST["name"],$_POST["username"],$_POST["password"],$_POST["gender"],$_POST["email"],$_POST["address"],$_POST["usertype"] );
       if($rs===true)
       {
           $successfulMessage= "Registration Successful";
           header("Location: login.php");
       }
       else
       {
           $errorMessage="Registration Unsuccessful";
       }
    }
  

} 



elseif(isset($_POST["btn_login"])){
		
		
   /* $users = getalluser();*/

    if(empty($_POST["id"])){
      $hasError  = true;
      $err_uid = "Username Required";
   }
   else{
      $uid = $_POST["id"];
   }
   if(empty($_POST["password"])){
      $hasError  = true;
      $err_pass = "Password Required";
   }
   else{
      $password = $_POST["password"];
   }
  
  if(!$hasError){

			
   if(authenticateUser($uid,$password)){

      $_SESSION["loggeduser"] = $uid;
      //have to create type check function
      $allTypes=typecheck($uid);
   
      //var_dump($allTypes);
      foreach($allTypes as $t )
            {
               //var_dump($t["usertype"]);
               if($t["usertype"]=="admin")
                {
               
                  header("Location: admin_home.php");
                  $_SESSION["usertype"]=$t["usertype"];
                  
                }
                else if($t["usertype"]=="employee")
                {
                  header("Location: Employee/employee_home.php");
                  $_SESSION["usertype"]=$t["usertype"];
                }
                else if($t["usertype"]=="customer")
                {
                  header("Location: Customer/home.php");
                  $_SESSION["usertype"]=$t["usertype"];
                }

                else if($t["usertype"]=="deliveryman")
                {
                  header("Location:delivery_home.php");
                  $_SESSION["usertype"]=$t["usertype"];
                }
            }

      //header("Location: dashboard.php");
                
  }
  else{
   $err_db = "Username and password invalid";
   //header("Location: login.php");
   
  }
}
       
 
//--------------------------------------------------------------------

}

function insertUser($id,$username,$password,$gender,$email,$address,$usertype){
    $query = "insert into users values ($id,'$username','$password','$gender','$email','$address','$usertype');";
    return execute($query);
    
}

function authenticateUser($uid,$password){
  // var_dump($uid);
   //var_dump($password);
   $query = "select * from users where id=$uid and password='$password'";
   $rs = get($query);
   //var_dump($rs);
   if(count($rs) > 0){
      return true;
   }
   return false;
   
}


function typecheck($id){
   $query = "select usertype from users where id='$id'";
   $rs = get($query);
   return $rs;	
}


function checkUserId($id){

   $query = "select * from users where id=$id";
   $rs = get($query);
   //var_dump($rs);
   if(count($rs) > 0){
      return true;
   }
   return false;
   
}


?>


