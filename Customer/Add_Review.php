<?php
require_once 'header.php';
require_once 'controllers/RatingController.php';



?>

<script src="js/Add_Review.js"></script>
  <div class="form">

    <h1 align="center">Add Review</h1>
    <hr>
    <br>
    <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
      <h5><?php echo $err_db; ?></h5>
      <table align="center">
        <tr>
          <td>Customer Name</td>
          <td>: <input id="cust_name" type="text" name="cust_name" value="<?php echo $cust_name;?>" ><br>
          <span id="custnameErr" style="color:red;"><?php echo $custnameErr;?></span></td>
        </tr>

		<tr>
          <td> Food Name </td>
          <td>: <input id="food_name" type="text" name="food_name" value="<?php echo $food_name;?>" ><br>
          <span id="foodnameErr" style="color:red;"><?php echo $foodnameErr;?></span></td>
        </tr>


        <tr>
          <td>Rating</td>
          <td>: <input id="rating" type="text" name="rating" value="<?php echo $rating;?>" ><br>
          <span id="pdctratingErr" style="color:red;"><?php echo $pdctratingErr;?></span></td>
        </tr>


       <tr>


     
					<td >Comments</td>
					<td>: <textarea id="comments" name="comments"><?php echo $comments;?></textarea>
						<br><span id="pdctcommentsErr" style="color:red;"><?php echo $pdctcommentsErr;?></span>
					</td>
			</tr>

    

      <tr>
        <td></td>
         <td align="center"><input type="submit" name="add_review" value="Add Review" ></td>
      </tr>


    </table>


    </form>
  
</div>

