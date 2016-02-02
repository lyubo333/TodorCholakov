<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Homework PHP 1</title>
		<style>
			.green {
				color:green;
			}
			.red {
				color:red;
			}
			table {
				border:solid 1px;
			}
			table td {
				border:solid 1px;
			}
			.fCoumn {
				background-color:gray;
			}
			#orange {
				color:orange;
			}
			#blue {
				color:blue;
			}
		</style>
	</head>
	<body>
		<?php
		//Задача 1.1
		//Задача 1.2	
			$name = "Тодор Чолаков";
			$age = 32;
			$address = "Враца/ул.Лале - 11";
			echo "Моето име е  $name, а моята възраст е $age, a пък адреса ми е $address <br />";
		//Задача 1.3
			$integer1 = 21;
			$doubleFloat1 = 32.5;
			$string1 = "Враца/ул.Лале - 11";
			$boolean1 = true;
			echo gettype($integer1);
			echo "<br />";
			echo gettype($doubleFloat1);
			echo "<br />";
			echo gettype($string1);
			echo "<br />";
			echo gettype($boolean1);
			echo "<br />";
		//Задача 1.4			
			$a = 5;
			$b = 10;
			echo $a."-".$b;
			echo "<br />";
			$a = 10;
			$b = 5;
			echo $a."-".$b;
		//Задача 2.1
			echo "<br />";
			$hobby = "ски";
			echo "Моето име е  $name, а моето любимо хоби е  $hobby. <br />";
			$hobby = "колоездене";
			$name = "Цветан";
		//Задача 2.2
			echo "Името на моя приятел е  $name, а неговото любимо хоби е  $hobby. <br />";
		//Задача 2.3
			echo "<p class='green'>I've gone to the store.</p>";
			echo '<p class="red">"The harder’s the life, the sweeter’s the song."</p>';
		//Задача 2.4
		//Задача 2.5
		//Задача 2.6
			$user ="student";
			$course ="course1";
			$duration =4;
			echo "Hi, <span class='red'>$user</span>! You`ve been approved to take part in the <span class='red'>$course</span> as a 
			<span class='red'>$user</span>. 
			The <span class='red'>$course</span> will last for 
			<span class='red'>$duration</span> hours. <br />";
			$user ="lecturer";
			$course ="course2";
			$duration =12;
			echo "Hi, <span class='red'>$user!</span> You`ve been approved to take part in the <span class='red'>$course</span> as a <span class='red'>$user</span>. 
			The <span class='red'>$course</span> will last for <span class='red'>$duration</span> hours.<br />";
			$user ="assistant";
			$course ="course3";
			$duration =6;
			echo "Hi, <span class='red'>$user!</span> You`ve been approved to take part in the <span class='red'>$course</span> as a <span class='red'>$user</span>. 
			The <span class='red'>$course</span> will last for <span class='red'>$duration hours</span>. <br />";
		//Задача 3.1
		//Задача 3.2
		//Задача 3.3
		//Задача 3.4
		//Пресмятане лице на квадрат
			$RecASide = 4;
			$RecArea = $RecASide*$RecASide;
			echo "Rectangle with side 4sm. has area of $RecArea sm<sup>2</sup> <br />";
		//Пресмятане лице на триъгълник
			$TriASide = 4;
			$TriH = 4;
			$TriArea = ($TriH*$TriASide)/2;
			echo "Triangle with side 4sm and h=4sm. has area of $TriArea sm<sup>2</sup> <br />";
		//Пресмятане лице на кръг
			$CircleDiam = 4;
			$CircArea = (3.14*$CircleDiam*$CircleDiam)/4;
			echo "Cricle with diameter 4sm	 has area of $CircArea sm<sup>2</sup> <br />";
		//Пресмятане лице на трапец
			$trapSideA = 4;
			$trapSideB = 4;
			$trapH = 4;
			$trapArea = ($trapSideA+$trapSideB)*$trapH/2;
			echo "Trapezium with side A =4sm, side B =4sm and h=4sm has area of $trapArea sm<sup>2</sup> <br />";
			$firstName = "Todor";
			$secondName = "Cholakov";
			$phoneNumber = sprintf('%04d', 896);
			$age = 33;
		//Задача 4.1 Таблица
			echo "<table>
					<tr>
						<td class='fCoumn'>$firstName</td>
						<td>$secondName</td>
					</tr>
					<tr>
						<td class='fCoumn'>Phone number:</td>
						<td>$phoneNumber</td>
					</tr>
					<tr>
						<td class='fCoumn'>Age:</td>
						<td>$age</td>
					</tr>
					<tr>
						<td class='fCoumn'>Adress:</td>
						<td>$address</td>
					</tr>
				  </table>";
		//Задача 4.2 - Таблица с резултати		  
			echo "<table>
					<tr>
						<td colspan='2'><b>Таблица с обобщение на резултатите</b></td>
					</tr>
					<tr>
						<td>Параметър</td>
						<td>Резултат</td>
					</tr>
					<tr>
						<td><p class='green'>страна на квадрат: $RecASide см.</p></td>
						<td><p class='red'> $RecArea см<sup>2</sup> </p></td>
					</tr>
					<tr>
						<td><p class='green'>Триъгълник страна 'а': $TriASide см.</p>
							<p id='green'>Триъгълник височина 'а': $TriH см.</p></td>
						<td><p class='red'> $TriArea см<sup>2</sup> </p></td>
					</tr>
					<tr>
						<td><p class='green'>Кръг диаметър 'd': $CircleDiam см.</p></td>
						<td><p class='red'> $CircArea см<sup>2</sup> </p></td>
					</tr>
				<tr>
						<td><p class='green'>Трапец страна 'a': $trapSideA см.</p>
						<p class='green'>Трапец страна 'b': $trapSideB см.</p>
						<p class='green'>Трапец височина 'h': $trapH см.</p>
						</td>
						<td><p class='red'> $trapArea см<sup>2</sup> </p></td>
					</tr>
				  </table>";
		//Задача 4.3 - Неномериран списък - формули		  
			echo "<ul>
					<li><span class='green'>Лице на кръг &pi; = &pi;*d<sup>2</sup>/4</span></li>
					<li><span class='red'>Лице на квадрат = а<sup>2</sup></span></li>
					<li><span id='orange'>Лице на триъгълник = a*h/2</span></li>
					<li><span id='blue'>Лице на трапец = (a+b)*h/2</span></li>
				  </ul>"		
		?>	 
	</body>
</html>
