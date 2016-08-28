<html>
<head>
	<title>Aplicacion 03</title>
</head>
<body>
<?php 

$a = 5;
$b = 1;
$c = 5;

if(($a<$b && $a>$c)|| ($a>$b && $a<$c))
	echo "$a";
else if(($b<$a && $b>$c)|| ($b>$a && $b<$c))
	echo "$b";
else if(($c<$b && $c>$a)|| ($c>$b && $c<$a))
	echo "$c";
else
	echo "No hay valor del medio";

 ?>
</body>
</html>