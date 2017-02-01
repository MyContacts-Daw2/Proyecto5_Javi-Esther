<?php
session_start();
// include "iniciar_sesion_proc.php";

if (isset($_SESSION['usu_usuario'])) {
	
	header('location:index.php');
}else{
	 session_write_close();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Registro</title>
	<!-- LIBRERIAS DE LA PÁGINA DE INICIO ORIGINAL DE MYCONTACTS -->
		  	<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <title>MyContacts</title>


		    <!-- FONT AWESOME -->
		    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
		 
		    <!-- CSS de Bootstrap -->
		    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		    <link href="css/style.css?=" rel="stylesheet" media="screen">

		    <!-- Librería jQuery requerida por los plugins de JavaScript -->
		    <script src="http://code.jquery.com/jquery.js"></script>
		 
		    <script src="js/bootstrap.min.js"></script>
		    <script type="text/javascript">

					window.onload = function () {
					document.login.user.focus();
					document.login.addEventListener('submit', validarFormulario);
					}
					 
					function validarFormulario(evObject) {
					evObject.preventDefault();
					var todoCorrecto = true;
					var formulario = document.login;
					for (var i=0; i<formulario.length; i++) {
					                if(formulario[i].type =='text') {
					                               if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
					                               alert (formulario[i].name+ 'Debe rellenar todos los campos del formulario.');
					                               todoCorrecto=false;
					                               }
					                }
					                }
					if (todoCorrecto ==true) {formulario.submit();}
					}
		    	
		    </script>
	
</head>
<body>

<div class="contenedor">
	<div class="page-header col-md-12" style="background-color: white">
	      	<div class="row">
	        		<div class="col-md-1 col-sx-12 text-center">
	          			<img src="img/Logo_letrasSM.jpg" class="image-responsive">
	        		</div>
	        		<div class="col-md-10"> 
	          			<h1 class="text-center">MyContacts <small>siempre a punto <img src="img/punteroNaranja2.jpg"><img src="img/punteroAzul.jpg"></small></h1>
	        		</div>
			</div>  
	</div>
	<div class="modal-body">
              <div class="row">
              	<div class="col-md-4"> </div>
              		<div class="col-md-6">
	                  <div class="col-xs-6">
	                      <div class="well">
	                          <form id="loginForm" method="get" action="registro_proc.php" name="login">
	                              <div class="form-group">
	                              	  <i class="fa fa-user-plus"></i>
	                                  <label for="user" class="control-label">Usuario</label>
	                                  <input type="text" class="form-control" id="user" name="user" value="" required="" title="Introduce tu usuario" placeholder="ejemplo@gmail.com">
	                                  <span class="help-block"></span>
	                              </div>
	                              <div class="form-group">
	                              	  <i class="fa fa-lock"></i>
	                                  <label for="password" class="control-label">Contraseña</label>
	                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Introduce tu contraseña" placeholder="Contraseña">
	                                  <span class="help-block"></span>
	                              </div>
	                             <!--  <div class="form-group">
	                              	  <i class="fa fa-lock"></i>
	                                  <label for="password" class="control-label">Repite Contraseña</label>
	                                  <input type="password" class="form-control" id="password2" name="password2" value="" required="" title="Repite tu contraseña" placeholder="Repite tu contraseña">
	                                  <span class="help-block"></span>
	                                   <input type="submit" id="submit" name="enviar_nuevo_registro" value="Enviar" class="btn btn-info btn-block">
	                                  <span class="help-block"></span>
	                              </div> -->

	                              <div class="form-group">
	                              	  <i class="fa fa-user"></i>
	                                  <label for="name" class="control-label">Nombre</label>
	                                  <input type="text" class="form-control" id="nombre" name="nombre" value="" required="" title="Escribe tu nombre" placeholder="nombre">
	                                  <span class="help-block"></span>
	                              </div>

	                               <div class="form-group">
	                              	  <i class="fa fa-user"></i>
	                                  <label for="apellido1" class="control-label">Apellido1</label>
	                                  <input type="text" class="form-control" id="apellido1" name="apellido1" value="" required="" title="Escribe tu primer apellido" placeholder="primer apellido">
	                                  <span class="help-block"></span>
	                              </div>

	                               <div class="form-group">
	                              	  <i class="fa fa-user"></i>
	                                  <label for="apellido2" class="control-label">Apellido2</label>
	                                  <input type="text" class="form-control" id="apellido2" name="apellido2" value="" required="" title="Escribe apellido2" placeholder="Apellido2">
	                                  <span class="help-block"></span>
	                              </div>

	                              <div class="form-group">
	                              	  <i class="fa fa-address-card-o"></i>
	                                  <label for="direccion" class="control-label">Direccion</label>
	                                  <input type="text" class="form-control" id="direccion" name="direccion" value="" required="" title="Escribe tu direccion" placeholder="direccion">
	                                  <span class="help-block"></span>
	                              </div>

	                              <div class="form-group">
	                              	  <i class="fa fa-picture-o"></i>
	                                  <label for="foto" class="control-label">Foto</label>
	                                  <input type="text" class="form-control" id="foto" name="foto" value="" required="" title="Sube tu fot " placeholder="BETA en breve podrás colgar tu fotografía">
	                                  <span class="help-block"></span>
	                                   <input type="submit" id="submit" name="enviar_nuevo_registro" value="Enviar" class="btn btn-info btn-block">
	                                  <span class="help-block"></span>
	                              </div>

	                 	      </form>
	                 	      <p class="texto_registro">
	                 	      	¿Ya estás registrado?
	                 	      	<a href="login.php">¿A qué esperas? Inicia tu sesión</a>
	                 	      </p>
	                      </div>
	                  </div>
	                </div>
	           </div>
	</div>
</body>
</html>