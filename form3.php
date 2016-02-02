<?php 
	if (!empty($_POST['submit'])){
	$_SESSION ['username'] = $_POST ['username'];
		echo "Hello, " .$_SESSION ['username'];
	}else {
		echo "Hello";
	}
	?>
	<a href="form2.php">next</a>