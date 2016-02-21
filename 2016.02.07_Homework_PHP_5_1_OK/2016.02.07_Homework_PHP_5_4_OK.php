<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Homework PHP 3</title>
		<style>
		table {border:1px solid;
		}
		table td {border:1px solid;}
		textarea {width:600px;}
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
			<p>домашно зад. 4 Да се направи програма, която кодира текст като
замени всички срещания на буквата ‘a’ с ‘@’ и ‘e’ с ‘3’. Да се отпечатва
оригиналния текст и кодирания. Текстът се подава от потребителя чрез
HTML форма.
a. Да се направи програма, която декодира текста.
</p>
<form action="2016.02.07_Homework_PHP_5_4_OK.php" method="Get">
<textarea name="text" placeholder="Напишете текст съдържащ гласните 'а' и 'е'..."></textarea><br />
<input type="submit" name="submit"value="Кодирай текста">
</form>
<?php
	if (!empty($_GET['submit'])) {
		$text = $_GET['text'];
		$replace = array ("а", "е", "a", "e", "A", "А", "E", "Е",);
		$replaced = array ("@", "3", "@", "3", "@", "3", "@", "3");
		$codedText = str_replace($replace, $replaced , $text);
	echo "<br />";
	echo "Оригинален текст :". $text ." ";
	echo "<br />";
	echo "Кодиран текст :". $codedText ." ";
}

?>
<form action="2016.02.07_Homework_PHP_5_4_OK.php" method="Get">
<textarea name="text1" placeholder="Моля копирайте кодирания код тук..."></textarea><br />
<input type="submit" name="submit1"value="Декодирай текста">
</form>

<?php
	if (!empty($_GET['submit1'])) {
		$text1 = $_GET['text1'];
		$replace1 = array ("@", "3");
		$replaced1 = array ("a", "e");
		$decodedText = str_replace($replace1, $replaced1 , $text1);
	echo "<br />";
	echo " <p class='green'>Декодиран текст текст :". $decodedText ." </p>";
	}
?>
</html>
