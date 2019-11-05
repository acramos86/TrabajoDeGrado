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
        <a class="brand-logo breadcrumb">BUSCAR</a>
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
            <li><a href="buscarEsrcitor.php">ESCRITORES</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="waves-effect waves-light btn-small"  href="login.html">INICIAR SESION</a></li>
            </li>
         </ul>
     </div>
  </header>

	<table class="striped responsive-table">
        
        <blockquote>
	      <h2>Escriba el titulo del libro</h2>
	    </blockquote>

		  <form class="col s12" action="resultadoBusqueda.php" method="post">
		    <div class="row">
		      <div class="input-field col l10 s12">
		          <input name="titulo" placeholder="Titulo del libro" id="first_name" type="text" class="validate">
		          <label for="last_name">Titulo del libro</label>
		        </div>
		        <div class="input-field col l10 s12 hide">
                  <input name="estado" placeholder="Estado" id="estado" type="text" value="Publicado" class="validate">
                  <label for="estado">Estado</label>
                </div>
		        <div class="input-field col l5 s12 hide">
		          <input name="isbn" placeholder="ISBN" id="last_name" type="text" class="validate">
		          <label for="ISBN">ISBN</label>
		        </div>
		        <div class="row">
			      <div class="input-field col l5 s12 hide">
			          <input name="nombre" placeholder="Nombre del Autor" id="first_name" type="text" class="validate">
			          <label for="last_name">Nombre</label>
			        </div>
			        <div class="input-field col l5 s12 hide">
			          <input name="apellido" placeholder="Apellido del autor" id="last_name" type="text" class="validate">
			          <label for="last_name">Apellido</label>
			        </div>
		      <div class="col l2 ">
		        <button action="" class="btn waves-effect waves-light" type="submit" name="action">Buscar
		        <i class="material-icons right">search</i>
		        </button>
		      </div>		          
		  </form>

        <thead>
          <tr>
              <th>Titulo</th>
              <th>Nombre autor</th>
              <th>Apellido autor</th>
              <th>Ver</th>              
          </tr>
        </thead>
        <tbody>
            <?php
            	  include "coneccion.php";
              	  include "buscarPublicados.php";

                while($datos = mysqli_fetch_array($ejecuttar)) {
                  ?>
                  <tr>
                          <th><?php echo $datos['tit_li']; ?></th>
                          <th><?php echo $datos['nom_es']; ?></th>
                          <th><?php echo $datos['ape_es']; ?></th>
                          <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";?>
                          <th><a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a></th>
                    </tr>
                    <?php                   
                  }
                  ?>

                  <?php
                  include "cerraConeccion.php"
                  ?>
          </tr>
         </tbody>
    </table>
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
	  	});
	</script>
	<!--$('.sidenav').sidenav();
	    $(".dropdown-trigger").dropdown();-->
</body>
</html>