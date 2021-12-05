<?php
include 'header.php';
    include 'Controllers/orderStatusController.php';
   
?>
<html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form class="" action="" method="post">


    <table width = "40%" align="center" >
        <caption><h1>Update Order Status</h1></caption>
        <tr >
            <td ><h3>Enter Order ID: </h3></td>  <td><input type="text" name="id"></td>
        </tr>
        
        <tr>
            <td></td>  <td><span style="color:red;"><?php echo $err_oder;?></td>
        </tr>

        <tr>
            <td></td><td><input type="radio" id="check" name="check" value="received"> <label for="check" >Oder Receieved</label> </td>
        </tr>

        <tr>
            <td></td> <td><input type="radio" id="ongoing" name="check" value="ongoing"> <label for="check" >Oder Ongoing</label> </td>
        </tr>

        <tr>
            <td></td><td><input type="radio" id="deviverd" name="check" value="deliverd"> <label for="check" >Delivered</label> </td>
        </tr>

        <tr>
            <td></td>  <td><span style="color:red;"><?php echo $err_status;?></td>
        </tr>

        <tr>
            <td></td>  <td><input type="submit" name="submitbtn" value="Update Status"></td>
        </tr>
        <tr>
            <td></td>  <td><span style="color:red;"><?php echo $update_status;?></td>
        </tr>
        <tr>
            <td></td>  <td><span style="color:red;"><?php echo $p_st; ?></td>
        </tr>
        
    </table>
</form>
<form action="vieworderstatus.php">
    
    <table width = "40%" align="center">
        <caption><h1>View Order Status</h1></caption>
        <tr>
             <td align="center"><input type="submit"  value="View Order Status"></td>
        </tr>
    </table>
</form>
 </body>
 </html>

 