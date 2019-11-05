<?php
  include "coneccion.php";
  $id_es = $_SESSION['usu'];
  
  $sql = "SELECT * FROM escritor INNER JOIN libro ON escritor.id_es=libro.id_es1 WHERE est_li='cancelar' AND id_es='$id_es'";
  $ejecuttar= mysqli_query($conectar,$sql);
?>