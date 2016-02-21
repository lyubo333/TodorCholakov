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
			<p>домашно зад. 3 Напишете програма, която намира най­малкия елемент в
масив, различен от 0./без да използвате готови функции!/
</p>
<?php
echo "Масив: ";
	for ($i=1; $i<100; $i++){
		$test = array (5, 6, 12, 43, 22, 45, 3, 99, 2, 55, 66);
	foreach ($test as $value)
	{
echo "". $value ." ,";
}
	if (in_array($i, $test)) 
   {
echo "<br />";
echo "Най-малкото число от масива е ". $i ."; <br />За изпълнение на кода е използвана променлива, която започва от 1 и проверява дали съвпада с 
   някоя от стойностите в масива. Променливата продължава се изменя до стойност съвпадаща с някоя от стоностите в масива, след което цикъла се прекъсва";
   break;
   }
}
?>
</html>
