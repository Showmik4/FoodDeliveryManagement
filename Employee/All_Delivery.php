<?php include 'header.php';
	require_once 'Controllers/AddDeliverymanController.php';
	$employee = getDelivery();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Deliveryman</h3>
	<input type="text" class="form-control" onkeyup="searchEmployee(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th>User Name</th>
			<th>Password </th>
			<th>Gender</th>
			
			
            <th>Email</th>
            <th>Address</th>
            <th>Role</th>
           
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($employee as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["username"]."</td>";
						echo "<td>".$p["password"]."</td>";
						echo "<td>".$p["gender"]."</td>";
                        echo "<td>".$p["email"]."</td>";
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["usertype"]."</td>";
                    
                      

						echo '<td><a href="edit_employee.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="delete_delivery.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<!--Products ends -->
