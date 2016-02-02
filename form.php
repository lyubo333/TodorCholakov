<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="form.php" method="GET">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="text" name="c">
		<input type="submit" name="submit" value="check">
		</form>
		<br />
	<!--<form action="form1.php" method="POST">
		Любим град<input type="text" name="a">
		<input type="submit" name="submit" value="check">
		</form>-->
		<br />
		<br />
	<form action="form2.php" method="POST">
		Потребителско име<input type="text" name="a">
		Парола<input type="text" name="b">
		<input type="submit" name="submitt" value="check">
		</form>
		<br />
		
		<form action="form4.php" method="POST">
		Ден от седмицата<input type="text" name="a">
		<input type="submit" name="submitt" value="check">
		</form>
		<br />
		
		
		<form action="form3.php" method="POST">
		Потребителско име<input type="text" name="username">
		Парола<input type="text" name="b">
		<input type="submit" name="submit" value="check">
		</form>
		<br />
		
<?php 
	if (!empty($_GET['submit'])){
		$e=$_GET['a'];
		$r=$_GET['b'];
		$t=$_GET['c'];
		$res = $e+$r+$t;
		echo $res;
		if ($res == 180) {
			echo "the angles can make triangular";
		}else {
			echo "asd";
		}
	}
	?>
	
	</body>
</html>