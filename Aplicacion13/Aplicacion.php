<html>
<head>
	<title>Aplicacion 13</title>
</head>
<body>
<?php  

$palabra="Recuperatorio";
$max= 10;

function Validacion($p,$n)
{
	$listado = array("Recuperatorio","Parcial","Programacion");
	if ($n>=strlen($p))
	{
		echo "La palabra es valida<br>";
	}
	else
		echo "La palabra es invalida<br>";
$auxVal=0;
foreach ($listado as $key => $value) 
	{
		if ($value==$p) 
				$auxVal =1;
	}
	if ($auxVal==0)
		return 0;
	else
		return 1;
}


$EstaOk = Validacion ($palabra,$max);
if ($EstaOk==1) {
 echo "<br>La palabra esta en el listado";
}
elseif ($EstaOk==0) {
	echo "<br>La palabra no esta en el listado";
}
?>
</body>
</html>