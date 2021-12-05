
<?php
	
	include 'controllers/AdduserController.php';

?>
<head>
	<script  src="js/Adduser.js"></script>
	
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script  src="js/uservalidation"></script>

</head>

<!--sign up starts -->
<body>
<div class="center-login">
	
	<br>
	<span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
    <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>

	<form action="" method="post"  name="adduserForm" onsubmit="return validate()">

	<h1 class="text text-center">Registration</h1>

 	   <div class="form-group">

			<h4 class="text">User Id</h4> 
			<input type="number" name="uid" id="id" value="<?php echo $id;?>" class="form-control">
			<span id="uidErr" style="color : red;"><?php echo $idErr; ?></span>

       </div> 
	
	
	    <!-- <div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" id="name" value="" class="form-control">
			<span id="nameErr" style="color : red;"> </span>
			 
		</div> -->
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" id="username"   value="<?php echo $username;?>" class="form-control">
		 
			<span id="usernameErr" style="color : red;"><?php echo $usernameErr; ?></span>
		 
		</div>
	 
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" id="password" value="<?php echo $password;?>"  class="form-control">
			 
			<span id="passwordErr" style="color : red;"><?php echo $passwordErr; ?></span>
		</div>

        <div class="form-group">
			<h4 class="text">email</h4> 
			<input type="text" name="email" id="email" value="<?php echo $email;?>" >  
		 
            <span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span>
		</div>


        <div class="form-group">
			<h4 class="text">address</h4> 
            <textarea name="address" id="address"  ><?php echo $address;?></textarea>
            <span id="addressErr" style="color : red;"><?php echo $addressErr; ?></span>    
		</div>


        <div class="form-group">
			<h4 class="text">gender</h4> 
            <input type="radio" value="Male" name="gender" >Male<input type="radio" value="Female" name="gender">Female
			<span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>                
		</div>


   
        <div class="form-group">
			<!-- <h4 class="text">usertype</h4> 
            <input type="radio" value="jobprovider" name="usertype">Job Provider<input type="radio" value="jobseeker" name="usertype">Job Seeker
			<span id="usertypeErr" style="color : red;"><?php //echo $genderErr; ?></span>    -->

			<h4 class="text">User Type:</h4>
                <select name="usertype" id="usertype" >
                    <option value="">Select</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="customer">Customer</option>
					<option value="deliveryman">Delivery Man</option>
                   
                </select>
                <span id="usertypeErr" style="color : red;"><?php echo $usertypeErr; ?></span>
		</div>




		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
			 
		</div>
		
	</form>
</div>
 
<!--sign up ends -->

</body>	
</html>				
					