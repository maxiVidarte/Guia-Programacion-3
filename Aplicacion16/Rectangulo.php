<?php  require_once 'Punto.php';	



	
class Rectangulo extends Punto
{
private $_vertice1;
private $_vertice2;
private $_vertice3;
private $_vertice4;

public $area;
public $ladoUno;
public $ladoDos;
public $perimetro;
	
	function __construct($v1,$v3)
	{
	 	parent::__construct($v1,$v3);
	}

	function Dibujar()
	{

		echo "***********<br>";
		echo "***********<br>";
		echo "***********<br>";
		echo "***********<br>";

	}
}
$prueba = new Rectangulo(2,3);
echo $prueba->Dibujar();
?>

