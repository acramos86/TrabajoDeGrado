<?php
  include "coneccion.php";
  $estado =$_POST['estado'];
  $id_es = $_POST['id_es'];
  
  
  $sql = "SELECT * FROM escritor INNER JOIN libro ON escritor.id_es=libro.id_es1 WHERE est_li='$estado' AND id_es='$id_es'";
  $ejecuttar= mysqli_query($conectar,$sql);
?>