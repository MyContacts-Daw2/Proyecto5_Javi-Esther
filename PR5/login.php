<?php
session_start();

// include "includes/conexion_bd.php";
include "iniciar_sesion_proc.php";

if (isset($_SESSION['usu_usuario'])) {
	
	header('location:index.php');
}else{
	 session_write_close();
}

?>


<!DOCTYPE html>
<html lang="es">
	<head>

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
					document.registroForm.user.focus();
					document.registroForm.addEventListener('submit', validarFormulario);
					}
					 
					function validarFormulario(e) {
						//alert(1);
						e.preventDefault();
						var todoCorrecto = true;
						var formulario = document.registroForm;
							for (var i=0; i<formulario.length; i++) {
						        if(formulario[i].type =='text') {
//						            if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
						            if (formulario[i].value == null || formulario[i].value.length == 0){
						              	alert ('Revise que en el campo ' +formulario[i].name+ ' haya introducido correctamente los datos.');
						                               todoCorrecto = false;
						            }
						        }
						    }
						if (todoCorrecto) {
							//formulario.unbind('submit').submit();
							
							formulario.submit();
						}
					}
		    	
		    </script>
	
	</head>
	<body>
		<?php
			if(!empty($_SESSION['error'])){
				echo '<script languaje="JavaScript">alert("Verifica el Usuario o la Contraseña");</script>';
			}

		 ?>
		<div class="contenedor">
		<!-- INICIO HEADER DE LA PAGINA -->
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
    	<!-- FIN HEADER DE LA PÁGINA -->
		<!-- INICIO CUERPO DE LA PÁGINA -->
			<div class="modal-body">
              	<div class="row">
              		<div class="col-md-3"> 
              		</div>
              		<div class="col-md-6">
		                <div class="col-xs-6">
		                    <div class="well">
		                        <form id="loginForm" method="get" action="">
		                              <div class="form-group">
		                                  <label for="user" class="control-label">Usuario</label>
		                                  <input type="text" class="form-control" id="user" name="user" value="" required="" title="Introduce tu usuario" placeholder="ejemplo@gmail.com">
		                                  <span class="help-block"></span>
		                              </div>
		                              <div class="form-group">
		                                  <label for="password" class="control-label">Contraseña</label>
		                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Introduce tu contraseña">
		                                  <span class="help-block"></span>
		                              </div>
		                              <div id="spanvisible" class="alert alert-error hide">Usuario o contraseña incorrectos</div>
		                              <div class="checkbox">
		                                  <label>
		                                      <input type="checkbox" name="remember" id="remember"> Recuérdame
		                                  </label>
		                                  <a class="help-block" href="" data-toggle="modal" data-target="#notaProfe">(La opción RECUÉRDAME es sólo una beta, esperemos que esté operativo en breve)</a>
		                              </div>
		                              <!-- INICIO VENTANA MODAL #notaProfe-->
		                <div class="modal fade" id="notaProfe" role="dialog">
	   						<div class="modal-dialog modal-lg">
	      						<div class="modal-content">
	        						<div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <img src="img/Logo_letrasSM.jpg" class="image-responsive">
								          <div class="col-md-10"> 
						          			<h1 class="text-center">Nota para los profesores: <small>Sabemos que para desarrollar esta opción tenemos que utilizar las cookies, así que de momento no hemos podido implementarlo</small></h1>
						        		  </div>
								    </div>
	      						</div>
	       					</div>
	  					</div>
	  					<!-- FIN VENTANA MODAL #notaProfe -->




		                              <input type="submit" id="submit" name="enviar_login" value="Enviar" class="btn btn-info btn-block">
	                          	</form>
		                    </div>
		                </div>
		                <div class="col-xs-6">
		                <br>
		                    <p class="lead">Registrarse es <span class="text-success">GRATIS</span></p>
		                    <ul class="list-unstyled" style="line-height: 2">
		                        <li><span class="fa fa-check text-success"></span> Guarda todos tus contactos</li>
		                        <li><span class="fa fa-check text-success"></span> Localiza a tus contactos en el mapa</li>
		                        <li><span class="fa fa-check text-success"></span> Modifica tus contactos</li>
		                        <li><span class="fa fa-check text-success"></span> Establece rutas desde tu situación hasta la dirección de tus contactos</li>
		                        <li><a href="" data-toggle="modal" data-target="#readMore"><u>Seguir leyendo</u></a></li>
		                    </ul>

		                <!-- INICIO VENTANA MODAL #readMORE-->
		                <div class="modal fade" id="readMore" role="dialog">
	   						<div class="modal-dialog modal-lg">
	      						<div class="modal-content">
	        						<div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <img src="img/Logo_letrasSM.jpg" class="image-responsive">
								          <div class="col-md-10"> 
						          			<h1 class="text-center">MyContacts <small>siempre a punto <img src="img/punteroNaranja2.jpg"><img src="img/punteroAzul.jpg"></small></h1>
						        		  </div>
								    </div>
	        						<div class="modal-body">
								          <p>Aquí iría la explicación de la página, pero en este caso hemos querido justificar el cambio de ubicación del logo en esta ventana. Después de una reunión con la dirección, se decidió que en este caso el logo se situaría a la derecha para duplicar el efecto del mismo. De esta forma podemos verlo en la parte izquierda de la ventana principal y en ésta en la parte derecha. Nos encontramos así, rodeados por nuestro logo, duplicamos el efecto publicitario del mismo.</p>
								          <div class="caja">
								            <iframe class="col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.1179376121263!2d2.1055016151933397!3d41.3497902062884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498d64bd023fd%3A0x26089fc39cb352a3!2sJesu%C3%AFtes+Bellvitge.+Centre+d&#39;Estudis+Joan+XXIII!5e0!3m2!1ses!2ses!4v1485446539541" height="450" frameborder="0" style="border:4" allowfullscreen></iframe>
								          </div>

								          <p>Phasellus tempus et neque et imperdiet. Nullam at mi lobortis leo tempor tempor. Integer ut congue augue, ac feugiat felis. Nam rutrum turpis rhoncus consectetur sagittis. Suspendisse risus tellus, ullamcorper non faucibus ac, feugiat ut lectus. Vivamus venenatis mollis diam in tincidunt. Suspendisse semper mollis erat a laoreet. Ut blandit volutpat mi id consectetur.</p>

								          <p>Morbi faucibus rhoncus egestas. Integer suscipit faucibus sem et venenatis. Maecenas dapibus molestie arcu, eu varius ante interdum eu. Ut malesuada euismod sem, vitae porta odio elementum at. Fusce diam massa, lobortis in semper in, condimentum in quam. Aenean blandit fermentum nibh, sed mattis massa hendrerit in. Vivamus nec dictum sapien. Pellentesque aliquet blandit tempor.</p>
								    </div>
	      						</div>
	       					</div>
	  					</div>
	  					<!-- FIN VENTANA MODAL #readMORE -->

		                    <p><a href="" class="btn btn-info btn-block" data-toggle="modal" data-target="#modalRegistro">Quiero registrarme ahora!</a></p>
						<!-- INICIO VENTANA MODAL #modalRegistro -->
		                <div class="modal fade" id="modalRegistro" role="text">
	    					<div class="modal-dialog modal-lg">
							    <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Date de alta</h4>
							        </div>
							        <div class="modal-body">
							         	<form id="registroForm" method="get" action="registro_proc.php" name="registroForm">
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
			                                  <label for="apellido1" class="control-label">Primer apellido</label>
			                                  <input type="text" class="form-control" id="apellido1" name="apellido1" value="" required="" title="Escribe tu primer apellido" placeholder="primer apellido">
			                                  <span class="help-block"></span>
			                              	</div>

			                               	<div class="form-group">
			                              	  <i class="fa fa-user"></i>
			                                  <label for="apellido2" class="control-label">Segundo Apellido</label>
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
			                                  <p>Beta. En breve podrás agregar tu foto y la de tus contactos</p>
			                                  <span class="help-block"></span>

			                                   <input type="submit" id="idsubmit" name="enviar_nuevo_registro" value="Enviar" class="btn btn-info btn-block">
			                                  <span class="help-block"></span>
			                              	</div>
						          		</form>
						        	</div>
						     	</div>
						    </div>
						</div>	
				      	</div>  
							                      <!-- final modal -->
					</div>
				</div>
			</div>
		</div>
	</body>	
</html>