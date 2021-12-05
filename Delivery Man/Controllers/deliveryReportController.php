<?php
    include 'Model/db_config.php';
    $order_id=null;
    $err_oder=null;
    $hasError = false;
    $result=null;

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["orderid"])){
                $hasError=true;
                $err_oder="Order ID Required !";
        } 
        else{
            $order_id = $_POST["orderid"];
        }

        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid order ID!";
            }
            else{
                report($order_id);
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

    function report($orderid){
        $query = "select * from orders where id = $orderid ";
        global $result;
        $result= RetriveReport($query);
    }

?>
