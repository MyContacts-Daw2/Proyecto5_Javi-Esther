<?php
	include "includes/conexion_bd.php";






// INSERT INTO `tbl_perfil` (`per_id`, `per_nombre`, `per_apellido1`, `per_apellido2`, `per_mail`, `per_telf1`, `per_telf2`, `per_direc1`, `per_coord1`, `per_direc2`, `per_coord2`, `per_coment`, `per_foto`, `usu_id`) VALUES (NULL, 'Daniel', 'Vargas', 'Benítez', 'danvabe@hotmail.com', '659083317', '924845041', 'Avinguda de Gaudí 42, Barcelona', 'mis coord', 'Calle Valle del Jerte 4, villanueva de la Serena', 'coord2', 'Vivo contigo.', 'numerodefoto', '25');

	
// if(isset($_REQUEST['insertForm'])){


	extract($_REQUEST);

	// echo $per_nombre;
	// echo "\n";
	// echo $per_apellido1;
	// echo "\n";
	// echo $per_apellido2;
	// echo "\n";
	// echo $per_mail;
	// echo "\n";
	// echo $per_telf1;
	// echo "\n";
	// echo $per_telf2;
	// echo "\n";
	// echo $per_direc1;
	// echo "\n";
	// echo $per_cp1;
	// echo "\n";
	// echo $per_coord1;
	// echo "\n";
	// echo $per_cp2;
	// echo "\n";
	// echo $per_direc2;
	// echo "\n";
	// echo $per_coord2;
	// echo "\n";
	// echo $per_coment;
	// echo "\n";
	// echo $usu_id;
	// echo "\n";
	// echo $per_foto;


	//---- SQL INSERTAR PERSONA EN LA AGENDA:

// $sql_editar_usuario ="SELECT * FROM tbl_perfil WHERE per_id='".$per_id."'";
$sql_editar_usuario ="SELECT * FROM tbl_perfil WHERE per_id=".$per_id."";

	//print_r($sql_insert_usuario);


$producto = mysqli_query($conexion, $sql_editar_usuario);

// print_r(row=mysqli_fetch_array($producto));
while($row = mysqli_fetch_array($producto)){
	$id=$row['per_id'];
    $nombre=$row['per_nombre'];
    $apellido1=$row['per_apellido1'];
    $apellido2=$row['per_apellido2'];
    $email=$row['per_email'];
    $tel1=$row['per_telf1'];
    $tel2=$row['per_telf2'];
    $direccion1=$row['per_direc1'];
    $cp1=$row['per_cp1'];
    $coord1=$row['per_coord1'];
    $direccion2=$row['per_direc2'];
    $cp2=$row['per_cp2'];
    $coord2=$row['per_coord2'];
    $comentario=$row['per_coment'];
    $foto=$row['per_foto'];

    $clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'apellido1'=> $apellido1, 'apellido2'=> $apellido2, 'email'=> $email,'tel1'=> $tel1, 'tel2'=> $tel2, 'direccion1'=> $direccion1, 'cp1'=> $cp1, 'coord1'=> $coord1, 'direccion2'=> $direccion2, 'cp2'=> $cp2, 'coord2'=> $coord2, 'foto'=> $foto, 'comentario'=> $comentario);


} 

echo json_encode($clientes);



	

	// if (!empty($nombre)){
	// 	$where.="WHERE tbl_producte.prod_nom LIKE '%".$nombre."%'";
	// }
	// if (!empty($categoria)){
	// 	if($where==""){
	// 		$where.="WHERE tbl_producte.categoria_id=".$categoria."";
	// 	}else{
	// 		$where.=" and tbl_producte.categoria_id=".$categoria."";
	// 	}
	// }
	// if (!empty($precio)){
	// 	if($where==""){
	// 		$where.="WHERE tbl_producte.prod_precio<=".$precio."";
	// 	}else{
	// 		$where.=" and tbl_producte.prod_precio<=".$precio."";
	// 	}
	// }
	// if (!empty($estock)){
	// 	if($where==""){
	// 		$where.="WHERE tbl_estoc.estoc_q_actual<=".$estock."";
	// 	}else{
	// 		$where.=" and tbl_estoc.estoc_q_actual<=".$estock."";
	// 	}
	// }

	

	// 	$sql_select_producto ="SELECT tbl_categoria.categoria_nom, tbl_producte.prod_foto, tbl_producte.prod_nom, tbl_estoc.estoc_q_max, tbl_estoc.estoc_q_min, tbl_estoc.estoc_q_actual, tbl_producte.prod_precio FROM tbl_estoc INNER JOIN tbl_producte ON tbl_estoc.prod_id=tbl_producte.prod_id INNER JOIN tbl_categoria ON tbl_categoria.categoria_id=tbl_producte.categoria_id ".$where."";
	// 	print_r($sql_select_categoria);

		

	// 	$producto = mysqli_query($conexion, $sql_select_producto);


	// 	$sql_select_categoria ="SELECT categoria_id, categoria_nom FROM tbl_categoria ORDER BY categoria_nom ASC";
				

		//$categoria = mysqli_query($conexion, $sql_select_categoria);

// }
//$data="Usuario añadido correctamente";

//echo $producto;

?>