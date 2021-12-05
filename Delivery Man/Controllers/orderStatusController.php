<?php
 include 'Model/db_config.php';
    $order_id="";
    $err_oder="";
    $checkbox="";
    $err_checkbox="";
    $incorrect="";
    $hasError = false;
    $status=null;
    $err_status=null;
    $update_status=null;
    $p_st=null;

   


    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["id"])){
                $hasError=true;
                $err_oder="Order ID Required !";
        } 
        else{
            $order_id = $_POST["id"];
        }
        if (isset($_REQUEST['check'])) {
            $status = $_REQUEST['check'];
        }
        if($status==null){
            $hasError = true;
            $err_status ="Please select operation!";
        }
        
        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid order ID!";
                
            }
            else{
                checkStatus($order_id,$status);
            }
        }
    }
    
    function checkOrderID($orderid){
		$query = "select * from orders where $orderid=id";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}


    function checkStatus($orderid,$status){
        $query = "select * from orders where $orderid=id";
        $result = Retrivedata($query);
        
        if($result == null && $status == "received"){
            updateOrderStatus($orderid,$status);
            $p_st = "Updated!";
        }
        elseif($result ==null && $status== "ongoing" || $status=="deliverd"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "received" && $status == "ongoing"){
            updateOrderStatus($orderid,$status);
            $p_st = "Updated!";
        }
        elseif($result=="received" && $status=="deliverd"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result=="received" && $status =="received"){
            global $p_st;
            $p_st = "Already status received!";
        }

        if($result == null && $status == "ongoing"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "ongoing" && $status == "ongoing"){
            global $p_st;
            $p_st = "Already status ongoing!";
        }
        elseif($result == "ongoing" && $status == "received"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "ongoing" && $status == "deliverd"){
            updateOrderStatus($orderid,$status);
            global $p_st;
            $p_st = "Updated!";
        }

        if($result == "deliverd"){
            global $p_st; 
            $p_st = "Already delivered!";
        }
        
        

    }

    function updateOrderStatus($orderid,$st){
        
        $query = null;
        if($st == "received" ){
            $query = "UPDATE orders SET status='$st' WHERE id=$orderid";
        }
        elseif($st == "ongoing"){
            $query = "UPDATE orders SET status='$st' WHERE id=$orderid";
        }
        else{
            $query = "UPDATE orders SET status='$st' WHERE id=$orderid";
        }
        
		$rs = execute($query);
		if($rs == true){
            $err_status ="Updated!";
		}
        else{
            $err_status ="Failed!";
        }

	}

    
    

?>
