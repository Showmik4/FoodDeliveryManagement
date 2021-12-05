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


	function RetriveData($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['status'];
		}
		return $data;
	}

	function RetriveCart1($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['id'];
		}
		return $data;
	}

	function RetriveCart4($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['id'];
		}
		return $data;
	}


	function RetriveReport($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$rc = $row['name'];
			$og = $row['gmail'];
			$dd = $row['phone'];
			$ad= $row['address'];
			$ss= $row['status'];
			$data = "<table wdith='40%'align='center'>
			<caption><h2>Delivery Report:</h2></caption>
			<tr><td><h4>Name: </h4></td><td><h4>$rc</h4></td></tr>
			<tr><td><h4>Gmail: </h4></td><td><h4>$og</h4></td></tr>
			<tr><td><h4>Phone: </h4></td><td><h4>$dd</h4></td></tr>
			<tr><td><h4>Address: </h4></td><td><h4>$ad</h4></td></tr>
			<tr><td><h4>Status: </h4></td><td><h4>$ss</h4></td></tr>
			</table>";
		}
		return $data;
	
	}
?>