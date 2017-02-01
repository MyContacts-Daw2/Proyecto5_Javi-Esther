<?php

// session_start();

// 	if(isset($_SESSION['usu_usuario'])){
// 		$_SESSION['error']="Acceso denegado";
// 		header("location: login.php");
// 	}

	include('includes/conexion_bd.php');

	extract($_REQUEST);

	$sql = "SELECT * FROM tbl_usuario WHERE usu_usuario='$user' AND usu_password='$password'";

	$resultado_usuario_existente = mysqli_query($conexion, $sql);

	if(mysqli_num_rows($resultado_usuario_existente)>0){
		echo "Este usuario ya existe";
		// header('location: login.php'); 
	} else {
		
		$sql = "INSERT INTO tbl_usuario (usu_usuario, usu_password, usu_nombre, usu_apellido1, usu_apellido2, usu_direc1, usu_foto) VALUES ('".$user."', '".$password."', '".$nombre."','".$apellido1."','".$apellido2."','".$direccion."','".$foto."')";

//echo "·".$sql."·";
				
		$resultado_insertar = mysqli_query($conexion, $sql);
		header("location: login.php");


	}
?>