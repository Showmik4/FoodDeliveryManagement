
<?php
require_once 'admin_header.php';
//require_once 'controllers/UserController.php';
//require_once 'controllers/employeeController.php';
require_once 'controllers/SalaryController.php';
//$id=$_GET["id"];
$e=getEmployee('id');

?>
 <script src="js/paying_salary.js"></script>
 <fieldset style="background-color:rgb(222 234 240);">
<!--
   <h3 align="center" style="background-color:rgb(156 199 219);">
     &nbsp;&nbsp;<a style="text-decoration: None;" href="home_page.php" > Home </a>&nbsp;&nbsp
     &nbsp;&nbsp;<a style="text-decoration: None;" href="employees_list.php" > Manage employees </a>&nbsp;&nbsp;
     &nbsp;&nbsp;<a style="text-decoration: None;" href="categories_form.php"> Manage categories </a>&nbsp;&nbsp;
     &nbsp;&nbsp;<a style="text-decoration: None;" href="brand_form.php"> Manage brand </a>&nbsp;&nbsp;
     &nbsp;&nbsp;<a style="text-decoration: None;" href="financial_form.php"> Manage finance </a>&nbsp;&nbsp;
   </h3> -->

   <h1 align="center">Paying salary</h1>
   <hr>
   <br>
   <form action="" method="post" onsubmit="return validate()" enctype="multipart/form-data">
     <h5><?php echo $err_db; ?></h5>
             <table align="center">

               <tr>
                 <td>
                  <input name="id" value="<?php echo $e["id"];?>" type="hidden">
               </td>
               </tr>

               <tr>
     <td>Payment Date</td>
     <td>:
       <select id="day" name="day">
         <option selected disabled>Day</option>
         <?php
             for($i=1;$i<32;$i++){
               if($day == $i)
                   echo "<option selected>$i</option>";
               else
                   echo "<option>$i</option>";
                     }

           ?>
       </select>

       <select id="month" name="month">
           <option selected disabled>Month</option>
           <?php
             // foreach($months as $m)
             for($i=1;$i<13;$i++){
                   if($month == $i)
                       echo "<option selected>$i</option>";
                   else
                       echo "<option>$i</option>";
                         }
             ?>
       </select>

       <select id="year" name="year">
           <option selected disabled>Year</option>
           <?php
               for($i=1990;$i<2021;$i++){
                 if($year == $i)
                     echo "<option selected>$i</option>";
                 else
                     echo "<option>$i</option>";
                       }

             ?>
       </select>

     </td>
   </tr>
   <tr>
     <td></td>
     <td><span id="err_day" style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; <span id="err_month" style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp; <span id="err_year"  style="color:red;"> <?php echo $err_year;?> </span></td>
   </tr>

               <tr>
                 <td>First name</td>
                 <td>: <input  type="text" name="f_name" ><br>
                 <span style="color:red;"><?php echo $err_fname;?></span></td>
               </tr>

               <tr>
                 <td>Last name</td>
                 <td>: <input  type="text" name="l_name" ><br>
                 <span style="color:red;"><?php echo $err_lname;?></span></td>
               </tr>

               <tr>
                 <td>Username</td>
                 <td>: <input  type="text" name="username" value="<?php echo $e["username"];?>" ><br>
                 <span style="color:red;"><?php echo $err_uname;?></span></td>
               </tr>




               <tr>
                 <td>Salary</td>
                 <td>: <input type="text"  name="salary" ><br>
                 <span style="color:red;"><?php echo $err_salary;?></span></td>
               </tr>

               <tr>
                 <td> Enter amount</td>
                 <td>
                    <input id="paid" type="text" name="paid" ><br>
                   <span id="err_paid" style="color:red;"><?php echo $err_paid;?></span>
                 </td>
               </tr>

               <tr>
                 <td> Enter Due</td>
                 <td>
                   :  <input id="due" type="text" name="due" ><br>
                   <span id="err_due" style="color:red;"><?php echo $err_due;?></span>
                 </td>
               </tr>

               <tr>
                 <td></td>
                  <td align="center"><input type="submit" name="paying_salary" value="Paid" ></td>
               </tr>

             </table>


   </form>
 </fieldset>

<?php require_once 'admin_footer.php';?>
