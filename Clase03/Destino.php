<?php
//el isset pregunta si get tiene algo o es null 
if(isset($_GET['nombre']))
{
	//para que se vea la variable se usa var_dump
	//var_dump($_GET);

	echo "<br>".$_GET['nombre'];
	echo "<br>".$_GET['numerouno'];
}
else
{

	echo "primer ingreso";
}
 ?>