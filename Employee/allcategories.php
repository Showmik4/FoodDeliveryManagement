
<?php 


?>
<?php include 'header.php';
	include 'Controllers/CategoryController.php';
	$categories = getAllCategories();
	
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			<th>ID</th>
			<th> Name</th>

			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php
				$i=1;

				//var_dump($categories);
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
