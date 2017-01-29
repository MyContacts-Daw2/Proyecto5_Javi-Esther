<?php
	include "includes/conexion_bd.php";


	
	$where="";
	
	extract($_REQUEST);

	if (!empty($nombre)){
		$where.="WHERE tbl_producte.prod_nom LIKE '%".$nombre."%'";
	}
	if (!empty($categoria)){
		if($where==""){
			$where.="WHERE tbl_producte.categoria_id=".$categoria."";
		}else{
			$where.=" and tbl_producte.categoria_id=".$categoria."";
		}
	}
	if (!empty($precio)){
		if($where==""){
			$where.="WHERE tbl_producte.prod_precio<=".$precio."";
		}else{
			$where.=" and tbl_producte.prod_precio<=".$precio."";
		}
	}
	if (!empty($estock)){
		if($where==""){
			$where.="WHERE tbl_estoc.estoc_q_actual<=".$estock."";
		}else{
			$where.=" and tbl_estoc.estoc_q_actual<=".$estock."";
		}
	}

	

		$sql_select_producto ="SELECT tbl_categoria.categoria_nom, tbl_producte.prod_foto, tbl_producte.prod_nom, tbl_estoc.estoc_q_max, tbl_estoc.estoc_q_min, tbl_estoc.estoc_q_actual, tbl_producte.prod_precio FROM tbl_estoc INNER JOIN tbl_producte ON tbl_estoc.prod_id=tbl_producte.prod_id INNER JOIN tbl_categoria ON tbl_categoria.categoria_id=tbl_producte.categoria_id ".$where."";
		print_r($sql_select_categoria);

		

		$producto = mysqli_query($conexion, $sql_select_producto);


		$sql_select_categoria ="SELECT categoria_id, categoria_nom FROM tbl_categoria ORDER BY categoria_nom ASC";
				

		$categoria = mysqli_query($conexion, $sql_select_categoria);

?>