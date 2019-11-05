<?php
	include "coneccion.php";
	include "buscar.php";

	while($datos = mysqli_fetch_array($ejecuttar)) {
		$archivo = $datos['archivo'];
		$tipo = $datos['ext'];		
	}
	echo "<embed src='$archivo' type='ext' width='100' height='100'></embed>";
?>

