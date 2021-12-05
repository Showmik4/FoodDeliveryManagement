<?php
include 'header.php';

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 

?>

<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="admin_products" onchange="showUser(this.value)">
  <option value="">Select a product:</option>
  <option value="4">chips</option>
  <option value="5">burger</option>
  <option value="6">pizza</option>
 
  </select>
</form>
<br>
<div id="txtHint"><b>Product will be listed here...</b></div>
