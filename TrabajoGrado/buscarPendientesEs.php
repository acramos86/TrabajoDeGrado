<?php
  include "coneccion.php";
  $id_es1 = $_SESSION['usu'];

  
  
  $sql = "SELECT * FROM escritor INNER JOIN libro ON escritor.id_es=libro.id_es1 WHERE est_li='Pendiente' AND id_es='$id_es'";
  $ejecuttar= mysqli_query($conectar,$sql);
?>