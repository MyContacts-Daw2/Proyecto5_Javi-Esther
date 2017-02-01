<?php


	include "includes/conexion_bd.php";

	extract($_REQUEST);
		$_SESSION['error']="";
		
		if (isset($enviar_login)) {
			$sql_select_usuario ="SELECT * FROM tbl_usuario WHERE usu_usuario ='".$user."' and usu_password ='".$password."'";
			

			$usuario = mysqli_query($conexion, $sql_select_usuario);

			//var_dump($sql_select_usuario);

			if (mysqli_num_rows($usuario)>0) {
				//echo '1';
			$datos_usuario = mysqli_fetch_array($usuario);

			//echo $datos_usuario['usu_usuario'] = $usu;
			//echo  = $usu;

			echo $_SESSION['usu_usuario'] = $datos_usuario['usu_usuario'] ;
			echo $_SESSION['usu_id'] = $datos_usuario['usu_id'] ;
			echo $_SESSION['usu_nombre'] = $datos_usuario['usu_nombre']; 
			echo $_SESSION['usu_apellido1'] = $datos_usuario['usu_apellido1']; 
			echo $_SESSION['usu_apellido2'] = $datos_usuario['usu_apellido2'];  
			echo $_SESSION['usu_direc1'] = $datos_usuario['usu_direc1'];  
	
		

				
			}else{
				$_SESSION['error']="Usuario o password incorrecto";
			}
	}

?>