<?php include 'header.php';
	require_once 'Controllers/ProductController.php';
	$products = getReview();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Review</h3>
	
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th>Customer Name</th>
			<th>Food Name</th>
			<th>Rating</th>
			
			
            <th>Comments</th>
            
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($products as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["cust_name"]."</td>";
						echo "<td>".$p["food_name"]."</td>";
						echo "<td>".$p["rating"]."</td>";
                        echo "<td>".$p["comments"]."</td>";
                   

					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<!--Products ends -->
