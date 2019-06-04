<?php 
   $connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
   $result = mysqli_query($connect, " INSERT INTO dp (name,contact) VALUES ('" . $_POST['name'] . "', '" . $_POST['contact'] . "')");
   header("Location: http://begimjan/dp/index.php");
 ?>