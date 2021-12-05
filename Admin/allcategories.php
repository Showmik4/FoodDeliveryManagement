<?php include 'admin_header.php';
	include 'controllers/CategoryController.php';
	$categories = getAllCategories();
	
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Id</th>
			<th> Name</th>
		
			<th>Action</th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["id"]."</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$id.'" class="btn btn-success">Edit</a></td>';
                        echo '<td><a href="deletecategory.php?id='.$id.'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>