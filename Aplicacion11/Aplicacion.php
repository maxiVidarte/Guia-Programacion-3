<html>
<head>
	<title>Aplicacion 11</title>
</head>
<body>
<?php 
	
for ($i=0; $i < 4 ; $i++) { 
	echo "<br>La potencia de $i es: <br> ";
	Potencia($i);
}

function Potencia($hola)
{

	echo (pow($hola,1)."<br>");
	echo (pow($hola,2)."<br>");
	echo (pow($hola,3)."<br>");
	echo (pow($hola,4)."<br>");
}

 ?>
</body>
</html>