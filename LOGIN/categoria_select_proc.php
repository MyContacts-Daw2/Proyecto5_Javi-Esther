<?php
	include "includes/conexion_bd.php";


	$sql_select_categoria ="SELECT categoria_id, categoria_nom FROM tbl_categoria ORDER BY categoria_nom ASC";
	//echo $sql_select_categoria;

			

	$categoria = mysqli_query($conexion, $sql_select_categoria);

	

	

	//print_r($rawdata);

	//echo $categoria;

	//print_r($categoria);

	 //print_r($array);



?>