
<?php  
abstract class FiguraGeometrica
{
	//atributos 
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	//Constructor
	function __construct()
	{
		$this->_color = "";
		$this->_perimetro = 0;
		$this->_superficie = 0;
	}

	//Metodo getter y setter de color
	public function getColor()
	{
		return $this->_color;
	}
	public function setColor($nuevoColor)
	{
		$this->_color = $nuevoColor;
	}

	//Metodo Virtual del toString()
	public function toString()
	{
		echo $this->_color."<br>";
		echo $this->_perimetro."<br>";
		echo $this->_superficie."<br>";
	}

	//Metodos abstractos
	public abstract function Dibujar();

	protected abstract function CalcularDatos();

}

?>
