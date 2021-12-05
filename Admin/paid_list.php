<?php
require_once 'admin_header.php';
require_once 'controllers/SalaryController.php';
$employees = getAllPaidEmployees();

 ?>


 <div class="table-body">


<br><br>
<a style="text-decoration: None;" href="paying_salary.php" > Paid employees list </a>
<br><br>


<table class="content-table">
 <thead>
   <th>Sl#</th>
   <th>First name</th>
   <th>Last name</th>
   <th>Reference ID</th>
   <th>Username</th>
   <!-- <th>Phone</th> -->
   <!-- <th>Gender </th> -->
   <!-- <th>Role</th> -->
   <th>Salary</th>
   <th>Paid amount</th>
   <th>Due</th>
   <th>Payment date</th>

 </thead>
 <tbody>
   <?php
     $i=1;
     foreach ($employees as $e) {
       // $id =$e["id"];
       list($year,$month,$day) = (explode("-",$e["payment_date"]));
       $payment_date = $day.'-'.$month.'-'.$year;
       echo "<tr>";
         echo "<td>$i</td>";
         echo "<td>".$e["f_name"]."</td>";
         echo "<td>".$e["l_name"]."</td>";
         echo "<td>".$e["id"]."</td>";
         echo "<td>".$e["username"]."</td>";
         echo "<td>".$e["salary"]."</td>";
         echo "<td>".$e["paid"]."</td>";
         echo "<td>".$e["due"]."</td>";
         echo "<td>".$payment_date."</td>";
       

         // echo' <a href="">Delete</a> </td>';
       echo "</tr>";
       $i++;
     }
     // echo "<pre>";
     // print_r($students);
     // echo "</pre>";
     // echo $dept_id;
    ?>

 </tbody>
</table>

 </div>
<?php require_once 'admin_footer.php';?>
