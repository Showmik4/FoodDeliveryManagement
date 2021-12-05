

<?php 
    include 'header.php';
	require_once 'controllers/UserController.php';
	//$users = getalluser();
//	$id=$_GET['id'];

	$users = getOrder();
	//var_dump($users);
?>
<!--All Products starts -->


<div class="center">
	 
	<div id="suggesstion"></div>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			 
			<th>Name</th>
		 
			<th>gmail</th>
			<th>phone</th>
			<th>address</th>
			<th>pmode</th>
			<th>products</th>
            <th>amount_paid</th>
            <th>order_status</th>
            <th>status</th>
          
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($users as $p){
                    $id = $p["id"];
					echo "<tr>";
						echo "<td>$id</td>";
						 
						 
						echo "<td>".$p["name"]."</td>";
						 
                        echo "<td>".$p["gmail"]."</td>";
                        echo "<td>".$p["phone"]."</td>";
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["pmode"]."</td>";
                        echo "<td>".$p["products"]."</td>";
                        echo "<td>".$p["amount_paid"]."</td>";
                        echo "<td>".$p["order_status"]."</td>";
                        echo "<td>".$p["status"]."</td>";
					
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
 
<!--Products ends -