<?php  /*Se quiere realizar una aplicación que lea un archivo 
(../misArchivos/palabras.txt) y ofrezca estadísticas sobre cuantas 
palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. 
No tener en cuenta los espacios en blanco ni saltos de líneas
como palabras.
Los resultados mostrarlos en una tabla.
*/
?>
<html>
<head>
	<title>Aplicacion 34</title>
</head>
<body>
	<h1>Aplicacion 34</h1>
	<?php  
		$myfile = fopen("palabras.txt","r") or die("no hay archivo");
		//echo fread($myfile,filesize("palabras.txt"));
		$contador =0;
		$palD1L =0;
		$palD2L =0;
		$palD3L=0;
		$palD3L=0;
		$palD4L=0;
		$palDm4=0;
		while(!feof($myfile))
		{
			
			$contador++;
			if(fgetc($myfile)==" ")
			{
				switch ($contador) {
					case 2:
						$palD1L++;
						$contador=0;
						break;
					case 3:
						$palD2L++;
						$contador=0;
						break;
					case 4:
						$palD3L++;
						$contador=0;
						break;
					case 5:
						$palD4L++;
						$contador=0;
						break;
					default:
						$palDm4++;
						$contador=0;
					break;

				}

			}
  			//echo fgetc($myfile)."<br>";
		}
		fclose($myfile);
		
	?>
	<table style="width:100%">
	<tr>
		<th>Palabra de 1 letra </th>
		<th>Palabra de 2 letras</th>
		<th>Palabra de 3 letras</th>
		<th>Palabra de 4 letras</th>
		<th>Palabra de más de 4 letras</th>
	</tr>
	<tr>
		<th><?php echo $palD1L ?></th>
		<th><?php echo $palD2L ?></th>
		<th><?php echo $palD3L ?></th>
		<th><?php echo $palD4L ?></th>
		<th><?php echo $palDm4 ?></th>

	</tr>



</body>
</html>
