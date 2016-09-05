<?php   require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica
{
	private $_altura;
	private $_base;

	function __construct($b,$h)
	{
		parent::__construct();
		$this->_altura = $h;
		$this->_base = $b;
		$this->CalcularDatos();
	}

	function Dibujar()
	{
		printf("<br>"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."* <br>");
		printf("&nbsp;"." ***<br>");
		printf("*****<br>");
	}
	function CalcularDatos()
	{
		echo "Calculo de datos del triangulo<br>";
		echo "La base es: ".$this->_base;
		echo "<br>La altura es: ".$this->_altura;
		echo "<br>La superficie es : ".$this->_superficie = $this->_base*$this->_altura/2;
		echo "<br>El perimetro es: ".$this->_perimetro = $this->_base+2*$this->_altura;
	}


}
	
$prueba = new Triangulo(5,2);
echo $prueba->Dibujar();
//echo $prueba->toString();
?>