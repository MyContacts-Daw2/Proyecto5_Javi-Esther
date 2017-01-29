<?php
session_start();

if (!isset($_SESSION['username'])) {
 	header('location:login.php');
}

//include "categoria_select_proc.php";
//include "productos_select_proc.php";
include "productos_buscar_proc.php";
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

		<script type="text/javascript">
		    function showContentPrecio() {
		        check = document.getElementById("preON");
		        if (check.checked) {
		        	document.getElementById("precioInputId").disabled = false;
		        	document.getElementById("precioOutputId").style.display = 'block';
		        }
		        else {
		            document.getElementById("precioInputId").disabled = true;
		        	document.getElementById("precioOutputId").style.display = 'none';
		        }
		    }
		    function showContentEstock() {
		        check = document.getElementById("esON");
		        if (check.checked) {
		        	document.getElementById("estockInputId").disabled = false;
		        	document.getElementById("estockOutputId").style.display = 'block';
		        }
		        else {
		            document.getElementById("estockInputId").disabled = true;
		        	document.getElementById("estockOutputId").style.display = 'none';
		        }
		    }
		</script>
 	
	</head>
		<header>
			<div class="wrapper">
				<div class="logo">El rincón del mueble</div>
				<nav>
					<!-- <a href="#">Productos</a>
					<a href="#">Secciones</a> -->
					<a href="cerrar_sesion_proc.php">Salir</a>
				</nav>
			</div>
		</header>

	<body>
		<div class="contenedor">
			<div class="columna">
				<div class="buscador">
				<form action="" method="post">
					<h3>BUSCA LO QUE NECESITAS</h3>
					<hr>
					<div>
						NOMBRE DEL PRODUCTO:
					</div>
					<div class="busqueda">
						<input type="text" name="nombre" size="30">
					</div>
					
					<div>
						CATEGORIA:
					</div>
					<div class="busqueda">
					<select name="categoria" style="width:220px; height: 20px;">
					  	<option value="" selected disabled>Categoría</option>
<?php

    while($row = mysqli_fetch_array($categoria))
    {
       echo  "<option value=".$row["categoria_id"].">".$row["categoria_nom"]."</option>";
    }
?>
					</select>
					</div>
					<div>
						PRECIO: 
					</div>
					<div class="busqueda">
						<input type="checkbox" name="check" id="preON" value="1" onchange="javascript:showContentPrecio()" style="width: 5%" />
						<input type="range" name="precio" id="precioInputId" min="0" value="null" max="1000" step="10" oninput="precioOutputId.value = precioInputId.value" disabled="true" style="width: 60%">
    					<output name="precioOutputName" id="precioOutputId" style="display: none;">500</output>
    				</div>
    				<div>
						ESTOCK: 
					</div>
					<div class="busqueda">
						<input type="checkbox" name="check" id="esON" value="1" onchange="javascript:showContentEstock()" style="width: 5%"/ >
						<input type="range" name="estock" id="estockInputId" min="0" max="1000" step="10" oninput="estockOutputId.value = estockInputId.value" disabled="true" style="width: 60%">
    					<output name="estockOutputName" id="estockOutputId" style="display: none;">500</output>
    				</div>
    				<div class="submit">
    					<hr class="hr">
    					<input type="submit" id="submit" name="submit" value="Enviar">
    				</div>
   					
				</form>
				</div>
			</div>
			<div class="contenido">
<?php

	if (mysqli_num_rows($producto)>0) {
    	while($row = mysqli_fetch_array($producto)){

?>
			<div class="resultado">      			
       			<div class="img">
       				<img src="img/<?php echo $row["prod_foto"];?>ico.jpg"></img>
       			</div>
       			<div>
       				<H3><?php echo $row["prod_nom"];?></H3>
       				<hr>
       				<div class="categoria">
       					<h4>Categoría: <?php echo $row["categoria_nom"];?></h4>
       				</div>
       				<div class="estock">
       					<h4>Estock: <?php echo $row["estoc_q_actual"];?> uds.</h4>
       				</div>
       				<div class="precio">
       					<h4>Precio: <?php echo $row["prod_precio"];?> Euros</h4>
       				</div>
       			</div>
       		</div>
<?php
    	}
    }else{
?>    		
			<div class="resultado">
				<h2>NO SE ENCONTRARON RESULTADOS</h2>
			</div>

<?php
    }
?>
			</div>
			<div class="footer">
				
			</div>
		</div>
		

	</body>
	
</html>