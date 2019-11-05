<?php
  include "coneccion.php";
  
  $sql = "SELECT * FROM escritor INNER JOIN libro ON escritor.id_es=libro.id_es1 WHERE est_li='publicado'";
  $ejecuttar= mysqli_query($conectar,$sql);
?>