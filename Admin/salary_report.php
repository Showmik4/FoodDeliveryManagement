<?php 
    include 'controllers/SalaryReportController.php';
    include 'admin_header.php';
?>
<html>
    <head></head>
    <body>
        <form action="" method="post">
            <table width="40%" align="center">
                <caption><h1>Salary Reports:</h1> </caption>
                <tr> <td><h3>Enter salary Id:</h3></td> </tr> 
                <tr> <td><input type="textbox" name="id"></td> </tr>
                <tr>
                <td><span style="color:red;"><?php echo $err_oder;?> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submitbtn" value="Report"></td>
                </tr>
                
                
            </table>
            <br><br><br><br><br>
            <?php echo $result; ?>

        </form>
    </body>
</html>