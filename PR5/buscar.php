<?php
	include "includes/conexion_bd.php";

session_start();

if (!isset($_SESSION['usu_usuario'])) {

  header('location:login.php');
}

$consultaBusqueda = $_REQUEST['valorBusqueda'];

if (isset($consultaBusqueda)) {


}
	
//echo $_SESSION['usu_id'];

// -- "
// SELECT * FROM tbl_perfil WHERE (per_nombre LIKE '%D%'OR per_apellido1 LIKE '%D%'OR per_apellido2 LIKE '%D%' OR CONCAT(per_nombre,' ',per_apellido1,' ',per_apellido2) LIKE '%D%') AND usu_id=1 
$sql_select_agenda ="SELECT * FROM tbl_perfil WHERE (per_nombre LIKE '%".$consultaBusqueda."%'OR per_apellido1 LIKE '%".$consultaBusqueda."%' OR per_apellido2 LIKE '%".$consultaBusqueda."%' OR per_telf1 LIKE '%".$consultaBusqueda."%' OR CONCAT(per_nombre,' ',per_apellido1,' ',per_apellido2) LIKE '%".$consultaBusqueda."%') AND usu_id=".$_SESSION['usu_id']."";


//$sql_select_agenda ="SELECT * FROM tbl_perfil WHERE usu_id=".$_SESSION['usu_id']."";

	//print_r($sql_select_agenda);


$resultado = mysqli_query($conexion, $sql_select_agenda);


while($row = mysqli_fetch_array($resultado)) 
{ 
    $id=$row['per_id'];
    $nombre=$row['per_nombre'];
    $apellidos=$row['per_apellido1']." ".$row['per_apellido2'];
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
    

    $clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'apellidos'=> $apellidos, 'email'=> $email,
                        'tel1'=> $tel1, 'tel2'=> $tel2, 'direccion1'=> $direccion1, 'cp1'=> $cp1, 'coord1'=> $coord1, 'direccion2'=> $direccion2, 'cp2'=> $cp2, 'coord2'=> $coord2, 'foto'=> $foto, 'comentario'=> $comentario);

}


echo json_encode($clientes);


	



?>