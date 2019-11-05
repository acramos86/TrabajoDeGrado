<?php
	session_start();

	if ($_SESSION['rol'] != null && $_SESSION['rol'] == 'escritor'){

	}else{
				header("location:index.php");

	}
	
?>	
<script type="text/javascript" language="JavaScript">
	function confirmar11(){
		var a = confirm('Esta seguro de cargar la informacion en el sistema, desea continuar?');
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
		    <a href="<?php echo $_SESSION['inicio'];?>" class="breadcrumb">INICIO</a>
        	<a class="brand-logo breadcrumb">Subir nuevo libro</a>
		    <a href="#" data-target="nav-mobile1" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">
		    	<li class="left-align black-text"><b>Bienvenido <?php echo $_SESSION['nombre'];?></b></li>
		      <li><a href="buscarLibro.php">LIBROS</a></li>
		      <li><a href="buscarLibro.php">ESCRITORES</a></li>
		      <li><a class="dropdown-trigger" href="#!" data-target="dropdown">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="waves-effect waves-light btn-small" href="cerrarSession.php">CERRAR SESION</a></li>
		    </ul>
		  </div>
		</nav>
		   	<ul id="nav-mobile1" class="sidenav">
		   		<li class="left-align black-text"><b>Bienvenido <?php echo $_SESSION['nombre'];?></b></li>
		        <li><a href="buscarLibro.php">LIBROS</a></li>
		        <li><a href="buscarLibro.php">ESCRITORES</a></li>
		        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">PERFIL<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="waves-effect waves-light btn-small" href="cerrarSession.php">CERRAR SESION</a></li>
		     </ul>
		 </div>
	</header>

  <div class="row"><!-- formulario -->
	    <form name="formulario" class="col s12 from-register" action="conectSubir.php" method="post" enctype="multipart/form-data">
	    	<h4>Subir el libro</h4>
	      <div class="row">
	        <div class="input-field col l6 s12">
            <input class="validate" REQUIRED name="isbn" id="isbn" type="text" data-length="13" maxlength="13">
            <label for="isbn">isbn</label>
          </div>        
	        <div class="input-field col l6 s12">
	          <input class="validate" REQUIRED name="titulo" id="titulo" type="text" class="validate">
	          <label for="titulo">titulo</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col l6 s12">
	          <select name="genero">
			      <option value="Cancion">Cancion</option>
			      <option value="Elegia">Elegia</option>
			      <option value="Oda">Oda</option>
			      <option value="Satira">Satira</option>
			      <option value="Novela">Novela</option>
			      <option value="Cuento">Cuento</option>
			      <option value="Poema">Poema</option>
			      <option value="Romance">Romance</option>
			      <option value="Comedia">Comedia</option>
			      <option value="Romance">Romance</option>
			      <option value="Drama">Drama</option>
			      <option value="Tragedia">Tragedia</option>
			      <option value="Ciencia Ficcion">Ciencia Ficcion</option>
			    </select>
			    <label>Estado del libro</label>
	        </div>
	        <div class="input-field col l6 s12">
	          <input REQUIRED id="paginas" name="paginas" type="number" min="1" class="validate">
	          <label for="paginas">paginas</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col l6 s12">
			    <select name="estado">
			      <option value="Pendiente">Pendiente</option>
			    </select>
			    <label>Estado del libro</label>
			  </div>
				  <div class="input-field col l6 s12">
		          <input id="sinopsis" name="sinopsis" type="text" class="validate">
		          <label for="sinopsis">sinopsis</label>
		        </div>	        
		    
		    <div class="row">
		    <div class="file-field input-field col l6 s 12">
			    <div class="file-field input-field">
			      <div class="btn">
			        <span>File</span>
			        <input REQUIRED type="file" name="archivo">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" type="text">
			      </div>
			    </div>  
		    </div>	        
	        <div class="file-field input-field col l6 s 12">
		      <button class="btn waves-effect waves-light" type="submit" name="boton" onclick="confirmar()" >Subir
			    <i class="material-icons right">send</i>
			  </button>
		    </div>		    
		    </div>
	      </div>
	      </div>
	    </form>
	  </div>

	   

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
	    $(".dropdown-trigger").dropdown();
		$('input#input_text, textarea#textarea2').characterCounter();
		$('select').formSelect();-->
</body>
</html>