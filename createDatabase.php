<html>
<head>
</head>
<body>

<?php 
	$con=mysql_connect("localhost","Edmant","Ina");
	if(!$con) {
		die("cannot connect" . mysql_error());
	}
if (mysql_query("CREATE DATABASE snippets", $con)){
	echo "your database is created";
}
else echo "error" . mysql_error();
	mysql_close($con);
?>
</body>
</html>