<html>
<head>
	<title>Aplicacion 02</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['$accion'];?>">



	</form>
<?php 

$tiempo = date("d-m-Y"); 
$mes = date("m");
echo "<h3>La fecha es: $tiempo</h3>";
/*
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
*/
$tiempo = date("Y/m/d");
echo "<h3> La fecha es: $tiempo	</h3>";

$tiempo = date("d-m-y h:i:sa");
echo "<h3> La fecha es: $tiempo	</h3>";

switch ($mes) 
{
	case ($mes>11 && $mes<3):
		echo "Es verano";
		break;
	case ($mes>2 && $mes<6): 
		echo "Es otoño";
		break;
	case ($mes>5 &&  $mes<9): 
		echo "Es invierno";
		break;
	case ($mes>08 && $mes<12):
		echo "Es primavera";
		break;
}


 ?>
</body>
</html>