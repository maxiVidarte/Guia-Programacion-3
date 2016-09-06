 
<html>
<head>

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
	<title>Calculo de superficie</title>
</head>
<body>
	<div class="CajaInicio">
	<form  method="post" id="FormIngreso">
		
	<input type="text" name= "base" placeholder="Ingrese base">
	<input type="text" name="altura" placeholder="Ingrese altura">
	<input type= "submit" name="Calcular" value= "Calcular Superficie" class="MiBotonUTNMenuInicio">

	<div>"php.index"</div>

	</form> 
</div>
</body>
</html>
<?php
if (isset($_POST['base'])&&isset($_POST['altura'])) 
{
	if($_POST['base']=="" || $_POST['altura']=="" )
	{
	echo "ingrese alguna medida";
	}
	else
	{
		echo $_POST['base']*$_POST['altura'];				
	}
}
?>	