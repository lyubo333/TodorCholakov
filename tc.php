<html>
<head>
</head>
<body>
<form action="tc.php" method="post">
Topic: <input type="text" name="a"><br />
Topic: <input type="text" name="b"><br />
Topic: <input type="text" name="c"><br />
<input type="submit" name="submit">
</form>
<?php 
if (isset($_POST ['submit'])){
	

	$con = mysql_connect("localhost","Edmant","Ina");
	if(!$con) {
		die("cannot connect" . mysql_error());
	}
mysql_select_db ("snippets", $con);
$sql = "INSERT INTO Lectures (a,b,c) VALUES('$_POST[a]','$_POST[b]','$_POST[c]')";

mysql_query ($sql, $con);
echo $sql;


}
//Do the query
$query = "SELECT * FROM lectures";
$result = mysql_query($query);
//iterate over all the rows
while($row = mysql_fetch_assoc($result)){
    //iterate over all the fields
    foreach($row as $key => $val){
        //generate output
        echo  $key . ": " . $val . "<BR />";
    }
}
?>

<br />