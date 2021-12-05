<?php include 'header.php';
	require_once 'Controllers/ProductController.php';
	$products = getProducts();
?>
<!--All Products starts -->
<script src="js/product.js"></script>
<div class="center">
	<h3 class="text">All Products</h3>
	<input type="text" class="form-control" onkeyup="searchProduct(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
		
			<th> Name</th>
			<th>Cat:ID</th>
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
						echo "<td>".$p["c_id"]."</td>";
						echo "<td>".$p["c_name"]."</td>";
						echo "<td>".$p["product_price"]."</td>";
                        echo "<td>".$p["product_code"]."</td>";
                    	echo "<td><img  width='80px' height='100px' src='".$p["img"]."'></td>";
                      

						echo '<td><a href="edit_product.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="Delete_Product.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<script src="js/products.js"></script>
<!--Products ends -->
