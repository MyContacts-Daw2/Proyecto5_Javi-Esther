<?php
session_start();
include "iniciar_sesion_proc.php";

if (isset($_SESSION['username'])) {
	
	header('location:index.php');
}else{
	 session_write_close();
}

?>

<!DOCTYPE html>
<html es>
	<head>
		<meta charset="UTF-8">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

		<!-- JQUERY -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<title>PRODUCTOS</title>
 <?php
 if (isset($result)) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				document.getElementById("spanvisible").style.visibility = 'visible';
			})
		</script>
<?php
}

 ?>
	</head>
	<body>
		<div class="contenedor">
			<div class="titulo">
				<h1>MY CONTACT (logo)</h1>
				<h4 style="color:grey; margin-top: -20px;">Tenemos<span style="color: orange;"> todo </span>lo que necesitas</h4>
			</div>
			<div class="login form_wrapper">
				<form action="" method="get">
					<div class="oscuro">
						<h3 style="padding-top: 15px;">Inicio de Sesión:</h3>
					</div>
					<div class="login-blanco">
						<label>Usuario:</label>
						<input type="text" name="user" size="30">
						<label>Contraseña:</label>
						<input type="password" name="password" size="30">
						<label><span id="spanvisible" style="color: orange; font-size: 20px; visibility: hidden;">Usuario o contraseña errónea</span></label>
					</div>
					<div class="oscuro">
						<input type="submit" id="submit" name="submit" value="Enviar" style="margin-top: 15px;">
					</div>
				</form>
				
			</div>
		</div>
		

	</body>
	
</html>