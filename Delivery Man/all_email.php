<?php 
	include 'header.php';
	require_once 'Controllers/EmailController.php';
	$emails=getAllEmail();
?>
<!--All Products starts -->

<div class="text-center table-responsive">
	<h3>All Emails</h3>
	
      
      <table class="table table-hover">
        <thead>
          <th>Sl#</th>
		  <th>Email Address</th>
          <th>email Body</th>
          <th></th>

        </thead>
        <tbody>
          <?php
				$i=1;
				foreach ($emails as $p) {
				echo "<tr>";
				echo "<td>$i</td>";			
				echo "<td>".$p["email"]."</td>";
                echo "<td>".$p["text"]."</td>";
                //echo'<td> <a href="edit_product.php?id='.$p["id"].'" class="btn btn-info">Edit</a></td>';
                //echo'<td> <a href="delete_product.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
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
<!--Products ends -->
