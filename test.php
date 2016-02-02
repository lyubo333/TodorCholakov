
<style>
#table {background-color:red; border:1px solid;}
#table td tr {border:1px solid;}
</style>
<?php 
	$string = "eha ani ina";
	if (preg_match ('/ ani/' , $string)) {
		echo "OK";
	}
	else{
		echo "Not OK";
	}
	echo "<br />";
	
	$a = 123;
	$b = "asd";
	$c = 8.63;
	$d = true;
	var_dump($a, $b, $c, $d);
	echo "<br />";
	$x = 1;
	while ($x<=5){
		echo "The number is $x <br />";
		$x++;
		};
	echo "<br />";
	for ($x=0.1; $x<=10; $x++){
		
	};

	$colors = array(5, 6, 7, 8, 6, 8, 9, 9); 
	foreach ($colors as $a) {
    echo "$a -<br />";	
	}
	echo "<br />";
	
	$aa =rand (0, 100);
	$bb = rand (0, 100);
	$cc = $aa*$bb;
	
	if ($aa < $bb){
		echo "$bb <br />";
	};
	echo "<br />";
	
	if ($bb%2==0) {
		echo "Числото е четно";
	}
	elseif ($bb%2!==0) {
		echo "not even";
	}
	elseif ($bb==0) {
		echo "the value is null";
		
		}
		echo "<br />";
		
		echo $cc;
		echo "<br />";
	if ($cc%2==0)  {
		echo "Числото е четно";
	}
	elseif ($cc%2!=0) {
		echo "Числото не е четно";
	}
	
	elseif ($cc==0) {
		echo "Числото е равно на нула";
		}

		echo "<br />";
		$tri1='';
		$tri2='';
		$tri3='';
		$triRes = $tri1+$tri2+$tri3;
		if ($triRes===180) {
			echo "това е триъгълник";
		}
		else {
			echo "това не е триъгълник";
		}
		
		$var = 'b';
		switch ($var) {
			case 'a':
			case 'e':
			echo "Vocal";
			
		}
		/*
		$username="TodorCholakov";
		$password="Ina";
		$username2="Cholakov";
		$password2="Ani";
		
		if ($username == $username2) {
			if ($password==$password2){
				echo "welcome home";
		} 
			else {
			echo "wrong user";
		} 
			else 
		{
			echo "wrong pass";
		}
		}
		
		*/
		echo "<br />";
		
		$favcolor = "blue";
		switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue":
			echo "Your favorite color is blue!";
			break;
		case "green":
			echo "Your favorite color is green!";
			break;
		default:
			echo "Your favorite color is neither red, blue, nor green!";
}
	$ifVar1 = rand(0, 70);
	$ifVar2 = rand(0, 70);
	echo "<br />";
	if ($ifVar1+$ifVar2>100) {
		echo "the number is greater than 100";
	} elseif ($ifVar1+$ifVar2<30) {
		echo "the number is less than 10";
	}
	  else {
		  echo "the number is less than 50";
	  }
	  echo "<br />";
	  echo $ifVar1+$ifVar2;
	  
	  $xSwitch = "b";
	  switch ($xSwitch){
	  case "a":
	  echo "aa";
	  break;
	   case "b":
	  echo "bb";
	  break;
	  default:
	  echo "none";	 
	  }
$assoiative_massive = array("firstName"=>"Todor",
						  "secondName"=>"Cholakov",
						   "middleName"=>"Slavejkov",
						   "proffesion"=>"Electrical engeneer");	   						   
		echo "<ul>
				<li>".$assoiative_massive ['firstName']."</li>
				<li>".$assoiative_massive ['secondName']."</li>
				<li>".$assoiative_massive ['middleName']."</li>
				<li>".$assoiative_massive ['proffesion']."</li>
				</ul>";
			 
$assoiative_massive_phone = array("name"=>"Todor",
						  "phoneNumber"=>sprintf('%04d', 896),
						  );	   						   
		echo "<ul>
				<li>".$assoiative_massive_phone ['name']."</li>
				<li>".$assoiative_massive_phone ['phoneNumber']."</li>
				</ul>";				
		echo "<table id='table'>
				<tr>
					<td>".$assoiative_massive_phone ['name']."</td>
					<td>".$assoiative_massive_phone ['phoneNumber']."</td>
				</tr>
			</table>";

			
		?>	
	  
<form action="test.php" method="post">
	username:<input type="text" name="username"></br>
	password:<input type="text" name="password"></br>
	submit:<input type="submit" name="submit" value=Log></br>
</form>	
<?php
if (!empty($_POST['submit'])){
				

	echo $_POST ['username']."<br />";
	echo $_POST ['password']."<br />";
	
}
?>
