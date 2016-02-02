<html>
<head>
</head>
<body>

<?php 
	$con=mysql_connect("localhost","Edmant","Ina");
	if(!$con) {
		die("cannot connect" . mysql_error());	
	}	
	mysql_close($con);
?>
</body>
</html>