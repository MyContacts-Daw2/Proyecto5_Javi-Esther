<?php
session_start();

if (!isset($_SESSION['usu_usuario'])) {

  header('location:login.php');
}

	include "includes/conexion_bd.php";






// INSERT INTO `tbl_perfil` (`per_id`, `per_nombre`, `per_apellido1`, `per_apellido2`, `per_mail`, `per_telf1`, `per_telf2`, `per_direc1`, `per_coord1`, `per_direc2`, `per_coord2`, `per_coment`, `per_foto`, `usu_id`) VALUES (NULL, 'Daniel', 'Vargas', 'Benítez', 'danvabe@hotmail.com', '659083317', '924845041', 'Avinguda de Gaudí 42, Barcelona', 'mis coord', 'Calle Valle del Jerte 4, villanueva de la Serena', 'coord2', 'Vivo contigo.', 'numerodefoto', '25');

	
// if(isset($_REQUEST['insertForm'])){


	extract($_REQUEST);

	if(empty($per_id)){
		$per_id="";
	}
	if(empty($per_nombre)){
		$per_nombre="";
	}
	if(empty($per_apellido1)){
		$per_apellido1="";
	}
	if(empty($per_apellido2)){
		$per_apellido2="";
	}
	if(empty($per_mail)){
		$per_mail="";
	}
	if(empty($per_telf1)){
		$per_telf1="";
	}
	if(empty($per_telf2)){
		$per_telf2="";
	}
	if(empty($per_direc1)){
		$per_direc1="";
	}
	if(empty($per_cp1)){
		$per_cp1="";
	}
	if(empty($per_coord1)){
		$per_coord1="";
	}
	if(empty($per_cp2)){
		$per_cp2="";
	}
	if(empty($per_direc2)){
		$per_direc2="";
	}
	if(empty($per_coord2)){
		$per_coord2="";
	}
	if(empty($per_coment)){
		$per_coord2="";
	}
	if(empty($per_foto)){
		$per_foto="";
	}
	// echo $per_nombre;
	// echo "\n";
	//echo $per_apellido1;
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





	if(!empty($per_id)){
		//echo $per_id;
		$sql_update_usuario ="UPDATE tbl_perfil SET per_nombre = '".$per_nombre."',per_apellido1 = '".$per_apellido1."',per_apellido2 = '".$per_apellido2."',per_mail = '".$per_mail."',per_telf1 = '".$per_telf1."',per_telf2 = '".$per_telf2."',per_direc1 = \"".$per_direc1."\",per_cp1 = '".$per_cp1."',per_coord2 = '".$per_coord2."',per_coment = '".$per_coment."',usu_id = '".$_SESSION['usu_id']."'  WHERE per_id = '".$per_id."'";


		print_r($sql_update_usuario);


		$producto = mysqli_query($conexion, $sql_update_usuario);

	}else{

	
	// echo $per_nombre;
	// echo "\n";
	//echo $per_apellido1;
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

$sql_insert_usuario ="INSERT INTO tbl_perfil (per_nombre, per_apellido1, per_apellido2, per_mail, per_telf1, per_telf2, per_direc1, per_cp1, per_coord1, per_direc2, per_cp2, per_coord2, per_coment, per_foto, usu_id) VALUES ('".$per_nombre."','".$per_apellido1."', '".$per_apellido2."', '".$per_mail."', '".$per_telf1."', '".$per_telf2."', '".$per_direc1."', '".$per_cp1."', '".$per_coord1."', '".$per_direc2."', '".$per_cp1."', '".$per_coord2."', '".$per_coment."', '".$per_foto."', '".$_SESSION['usu_id']."')";

	//print_r($sql_insert_usuario);


$producto = mysqli_query($conexion, $sql_insert_usuario);
}
$data="";
$data="Usuario añadido correctamente";
echo $data;

?>