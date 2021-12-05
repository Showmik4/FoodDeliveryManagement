<?php

if(!isset($_SESSION)) 
{ 
	session_start(); 
}

include 'db_conn.php';


function getprofile($id){
    $query = "select * from admin where id='$id'";
    $rs = get($query);
    return $rs;	
}

?>