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
			<p>6. домашно зад. 1 Напишете програма, която изчислява и отпечатва
			средната температура за период от 3 месеца /90 дни/, отпечатва петте
			най­ниски и петте най­високи температури./hint генерирайте масив като
			използвате rand() за температурите в определен интервал/.
			</p>				
<?php
			/*6. домашно зад. 1 Напишете програма, която изчислява и отпечатва
			средната температура за период от 3 месеца /90 дни/, отпечатва петте
			най­ниски и петте най­високи температури./hint генерирайте масив като
			използвате rand() за температурите в определен интервал/.*/	
		// for loop
	$test = array ();
	for ($i=1; $i<=90; $i++) 
		{
		$test[$i] = rand (-10, 40);
		}
echo "---------------------------------------------------------------------------<br />";
	echo "<br />";
		foreach ($test as $i=>$value) 
		{
			echo "Ден - ". $i ." - средна температура: ". $value." градуса;";
			echo "<br />";
		}
	asort ($test);
$sumValues = (array_sum($test)/100);
$minValues = array_slice ($test, 0, 5);
	echo "Петте най-ниски температури за периода са: ";
	foreach ($minValues as $value)
	 {
	echo " ". $value ." градуса,";
	 }
	echo "<br />";
	echo "Петте най-високи температури за периода са: ";
$maxValues = array_slice ($test, 85, 90);
	foreach ($maxValues as $value)
	 {
		echo " ". $value ." градуса,";
	 }
	echo "<br />";
	echo "Средната температура за периода от 90 дни е: ". $sumValues . "";
?>
	</body>
</html>
