<?php
	session_start();

	if ($_SESSION['rol'] != null && $_SESSION['rol'] == 'escritor'){
		
	}else{
				
				header("location:index.php");

	}	
?>	

<script type="text/javascript" language="JavaScript">
	function confirmar(){
		var a = confirm('Esta seguro de cambiar el estado del libro');
		if (a == true){
			document.formulario.submit();
		}else{			
			window.open('indexEscritor.php');
		}
	}


</script>

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
		    <a href="<?php echo $_SESSION['inicio'];?>" class="brand-logo">INICIO</a>
		    <a href="#" data-target="nav-mobile1" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li class="left-align black-text"><b>Bienvenido <?php echo $_SESSION['nombre'];?></b></li>
		      <li><a href="buscarLibroUsu.php">LIBROS</a></li>
		      <li><a href="buscarEsrcitorUsu.php">ESCRITORES</a></li>
		      <li><a class="dropdown-trigger" href="#!" data-target="dropdown">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="waves-effect waves-light btn-small"  href="cerrarSession.php">CERRAR SESION</a></li>
		    </ul>
		  </div>
		</nav>
		   	<ul id="nav-mobile1" class="sidenav">
		   		<li class="left-align black-text"><b>Bienvenido <?php echo $_SESSION['nombre'];?></b></li>
		        <li><a href="buscarLibro.php">LIBROS</a></li>
		        <li><a href="buscarEsrcitor.php">ESCRITORES</a></li>
		        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="waves-effect waves-light btn-small" href="cerrarSession.php">CERRAR SESION</a></li>
		     </ul>
		 </div>
	</header>





	<div class="row">
		<div class="col l9 s12">
			<div class="col l6 s12">
			<h5><b>Libros sin publicar</b></h5>






 <?php
        include "coneccion.php";
        include "buscarAceptados.php";
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
                <p><?php echo $datos['sin_li'];?></p><br>                
              </div>
              <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";
              $isbn = $datos['isbn_li'];
              ?>

              <div class="card-action"> 
              	<a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a>


              	<form class="col s12 from-register" action="actualizar.php" method="post" enctype="multipart/form-data">

                	<div class="row">
				        <div class="input-field col l6 s12">
				            <input type="hidden" name="isbn" value="<?php echo $isbn?>"/>				            
			          	</div>
			          	<div class="input-field col l6 s12">
				            <input type="hidden" name="estado" value="Publicado"/>	
			          	</div>
			          	
			          		<button class="btn waves-effect waves-light" type="submit" name="boton" onclick="confirmar()">Publicar
						    	<i class="material-icons right">send</i>
							</button>			          			      
				        
					</div>
                </form> 





              </div>              
            </div>
          </div>
        </div>
      
        <?php
        }
        ?>	
</div>
<div class="col l6 s12">
	<h5><b>Libros publicados</b></h5>
	

		<?php
        include "coneccion.php";
        include "buscarPublicadosEs.php";
        $i=2;

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
                <p><?php echo $datos['sin_li'];?></p><br>                
              </div>
              <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";
              $isbn = $datos['isbn_li'];
              ?>

              <div class="card-action"> 
              	<a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a>


              	<form class="col s12 from-register" action="actualizar.php" method="post" enctype="multipart/form-data">

                	<div class="row">
				        <div class="input-field col l6 s12">
				            <input type="hidden" name="isbn" value="<?php echo $isbn?>"/>				            
			          	</div>
			          	<div class="input-field col l6 s12">
				            <input type="hidden" name="estado" value="Aceptar"/>	
			          	</div>
			          	
			          		<button class="btn waves-effect waves-light" type="submit" name="boton" onclick="confirmar()">Ocultar
						    	<i class="material-icons right">send</i>
							</button>			          			      
				        
					</div>
                </form> 





              </div>              
            </div>
          </div>
        </div>
      
        <?php
        }
        ?>	


	</div>






















		</div>


		<div class="col l3 s12">
			<h5><b>Pendientes de autorizacion</b></h5>
			<?php
        include "coneccion.php";
        include "buscarPendientesEs.php";


        while($datos = mysqli_fetch_array($ejecuttar)) {
      ?> 
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $datos['tit_li']?></div>
				      <div class="collapsible-body"><p><?php echo $datos['sin_li']?></p></div>

				    </li>
				</ul>
			<?php
		}
			?>


			<h5><b>Libros cancelados</b></h5>
			<?php
        include "coneccion.php";
        include "buscarPublicadosEs.php";


        while($datos = mysqli_fetch_array($ejecuttar)) {
      ?> 
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $datos['tit_li']?></div>
				      <div class="collapsible-body"><p><?php echo $datos['sin_li']?></p></div>

				    </li>
				</ul>
			<?php
		}
			?>



			
			
		</div>
	</div>		
	</div>
	




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

        <div class="fixed-action-btn ">
		    <a href="formSubir.php" class="btn-floating btn-large cyan pulse teal lighten-2">
		    <i class="large material-icons tooltipped" data-position="left" data-tooltip="SUBIR LIBRO">file_upload</i>
		    </a>
    	</div>  
	
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
</body>
</html>