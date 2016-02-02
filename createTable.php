<html>
<head>
</head>
<body>

<?php 
	$con=mysql_connect("localhost","Edmant","Ina");
	if(!$con) {
		die("cannot connect" . mysql_error());
	}
mysql_select_db ("snippets", $con);
$sql = "CREATE TABLE Lectures (
	Topic varchar(20), 
	Name varchar (20),
	Attendence int
)";

mysql_query ($sql, $con);
mysql_close ($con);
?>
</body>
</html>