<!DOCTYPE html>
<html>
<head>
	<title>Welcome to DevOps on AWS! This is a test by Sid. Changes made in development branch.This will be published.</title>
</head>
<body>
	<?php 
		require 'Welcome.php';
		$welcome = new Welcome();
	?>
	<h1></?php echo $welcome->greet() ?></h1>
</body>
</html>