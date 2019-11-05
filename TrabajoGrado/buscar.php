<?php
  
	include "coneccion.php";

                  $nom_es = $_POST["nombre"];
                  $ape_es = $_POST["apellido"];
                  $tit_li = $_POST["titulo"];
                  $isbn_li = $_POST["isbn"];
                  $estado = $_POST["estado"];
                  
                  if (strlen(trim($nom_es))<1 && strlen(trim($ape_es))<1){
                    $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE est_li='$estado' ";
                    
                  }else{
                    if (strlen(trim($nom_es))<1){
                    $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE ape_es='$ape_es' AND est_li='$estado'";
                    
                  }else{
                    if (strlen(trim($ape_es)) <1){
                      $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE nom_es='$nom_es' AND est_li='$estado'";
                      
                  }else{
                    $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE nom_es='$nom_es' AND ape_es='$ape_es' AND est_li='$estado'";                    
                  }
                  }
                  }
                  
                  if ( strlen(trim($nom_es))<1 && strlen(trim($ape_es))<1 ) {
                    if ( strlen(trim($tit_li))<1 ){
                    $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE est_li='$estado'";
                  }else{                    
                    $sql = "SELECT *  FROM `libro` INNER JOIN escritor ON escritor.id_es=libro.id_es1 WHERE tit_li='$tit_li' AND est_li='$estado'";
                  }
                  }
                  
                  
                  

                  $ejecuttar= mysqli_query($conectar,$sql);
?>
