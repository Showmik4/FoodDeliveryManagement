<?php
require_once 'header.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/CategoryController.php';
$categories = getAllCategories();

?>

<script src="js/Product_Validation.js"></script>
  <div class="form">

    <h1 align="center">Add product</h1>
    <hr>
    <br>
    <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
      <h5><?php echo $err_db; ?></h5>
      <table align="center">
        <tr>
          <td>Product name</td>
          <td>: <input id="product_name" type="text" name="product_name" value="<?php echo $name;?>" ><br>
          <span id="pdctnameErr" style="color:red;"><?php echo $pdctnameErr;?></span></td>
        </tr>

		<tr>
          <td> Category </td>
          <td>: <input id="c_id" type="text" name="c_id" value="<?php echo $c_id;?>" ><br>
          <span id="catnameErr" style="color:red;"><?php echo $catnameErr;?></span></td>
        </tr>


        <tr>
          <td> Price </td>
          <td>: <input id="product_price" type="text" name="product_price" value="<?php echo $price;?>" ><br>
          <span id="pdctpriceErr" style="color:red;"><?php echo $pdctpriceErr;?></span></td>
        </tr>


       <tr>


     
					<td >Code</td>
					<td>: <textarea id="product_code" name="product_code"><?php echo $code;?></textarea>
						<br><span id="pdctcodeErr" style="color:red;"><?php echo $pdctcodeErr;?></span>
					</td>
			</tr>

    

      <tr>
        <td>Image</td>
        <td>: <input id="img" type="file" name="img" value="<?php echo $p_image;?>" ><br>
        <span id="err_p_image" style="color:red;"><?php echo $err_p_image;?></span></td>
      </tr>


      <tr>
        <td></td>
         <td align="center"><input type="submit" name="add_product" value="Add Product" ></td>
      </tr>


    </table>


    </form>
  
</div>

