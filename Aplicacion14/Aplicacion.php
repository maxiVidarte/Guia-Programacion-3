<html>
<head>
	<title>Aplicacion 14</title>
</head>
<body>
<?php  
	
function esPar($numero)
{
	if (($numero % 2)==0) {
		return true;
	}
	else 
		return false;

}
function esImpar($numero)
{

	return !esPar($numero);
}

if (esPar(6)) 
{
	echo "El numero es par";
}
else
	echo "El numero es impar";
?>
</body>
</html>