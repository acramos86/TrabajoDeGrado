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
		    <a href="index.php" class="brand-logo breadcrumb">INICIO</a>      
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
		        <li><a class="waves-effect waves-light btn-small" href="login.html">INICIAR SESION</a></li>
		     </ul>
		 </div>
	</header>
	
	<div class="row">
    <div class="col l9 s12">
      <!--Section-->
      <div class="col s12 m6 l6">
      <div class="card blue-grey darken-1 z-depth-4">
        <div class="card-content white-text teal lighten-2">
          <span class="card-title"><b>¿Eres escritor?</b></span>
          <p>Si la respuesta es si, entonces registra tus obras en nuestro sitio y llega a toda nuestra comunidad, de manera totalmente gratuita, además, podrás contactar con otros colegas, solo tienes que crear una cuenta con nosotros y comienza a hacerte conocer!!!!.</p>
        </div>
        <div class="card-action teal lighten-2">
          <a href="#">Registrate gratis</a>
          <a href="login.html">Inicia sesion</a>
        </div>
      </div>      
    </div>
    <div class="col s12 m6 l6">
      <div class="card blue-grey darken-1 z-depth-4">
        <div class="card-content white-text teal lighten-2">
          <span class="card-title"><b>¿Solo te gusta leer?</b></span>
          <p>Si solo le interesa leer y conocer nuevos exponentes de géneros literarios, en nuestro sitio podar encontrar una gran cantidad de escritores que publican sus obras de manera gratuita en el portal, además de poder conocer las últimas novedades del mundo literario, solo tienes que registrarte, es gratis.</p>
        </div>
        <div class="card-action teal lighten-2">
          <a href="#">Registrate gratis</a>
          <a href="login.html">Inicia sesion</a>
        </div>
      </div>      
    </div>

        <h5><b>Libros publicados</b></h5>
    <?php
        include "coneccion.php";
        include "buscarPublicados.php";
        $i=0;

        while($datos = mysqli_fetch_array($ejecuttar)) {
          $i++;
          
      ?>      
      <!--Espacio paara los libros-->
        <div class="col l12 s12">
          <div class="card horizontal">
            <div class="card-image">              
              <img src="portadasLibros\<?php echo $i.'.jpg'?>">
            </div>
            <div class="card-stacked container">
              <div class="card-content">
                <h6><?php echo $datos['tit_li'];?></h6>
                <p><?php echo $datos['sin_li'];?></p>
              </div>
              <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";?>
              <div class="card-action">
                <a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a>
              </div>
            </div>
          </div>
        </div>
      
        <?php
        }
        ?>
      <!--Section-->

    </div>
    <div class="col l3 s12">

      <!--Aside-->
      <h6><b>Escritores</b></h6>
      <?php
        include "coneccion.php";
        $sql = "SELECT * FROM escritor";
        $ejecuttar= mysqli_query($conectar,$sql);
        while($datos = mysqli_fetch_array($ejecuttar)) {
          
      ?>
      
        <ul class="collapsible">
          <li>
            <div class="collapsible-header" name="nombre"><i class="material-icons">people_outline</i><?php echo $datos['nom_es']." ".$datos['ape_es']; ?>
            </div>
            <div class="collapsible-body"><span><?php echo utf8_encode($datos['des_escritor']);?></span>
              <form class="col s12 from-register" action="resultadoBusquedaTodo.php" method="post" enctype="multipart/form-data">
                    <div class="input-field col l6 s12">
                      <input type="hidden" name="estado" value="Publicado"/>  
                    </div>                     
                    <div class="input-field col l6 s12">
                      <input type="hidden" name="id_es" value="<?php echo $datos['id_es'];?>"/>                   
                    </div>                    
                    <div class="col l12 s12">
                      <button class="btn waves-effect waves-light btn-small" type="submit" name="boton">Ver libros
                      <i class="material-icons right">send</i>
                    </div>                
              </form>
               
            </div>
          </li>        
        </ul>
      <div>
          
    </div>
      
      <?php
      }
      ?>     
    </div>
    
  </div>

  

   <!--boton flotante
  <div class="fixed-action-btn ">
    <a href="formSubir.php" class="btn-floating btn-large cyan pulse teal lighten-2">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="SUBIR LIBRO">file_upload</i>
    </a>
    </div>
  boton flotante -->
      

     <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 m8 s12">
                <h5 class="white-text">Quienes somos</h5>
                <p class="grey-text text-lighten-4">Alex Camilo Ramos Figueroa<br>Administracion de Sistemas Informaticos<br>Proyecto final</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links de contacto</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/acramos86">Alex Ramos en Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/acramos86/">Alex Ramos en Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/acramos86">Alex Ramos en Twitter</a></li>
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