<?php 
/*var_dump($_FILES);*/
if (isset($_FILES["foto"])) 
{
	$NombreCompleto=explode(".", $_FILES['foto']['name']);
	$Extension=  end($NombreCompleto);
	$destino = "fotos/".$_FILES["foto"]["name"];
	$foto=".".$Extension;
	var_dump($destino);
	//echo $Extension;
	//echo $destino;
	//echo $foto;
	if(move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
	{
		echo "hola guardo el archivo";
	}
}
 ?>