<html>
<head>
	<title>Aplicacion 05</title>
</head>
<body>
<?php 

for ($num=20; $num <=60 ; $num++) { 
	$aux = $num;
	echo "$num :  ";
switch ($num)	
	{
		case ($num >=20 && $num <30):
			if($num == 20)
			{
				echo "Veinte <br>";			
			}
			else
				echo "Veinti ";
			$aux -=20;
			break;
		case ($num >=30 && $num < 40):
			echo "Treinta ";
			if ($num>30)
			{
			 	echo "y ";
			}
			else
				echo "<br>";
			$aux-=30;
			break;
		case ($num >=40 && $num < 50):
			echo "Cuarenta ";
			if ($num>40)
			 	echo "y ";
			else
				echo "<br>";			
			$aux -=40;
			break;
		case ($num >=50 && $num < 60):
			echo "Cincuenta ";
			if ($num>50)
			 {
			 	echo "y ";
			}
			else 
				echo "<br>";
			$aux -=50;
			break;
		case 60:
			echo "Sesenta";
			break;
		default:
		break;
	}
switch ($aux) {
	case  1:
		echo "uno<br>";
		break;
	case 2: 
		echo "dos<br>";
		break;
	case 3: 
		echo "tres<br>";
		break;
	case 4:
		echo "cuatro<br>";
		break;
	case 5:
		echo "cinco<br>";
		break;
	case 6:
		echo "seis<br>";
			break;	
	case 7:
		echo "Siete<br>";
		break;
	case 8:
		echo "ocho<br>";
		break;
	case 9:
		echo "nueve<br>";
	default:
		# code...
		break;
}
}
 ?>
</body>
</html>