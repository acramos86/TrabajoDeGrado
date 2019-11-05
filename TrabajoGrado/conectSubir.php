<?php
	session_start();

		include "coneccion.php";
	
	$isbn = $_POST["isbn"];
	$titulo = $_POST["titulo"];
	$genero = $_POST["genero"];
	$paginas = $_POST["paginas"];
	$estado = $_POST["estado"];
	$sinopsis = $_POST["sinopsis"];
	$id_es1 = $_SESSION['usu'];

	

	$nombre_archivo = $_FILES['archivo']['name'];
	$ext = $_FILES['archivo']['type'];
	$tamanio = $_FILES['archivo']['size'];
	$archevoTmp = $_FILES['archivo']['tmp_name'];
	$destino = 'Libros/'.$isbn;
	

	


	//Ruta don de se guardan la imagente (RUTA REAL: 
	///$destino = 'C:\xampp\htdocs\pruebas\Libros\l';
	
	//$_SERVER['DOCUMENT_ROOT']. '\pruebas\Libros'.$nombre_archivo;
	//$_SERVER['DOCUMENT_ROOT'].['\pruebas\Libros'];

	move_uploaded_file($_FILES['archivo']['tmp_name'], $destino.".pdf");


	//$arcObj = fopen($destino."$isbn".".pdf", "r");

	//$arcCont = fread($arcObj, $tamanio);

	//fclose($arcObj
	

	$insertar = "INSERT INTO libro (isbn_li, tit_li, gen_li, pag_li, est_li, sin_li, id_es1, nom_arc_li, ext, archivo) VALUES ('$isbn', '$titulo', '$genero', '$paginas', '$estado', '$sinopsis', '$id_es1', '$nombre_archivo', '$ext', '$destino')";	

	$resultado = mysqli_query($conectar, $insertar);

	if(!$resultado){
		echo 'Error de carga';
	}else{
		echo "Se ingreso con exito <br>
		<a href='indexEscritor.php'>VOLVER</a>";
	}
		
	
	

	//conectar con el servidor
	
	mysqli_close($conectar);
?>	
