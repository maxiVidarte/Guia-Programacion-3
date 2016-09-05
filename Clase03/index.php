 
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<label>Nombre</label>
	<input type="text" name= "nombre" placeholder="hola">
	<input type= "text" name="numerouno">
	<input type= "submit">


	</form> 
</body>
</html>
<?php 
if(isset($_GET['nombre']))
{
	var_dump($_GET);
	echo "<br>".$_GET['nombre'];
}
else
{

	echo "primer ingreso";
}
 ?>

