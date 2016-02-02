<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	<?php 
	if ($_POST ['a']=="todor"&&$_POST ['b']==123)
{
echo "OK";
}
else {
	echo "NOT OK";
}
		$_SESSION ['username'] = $_POST ['username'];
		echo "Hello, " .$_SESSION ['username'];
	?>
		
	</body>
</html>