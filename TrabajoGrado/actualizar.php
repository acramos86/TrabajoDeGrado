<?php

session_start();
 include "coneccion.php";




 $isbn = $_POST["isbn"];
 $estado = $_POST["estado"];
 //$id_es = $_POST[''];
 $id_es = $_SESSION['usu'];


 $sql = " UPDATE libro SET est_li = '$estado' WHERE isbn_li = '$isbn' ";

 $resultado = mysqli_query($conectar, $sql);

 if(!$resultado){
		echo "Se presento un error al actualizar la informacion.<br><a href='indexAdmin.php'>VOLVER</a>";
	}else{
		echo "Se actualizao la informacion del libro.<br><a href=".$_SESSION['inicio'].">VOLVER</a>";
	}



?>