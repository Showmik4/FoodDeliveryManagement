<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="inventories";

	
	
	function execute($query){   //responsible for running insert,update,delete
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			else{
				return mysqli_error($conn);
			}
		} 
	}
	
	function get($query){ //responsible for running select queires
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
	}

	function getNumber($query){
		$count=0;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$data=array();
		if($conn){
		  $result = mysqli_query($conn,$query);
		  while($row = mysqli_fetch_assoc($result)){
			$count=$count+1;
		  }
		}
		return $count;
	  }


	  
	function RetriveReport($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$fm = $row['f_name'];
			$lm = $row['l_name'];
			$og = $row['username'];
			$dd = $row['salary'];
			$ad= $row['paid'];
			$ss= $row['due'];
			$pd= $row['payment_date'];
			$data = "<table wdith='40%'align='center'>
			<caption><h2>Delivery Report:</h2></caption> 
			<tr><td><h4>First Name: </h4></td><td><h4>$lm</h4></td></tr>
			<tr><td><h4>Last Name: </h4></td><td><h4>$fm</h4></td></tr>
			<tr><td><h4>User Name: </h4></td><td><h4>$og</h4></td></tr>
			<tr><td><h4>Salary: </h4></td><td><h4>$dd</h4></td></tr>
			<tr><td><h4>Paid: </h4></td><td><h4>$ad</h4></td></tr>
			<tr><td><h4>due: </h4></td><td><h4>$ss</h4></td></tr>
			<tr><td><h4>Payment Date: </h4></td><td><h4>$pd</h4></td></tr>
			</table>";
		}
		return $data;
	
	}
?>