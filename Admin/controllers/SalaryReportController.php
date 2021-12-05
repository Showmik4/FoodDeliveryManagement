<?php
    include 'models/db_config.php';
    $order_id=null;
    $err_oder=null;
    $hasError = false;
    $result=null;

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["id"])){
                $hasError=true;
                $err_oder="Salary ID Required !";
        } 
        else{
            $order_id = $_POST["id"];
        }

        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid salary ID!";
            }
            else{
                report($order_id);
            }
        }
    }

    function checkOrderID($id){
		$query = "select * from salary where id ='$id'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}

    function report($id){
        $query = "select * from salary where id = $id ";
        global $result;
        $result= RetriveReport($query);
    }

?>
