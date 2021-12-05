<?php
include 'header.php';

session_start();
if($_SESSION["loggeduser"]==null)
{
	header("Location: login.php");
}
 
?>

<?php 
	require_once 'controllers/UserController.php';
	//$users = getalluser();
	$users = getprofile($_SESSION["loggeduser"]);
	//var_dump($users);
?>
<!--All Products starts -->


<div class="center">
	 
	<div id="suggesstion"></div>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			 
			<th>User Name</th>
			<th>Password</th>
		 
			<th>gender</th>
			<th> email</th>
			<th>address</th>
			<th>User Type</th>
			<th>Action</th>
          
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($users as $p){
                    $id = $p["id"];
					echo "<tr>";
						echo "<td>$id</td>";
						 
						 
						echo "<td>".$p["username"]."</td>";
						echo "<td>".$p["password"]."</td>";
                        echo "<td>".$p["gender"]."</td>";
                        echo "<td>".$p["email"]."</td>";
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["usertype"]."</td>";
						echo '<td><a href="edit_profile.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
 
<!--Products ends -