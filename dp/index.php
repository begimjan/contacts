<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
   $connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
		$result = mysqli_query($connect, "SELECT * FROM dp");
		for($i = 0; $i<$result->num_rows; $i++){
		$res = $result->fetch_assoc();

	 ?>

<h2>
	<?php 
     echo $res['name'];
	 ?>
</h2>
<h2>
	<?php 
     echo $res['contact'];
	 ?>
</h2>

	<form method="POST"  action="delete.php">
 	   		<?php echo '<input type="hidden" name = "id" value="' . $res['id'] . '">';?>
 	   		<button>
 	   			delete
 	   		</button>
 	</form>
 		<form method="POST"  action="update0.php">
 	   		<?php echo '<input type="hidden" name = "name" value="' . $res['name'] . '">';?>
 	   		<?php echo '<input type="hidden" name = "contact" value="' . $res['contact'] . '">';?>
 	   		<?php echo '<input type="hidden" name = "id" value="' . $res['id'] . '">';?>
 	   		<button>
 	   		update
 	   		</button>
 	</form>


<?php 
}
?>
<form action="insert.php" method="POST">
	<input type="text" name="name">
	<input type="text" name="contact">
	<button>
		ok
	</button>
</form>


</body>
</html>