<?php
	//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
	session_start();
	
	//conectar con el servidor
	include "coneccion.php";

	$usuario = $_POST["usuario"];
	$contrasenia = $_POST["contrasenia"];
	

	//Consulta de escritores
	$insertar = "SELECT * FROM escritor WHERE id_es='$usuario' AND con_es='$contrasenia'";
	
	$resultado = mysqli_query($conectar, $insertar);
	$filas= mysqli_num_rows($resultado);

	$_SESSION['usu'] = $usuario;
	echo $filas['nom_es'];
	
	if($filas>0){
		while($datos = mysqli_fetch_array($resultado)) {
		$_SESSION['rol'] = 'escritor';
		$_SESSION['nombre'] = $datos['nom_es'];
		$_SESSION['inicio'] = "indexEscritor.php";
		header("location:indexEscritor.php");
	}
	}else{		
		//Consulta de administradores -- ojo perrooooo la tabla

		$insertar = "SELECT * FROM administrador WHERE id_ad='$usuario' AND con_ad='$contrasenia'";	
		$resultado = mysqli_query($conectar, $insertar);
		$filas= mysqli_num_rows($resultado);

		$_SESSION['usu'] = $usuario;
		
		if($filas>0){
			while($datos = mysqli_fetch_array($resultado)) {
			$_SESSION['rol'] = 'administrador';
			$_SESSION['nombre'] = $datos['nom_ad'];
			$_SESSION['inicio'] = "indexAdmin.php";
			header("location:indexAdmin.php");
		}
		}else{		
			echo 'error de autenticacion';
			echo '<br><a href="index.php">VOLVER AL INICIO</a>';
			//header("location:index.html");
		}
	}





	mysqli_free_result($resultado);
	mysqli_close($conectar);
?>	