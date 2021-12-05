<?php include 'admin_header.php';
	require_once 'controllers/allProductController.php';
	$products = getProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<input type="text" class="form-control" onkeyup="searchProduct(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			
			
            <th>Code</th>
            <th>Image</th>
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($products as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["product_name"]."</td>";
						echo "<td>".$p["c_name"]."</td>";
						echo "<td>".$p["product_price"]."</td>";
                        echo "<td>".$p["product_code"]."</td>";
                    	echo "<td><img  width='80px' height='100px' src='".$p["img"]."'></td>";
                      

						echo '<td><a href="update_food.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="delete_food.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<script src="js/products.js"></script>
<!--Products ends -->
<?php include 'admin_footer.php';?>