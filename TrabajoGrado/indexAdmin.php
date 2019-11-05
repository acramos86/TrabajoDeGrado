<?php
  session_start();

  if ($_SESSION['rol'] != null && $_SESSION['rol'] == 'administrador'){
    
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
      window.open('indexAdmin.php');
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
          <li><a href="buscarLibroUsu.php">LIBROS</a></li>
          <li><a href="buscarEsrcitorUsu.php">ESCRITORES</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="waves-effect waves-light btn-small"  href="cerrarSession.php">CERRAR SESION</a></li>
         </ul>
     </div>
  </header>

  <div class="row">
      <div class="col l9 s12">


        <h2 class="header">Libros pendientes</h2>
        <?php
        include "coneccion.php";
        include "buscarPendientes.php";


          while($datos = mysqli_fetch_array($ejecuttar)) {
        ?> 
          <div class="card horizontal">
            
            <div class="card-stacked">
              <div class="card-content">
                <h6><b><?php echo $datos['tit_li'];?></b></h6>
                <p><?php echo $datos['sin_li'];?></p>
              </div>
              <?php $ruta = "Libros/".$datos['isbn_li'].".pdf";
              $isbn = $datos['isbn_li'];
              ?>
              <div class="card-action">
                <form class="col s12 from-register" action="actualizar.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="input-field col l6 s12">
                      <select name="estado">
                        <option value="aceptar">Aceptar</option>
                        <option value="cancelar">Cancelar</option>
                      </select>
                      <label>Estado</label>
                    </div>
                    <div class="input-field col l6 s12">
                      <input type="hidden" name="isbn" value="<?php echo $isbn?>"/>                   
                    </div>
                      <div class="col l6 s12">
                        <a class="waves-effect waves-light btn-small" onclick="window.open('<?php echo($ruta)?>')">LEER LIBRO</a>
                      </div>                      
                      <div class="col l6 s12">
                        <button class="btn waves-effect waves-light" type="submit" name="boton" onclick="confirmar()">Aceptar
                        <i class="material-icons right">send</i>
                      </div>
                  </div>
                </form>









                
              </div>
            </div>
          </div>


          <?php
          }
          ?>
        
      </div>





      <div class="col l3 s12">

      	<h5><b>Escritores con pendientes</b></h5>
      <?php
        include "coneccion.php";
        $sql = "SELECT * FROM escritor";
        $ejecuttar= mysqli_query($conectar,$sql);
        while($datos = mysqli_fetch_array($ejecuttar)) {
      ?>
      
        <ul class="collapsible l12 s12">
          <li>
            <div class="collapsible-header" name="nombre"><i class="material-icons">people_outline</i><?php echo $datos['nom_es']." ".$datos['ape_es']; ?>
            </div>
            <div class="collapsible-body container"><span><?php echo utf8_encode($datos['des_escritor']);?></span><br>
              <form class="col s12 from-register" action="resultadoBusquedaTodoUsu.php" method="post" enctype="multipart/form-data">
                    <div class="input-field col l6 s12">
                      <input type="hidden" name="estado" value="Pendiente"/>  
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
      
      <?php
      }
      ?>     
      
      
    </div>
  </div>    
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