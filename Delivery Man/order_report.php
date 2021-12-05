
<?php 
    include ('Controllers/orderReportController.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form class="" action="" method="post" >
 
    <table>
        <caption><h2>Report Customer</h2></caption>
        <tr>
            
            <td align="right">Order ID</td>
            <td><input type="text" name="id"></td>    
        </tr>
        <tr>
            <td></td>
            <td><?php echo $err_id;?></td>
        </tr>
        <tr>
            <td align="right"> Rateing:</td>
            <td><input type="radio" id="rate" name="rating" value="verygood">
            <label for="rate">Very good</label>
            <input type="radio" id="rat" name="rating" value="good"> <label for="rate">Good</label>   
            <input type="radio" id="rat" name="rating" value="bad">
            <label for="ra">Bad</label>  </td>  
        </tr>
        <tr>
            <td></td>
            <td><?php echo $err_rating;?></td>
        </tr>
        <tr>
            <td><label>Comment:</label></td>
            <td><textarea type="text" name="comment"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $err_comment;?></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit"  value="Submit"></td>
            
        </tr>
        <tr>
            <td></td>
            <td><?php echo $err_status;?></td>
        </tr>
    </table>
 
</form>
</body>
</html>

