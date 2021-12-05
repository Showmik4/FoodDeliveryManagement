<?php
    include ('Model/db_con.php');
    $order_id="";
    $err_oder="";
    $hasError = false;
    $result=null;

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["id"])){
                $hasError=true;
                $err_oder="Order ID Required !";
        } 
        else{
            $order_id = $_POST["id"];
        }

        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid order ID!";
            }
            else{
                checkStatus($order_id);
            }
        }
    }

    function checkOrderID($orderid){
		$query = "select * from orders where id ='$orderid'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}

    function checkStatus($orderid){
        $query = "select * from orders where id = $orderid";
        global $result;
        $result = RetriveData1($query);
    }

?>

