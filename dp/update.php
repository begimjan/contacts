<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
   $result = mysqli_query($connect, " UPDATE dp SET name='" . $_POST['name'] . "',  contact='" . $_POST['contact'] . "'  WHERE id='" . $_POST['id'] . "'");
   header("Location: http://begimjan/dp/index.php");
 ?>