<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	<?php 
	$e=$_POST['a'];
	switch ($e){
	  case "Monday":
	  echo "today is Monday";
	  break;
	   case "Tuesday":
	  echo "today is Tuesday";
	  break;
	   case "Wednesday":
	  echo "today is Wednesday";
	  break;
	   case "Thursday":
	  echo "today is Thursday";
	  break;
	   case "Friday":
	  echo "today is Friday";
	  break;
	   case "Saturday":
	  echo "today is Saturday";
	  break;
	   case "Sunday":
	  echo "today is Sunday";
	  break;
	  default:
	  echo "There is no such a day in the week";	 
	  }

	?>
		
	</body>
</html>