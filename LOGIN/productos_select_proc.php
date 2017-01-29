<?php
	include "includes/conexion_bd.php";


	$sql_select_producto ="SELECT tbl_categoria.categoria_nom, tbl_producte.prod_foto, tbl_producte.prod_nom, tbl_estoc.estoc_q_max, tbl_estoc.estoc_q_min, tbl_estoc.estoc_q_actual, tbl_producte.prod_precio FROM tbl_estoc INNER JOIN tbl_producte ON tbl_estoc.prod_id=tbl_producte.prod_id INNER JOIN tbl_categoria ON tbl_categoria.categoria_id=tbl_producte.categoria_id ";
	//echo $sql_select_categoria;

			

	$producto = mysqli_query($conexion, $sql_select_producto);

	

	

	//print_r($rawdata);

	//echo $categoria;

	//print_r($producto);

	 //print_r($array);



?>