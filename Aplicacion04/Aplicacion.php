<html>
<head>
	<title>Aplicacion 04</title>
</head>
<body>
<?php

$operador = '+';
$op1 = 2;
$op2 = 5;

echo "Los numero son $op1 y $op2"."<br>";
if($operador == '+')
{
	echo "$op1 + $op2 = ".($op1+$op2)."<br>";
	$operador ='-';
}
if($operador == '-')
{
	echo "$op1 - $op2 = ".($op1-$op2)."<br>";
	$operador = '/';
}
if($operador ==  '/')
{
	echo "$op1 / $op2 =  ".($op1/$op2)."<br>";
	$operador ='*';
}
if($operador == '*')
{
	echo "$op1 * $op2 = ".($op1*$op2)."<br>";

}
	?>
</body>
</html>