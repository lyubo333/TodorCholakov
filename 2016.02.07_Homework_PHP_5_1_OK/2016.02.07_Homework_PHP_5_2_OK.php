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
			<p>домашно зад. 6 Напишете програма, която отпечатва на екрана
таблицата за умножение ­ 1*1 = 1, 2*1 =2 и т. н. Да се сложи в таблица с
border=1 и празните полета да са с colspan. /вижте снимката по­долу/.</p>

<?php
for ($i=1; $i<=20; $i++){
	$b=(5*$i);
	$array[$i]=($b);
}
echo "<br />";
foreach ($array as $key=>$value){
	echo "Key: ". $key ." and value multiplied by 5: ". $value ."<br />";
}
?>
	</body>
</html>
