<?php
	include "coneccion.php";
	
	$sql = "SELECT * FROM escritor INNER JOIN libro ON escritor.id_es=libro.id_es1";
	$ejecuttar= mysqli_query($conectar,$sql);
?>