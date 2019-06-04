<meta charset="utf-8">
<form action="update.php" method="POST">
			<?php echo'<input  name="name" value="'.$_POST['name'] . '">'; ?>
			<?php echo'<input  name="contact" value="'.$_POST['contact'] . '">'; ?>
		<?php echo '<input  type="hidden" name="id" value="'.$_POST['id'] . '" >'; ?>
		<button>
			safe
		</button>
</form>
