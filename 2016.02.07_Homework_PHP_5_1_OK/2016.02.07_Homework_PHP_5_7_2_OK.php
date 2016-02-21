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
			echo "The Fibonnaci number of 1 is 1<br />";
			echo "The Fibonnaci number of 2 is 1<br />";
			echo "The Fibonnaci number of 3 is 	2<br />";
			for ($i=4; $i<100; $i++) 
			{
				$z=$x+$y;
				$x=$y;
				$y=$z;	
				$array[$i] =($z);
		 }
			foreach ($array as $key=>$value) {
			echo "The Fibonnaci number of ". $key ." is ". $value ."<br />";
		}
		?>
	</body>
</html>
