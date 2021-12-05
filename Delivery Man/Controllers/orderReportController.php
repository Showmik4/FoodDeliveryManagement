<?php
 include 'Model/db_config.php';
 

 $id="";
 $err_id="";
 $rating=null;
 $err_rating=null;
 $comment=null;
 $err_comment=null;
 $err_status=null;
 $hasError=false;


    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["id"])){
                $hasError=true;
                $err_id="Order ID Required !";
        } 
        
        else{
            $id = $_POST["id"];
        }

        if(empty($_POST["rating"])){
            $hasError=true;
            $err_comment="rating Required !";
        } 
        
        else{
            $comment = $_POST["rating"];
        }

        if (isset($_REQUEST['comment'])) {
            $rating = $_REQUEST['comment'];
        }
        if($rating==null){
            $hasError = true;
            $err_rating ="Please select operation!";
        }
        
        if(!$hasError){
            if(!checkOrderID($id)){
                $err_id = "Invalid order ID!";
            }
            else{
                $cartid = findCart($id);
                $customer_id = findCustomer($cartid);
                insertReport($orderid,$rating,$comment);
            }
        }
    }

    function findCustomer($cartid){
        $query = "select * from cart where id ='$cartid'";
        $cust_id = RetriveCart4($query);
        return $cust_id;
    }

    function findCart($id){
        $query = "select * from orders where order_id ='$id'";
        $data = RetriveCart1($query);
        return $data;
    }
    
    function checkOrderID($orderid){
		$query = "select * from orders where order_id ='$orderid'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}

    function insertReport($orderid,$rating,$comment){
        global $err_status;
        $query = "UPDATE orders SET rating='$rating', comment ='$comment' WHERE id='$orderid'";
		$rs = execute($query);
		if($rs == true){
            $err_status ="Report Done!";  
		}
        else{
            $err_status ="Report Failed!";
        }

	}

    
    

?>
