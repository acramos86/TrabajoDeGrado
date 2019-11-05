<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Web trabajo de grado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<ul id="dropdown" class="dropdown-content">
		  	<li><a href="#!">NODIFICAR</a></li>
		  	<li class="divider"></li>
		  	<li><a href="#!">BORRAR</a></li>	  	
		</ul>
		<ul id="dropdown1" class="dropdown-content">
		  	<li><a href="#!">NODIFICAR</a></li>
		  	<li class="divider"></li>
		  	<li><a href="#!">BORRAR</a></li>	  	
		</ul>
		<nav>
		  <div class="nav-wrapper">
		    <a href="index.php" class="breadcrumb">INICIO</a>
        <a href="javascript:history.back(-1);" class="breadcrumb">BUSCAR</a>
        <a class="brand-logo breadcrumb">RESULTADO</a>
		    <a href="#" data-target="nav-mobile1" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">          
		      <li><a href="buscarLibro.php">LIBROS</a></li>
		      <li><a href="buscarEsrcitor.php">ESCRITORES</a></li>
		      <li><a class="dropdown-trigger" href="#!" data-target="dropdown">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="waves-effect waves-light btn-small"  href="login.html">INICIAR SESION</a></li>
		    </ul>
		  </div>
		</nav>
		   	<ul id="nav-mobile1" class="sidenav">
		        <li><a href="buscarLibro.php">LIBROS</a></li>
		        <li><a href="buscarEsrcitor.html">ESCRITORES</a></li>
		        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="waves-effect waves-light btn-small">CERRAR SESION</a></li>
		     </ul>
		 </div>
	</header>
  

  <blockquote>
       <h2>Libros disponibles</h2>
  </blockquote>

	<table class="striped responsive-table">
    
    </div>

        <thead>
          <tr>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Sinopsis  </th>
              <th>Ver libro</th>            
          </tr>
        </thead>
        <tbody>
          <?php
                  include "coneccion.php";
                  include "buscarPublicadosTodos.php";                  
                  

                while($datos = mysqli_fetch_array($ejecuttar)) {
                  
                  
                  ?>
                  <tr>
                          <th><?php echo $datos['tit_li']; ?></th>
                          <th><?php echo $datos['nom_es']." ".$datos['ape_es'];?></th>
                          <th><?php echo $datos['sin_li']; ?></th>
                          <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";?>
                          <th><a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a></th>
                    </tr>
                    <?php
                  
                  }
                  ?>

                  <?php
                  include "cerraConeccion.php";
                  ?>
                
          
         </tbody>
    </table>

	



     <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 m8 s12">
                <h5 class="white-text">Informacion del creador</h5>
                <p class="grey-text text-lighten-4">Alex Camilo Ramos Figueroa<br>Administracion de Sistemas Informaticos<br>Proyecto final</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://materializecss.com/">Frmework Materialize</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.sublimetext.com/">Editor de texto Sublime Text3</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://flask.pocoo.org/">Mini Framework Flask</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Universidad Nacional de Colombia Sede manizales 2019
            <a class="grey-text text-lighten-4 right" href="http://unal.edu.co/">Sitio oficial</a>
            </div>
          </div>
        </footer>   
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js">	</script>	
	<script>
		$(document).ready(function(){
			M.AutoInit();			
	  	};
	</script>
	<!--$('.sidenav').sidenav();
	    $(".dropdown-trigger").dropdown();-->
</body>
</html>