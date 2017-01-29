<?php
	include "includes/conexion_bd.php";

	extract($_REQUEST);
		
		if (isset($submit)) {
			//echo "dos";
			$sql_select_usuario ="SELECT * FROM tbl_usuario WHERE usu_nombre ='".$user."' and usu_pwd =".$password;
			

			

			$usuario = mysqli_query($conexion, $sql_select_usuario);

			if (mysqli_num_rows($usuario)>0) {
				echo $_SESSION['username'] = $user;
				//header('location:index.php');
			}else{
				$result="error";
			}
		}



	//echo $categoria;

	//print_r($producto);

	 //print_r($array);



?>