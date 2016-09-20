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
	<title></title>
</head>
<body>
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
		echo "<br>"."Palabras de 1 letra: ".$palD1L."<br>";
		echo "Palabras de 2 letras: ".$palD2L."<br>";
		echo "Palabras de 3 letras: ".$palD3L."<br>";
		echo "Palabras de 4 letras: ".$palD4L."<br>";
		echo "Palabras de mas de 4 letras: ".$palDm4;
	?>
</body>
</html>
