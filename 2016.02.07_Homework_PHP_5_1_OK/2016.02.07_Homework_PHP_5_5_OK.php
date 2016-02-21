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
		
			<p>домашно зад. 5 Напишете програма, която отпечатва в браузъра
таблица с две колони. В първата колона съдържа случайно число /четно
число в интервала 0 до 100/, а втората колона трябва да съдържа
квадратния корен на това число, с точност до втория знак след
десетичната запетая. Последния ред от таблицата трябва да съдържа
сумата на всички квадратни корени.
			</p>	
<table>
<tr>			
<?php
$array = array ();
for ($i=1; $i<10; $i++) {
$a = rand (0,100);
$c = ($a+1);
if ($a%2==0) {
	$a= round(sqrt($a), 2);
} else {
	$a= round(sqrt($c), 2);
}
$array [$i] = ($a);
}
echo "<th>Произволна стойнсот</th><th>Стоност след коренуване</th ></tr>";
foreach ($array as $key=>$value){
 $c = ($value*$value);
 echo "<td>". $c ." </td><td>". $value ." </td ></tr>";
}
echo "<td></td><td> Сума: ". $arraySum = array_sum($array) ." </td ></tr>";
?>
</table>
<p>
<button onclick="myFunction()">Презареди</button>
</p>
<script>
function myFunction() {
    location.reload();
}
</script>
	</body>
</html>
