<?php
include 'header.php';
    include ('Controllers/viewstatuscontroller.php');
?>
<html>
    <head></head>
    <body>
        <form class="" action="" method="post">
            <table wdith="40%" align="center">
                <caption><h1>Order Status: </h1></caption>
                <tr>
                    <td>Order Id: </td> <td><input type="text" name="id"> </td>
                </tr>
                <tr>
                    <td></td> <td><span style="color:red;"><?php echo $err_oder;?> </td>
                </tr>
                <tr>
                    <td></td>  <td><input type="submit"  value="View Status"></td>
                </tr>
                <tr>
                    <td>Order Status: </td><td><?php echo $result ?> </td>
                </tr>
            </table>
        </form>
    </body>
</html>