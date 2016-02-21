<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Homework PHP 3</title>
		<style>
		table {border:1px solid;
		}
		table td {border:1px solid;}
			.green {color:green;}
			.red {color:red;}
			p {font-weight:bold;
			color:blue;}
			h1 {
				color:gray;
			}
		</style>
	</head>
	<body>
		<h1></h1>
			<p>домашно зад. 7 Да се напише програма, която намира N­тото число на
Фибоначи.
a. Да се напише програма, която намира всички числа на Фибоначи от
1 до N.
	<!--</p>	
<form action="2016.02.07_Homework_PHP_5_7.php" method="GET">
	<input type="text" name="number">
	<input type="submit" name="submit" value="Намерете числото на Фибоначи">
</form>			-->
<form method="get" action="2016.02.07_Homework_PHP_5_7_1_OK.php">
<input type="text" name="input">
<input type="submit" name="submit" value="Calculate Fibonacci number in range 1-1000">
</form>
<?php
/*домашно зад. 7 Да се напише програма, която намира N­тото число на Фибоначи.
a. Да се напише програма, която намира всички числа на Фибоначи от
1 до N.	
if (!empty($_GET['submit'])) {
	$number = $_GET['number'];
}*/
$x = 1;
$y = 2;
echo "<br />";
	for ($i=4; $i<1000; $i++) 
	{
		$z=$x+$y;
		$x=$y;
		$y=$z;	
		$array[$i] =($z);
 }
	foreach ($array as $key=>$value) {
			if (!empty($_GET['submit'])){
				$key1 = $_GET['input'];	
				if ($key1==$key){
					echo "The Fibonnaci number of ". $key ." is ". $value ." <br />";
							} 
				elseif 
					($key1==1) {
					echo "The Fibonnaci number of 1 is 1<br />"; break;
								}
				elseif 
					($key1==2) {
					echo "The Fibonnaci number of 2 is 1<br />"; break;
								}
				elseif 
					($key1==3) {
					echo "The Fibonnaci number of 3 is 2<br />"; break;
								}			
									}
							}
?>
	</body>
</html>
