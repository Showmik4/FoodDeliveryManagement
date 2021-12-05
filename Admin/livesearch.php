
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','inventories');


mysqli_select_db($con,"admin_home");
$sql="SELECT * FROM admin_products WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Product Name</th>

<th>Price</th>
<th>Code</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['product_name'] . "</td>";

  echo "<td>" . $row['product_price'] . "</td>";
  echo "<td>" . $row['product_code'] . "</td>";
  
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>