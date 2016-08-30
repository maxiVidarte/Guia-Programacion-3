<?php   require_once 'FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica
{
	private $_ladoDos;
	private $_ladoUno;

	function __construct($L1,$L2)
	{
		parent::__construct();
		$this->_ladoDos = $L2;
		$this->_ladoUno = $L1;
		$this->CalcularDatos();
	}

	function Dibujar()
	{
		echo "*******<br>";
		echo "*******<br>";
		echo "*******<br>";


	}
	function CalcularDatos()
	{
		echo "Calculo de datos del Rectangulo<br>";
		echo "El lado uno es: ".$this->_ladoUno;
		echo "<br>El lado dos es: ".$this->_ladoDos;
		echo "<br>La superficie es : ".$this->_superficie = $this->_ladoUno*$this->_ladoDos;
		echo "<br>El perimetro es: ".$this->_perimetro = $this->_ladoUno*2+2*$this->_ladoDos;
	}


}
	
$prueba = new Rectangulo(5,2);
//echo $prueba->Dibujar();
//echo $prueba->toString();
?>