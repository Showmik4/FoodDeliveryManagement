<?php
require_once 'header.php';
require_once 'Controllers/AddDeliverymanController.php'

?>

<script src="js/Add_delivery.js"></script>
  <div class="form">

    <h1 align="center">Add Deliveryman</h1>
    <hr>
    <br>
    <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
      <h5><?php echo $err_db; ?></h5>
      <table align="center">
        <tr>
          <td>Username</td>
          <td>: <input id="username" type="text" name="username" value="<?php echo $username;?>" ><br>
          <span id="dlnameErr" style="color:red;"><?php echo $dlnameErr;?></span></td>
        </tr>

		<tr>
          <td> Password </td>
          <td>: <input id="password" type="text" name="password" value="<?php echo $password;?>" ><br>
          <span id="dlpassErr" style="color:red;"><?php echo $dlpassErr;?></span></td>
        </tr>


        <tr>
          <td> Gender </td>
          <td>: <input id="gender" type="text" name="gender" value="<?php echo $gender;?>" ><br>
          <span id="dlgenderErr" style="color:red;"><?php echo $dlgenderErr;?></span></td>
        </tr>


       <tr>


     
					<td >Email</td>
					<td>: <textarea id="email" name="email"><?php echo $email;?></textarea>
						<br><span id="dlemailErr" style="color:red;"><?php echo $dlemailErr;?></span>
					</td>
			</tr>

            <tr>


     
           <td >Address</td>
             <td> <textarea id="address" name="address"><?php echo $address;?></textarea>
              <br><span id="dladdreessErr" style="color:red;"><?php echo $dladdressErr;?></span>
          </td>
             </tr>


             <td >User Type</td>
             <td> <textarea id="usertype" name="usertype"><?php echo $usertype;?></textarea>
              <br><span id="dlusertypeErr" style="color:red;"><?php echo $dlusertypeErr;?></span>
          </td>
             </tr>


      <tr>
        <td></td>
         <td align="center"><input type="submit" name="add_delivery" value="Add Delivery" ></td>
      </tr>


    </table>


    </form>
  
</div>

