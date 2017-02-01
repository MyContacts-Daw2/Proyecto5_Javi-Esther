<?php
	include "includes/conexion_bd.php";

extract($_REQUEST);

	//---- SQL INSERTAR PERSONA EN LA AGENDA:

$sql_delete_agenda ="DELETE FROM tbl_perfil WHERE per_id = '".$per_id."'";



$resultado = mysqli_query($conexion, $sql_delete_agenda);


// while($row = mysqli_fetch_array($resultado)) 
// { 
//     $id=$row['per_id'];
//     $nombre=$row['per_nombre'];
//     $apellidos=$row['per_apellido1']." ".$row['per_apellido2'];
//     $email=$row['per_email'];
//     $tel1=$row['per_telf1'];
//     $tel2=$row['per_telf2'];
//     $direccion1=$row['per_direc1'];
//     $cp1=$row['per_cp1'];
//     $coord1=$row['per_coord1'];
//     $direccion2=$row['per_direc2'];
//     $cp2=$row['per_cp2'];
//     $coord2=$row['per_coord2'];
//     $comentario=$row['per_coment'];
//     $foto=$row['per_foto'];
    

//     $clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'apellidos'=> $apellidos, 'email'=> $email,
//                         'tel1'=> $tel1, 'tel2'=> $tel2, 'direccion1'=> $direccion1, 'cp1'=> $cp1, 'coord1'=> $coord1, 'direccion2'=> $direccion2, 'cp2'=> $cp2, 'coord2'=> $coord2, 'foto'=> $foto, 'comentario'=> $comentario);

// }

$clientes="hecho";

echo json_encode($clientes);

	



?>