<html>
<head>
	<title>Aplicacion 10</title>
</head>
<body>
<?php 

$arrayLapiceras = array(0 =>array("Azul","pelican","Fino",50) ,1=>array("Verde", "pelican","Grueso",50),2=>array("Negro","pelican","Fino",60) );

foreach ($arrayLapiceras as $key => $value) {
	echo "$key	";
	foreach ($value as $key) {
		echo "$key	";
	}
	echo "<br>";
}

 ?>
</body>
</html>