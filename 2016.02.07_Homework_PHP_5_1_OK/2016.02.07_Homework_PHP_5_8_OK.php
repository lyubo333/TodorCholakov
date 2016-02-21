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
			<p>домашно зад. 8 Напишете, програма която променя стойностите на
елементите на масива от главни в малки букви и обратно.
			</p>				
<?php
			/*домашно зад. 8 Напишете, програма която променя стойностите на
елементите на масива от главни в малки букви и обратно.
*/	
$lowerCase = array ('maNuAl', 'VrAtSa', 'CLIP', "ops");
foreach ($lowerCase as $value) {
	echo " ".$value. " Задание<br />";
	echo " ". strtolower($value). " Малки букви<br />";
	echo " ". strtoupper($value). " Голями букви<br />";
	echo "<br />";
		}
?>
	</body>
</html>
