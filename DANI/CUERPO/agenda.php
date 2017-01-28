<?php
	include "includes/conexion_bd.php";




echo "hola";


	//---- SQL INSERTAR PERSONA EN LA AGENDA:

$sql_select_agenda ="SELECT * FROM tbl_perfil";

	//print_r($sql_insert_usuario);


$resultado = mysqli_query($conexion, $sql_select_agenda);


while($row = mysqli_fetch_array($resultado)) 
{ 
    $id=$row['id'];
    $nombre=$row['nombre'];
    $edad=$row['edad'];
    $genero=$row['genero'];
    $email=$row['email'];
    $localidad=$row['localidad'];
    $telefono=$row['telefono'];
    

    $clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'edad'=> $edad, 'genero'=> $genero,
                        'email'=> $email, 'localidad'=> $localidad, 'telefono'=> $telefono);

}


echo json_encode($producto);

	



?>