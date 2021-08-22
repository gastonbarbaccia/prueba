<?php 

include 'conexiondb.php';

$conexion = conexion_db();

$id_servicio = $_POST['id_servicio'];
$servicio = $_POST['servicio'];
$ven_1 = $_POST['ven_1'];
$ven_2 = $_POST['ven_2'];
$importe = $_POST['importe'];
$pagado = $_POST['pagado'];


$registros = $conexion->query("UPDATE servicios SET servicio = '$servicio' , 1er_vto = '$ven_1', 2do_vto = '$ven_2', importe = '$importe' , pagado = '$pagado' WHERE id = '$id_servicio' ");

/*
echo $id_servicio;
echo $servicio;
echo $ven_1;
echo $ven_2;
echo $importe;
echo $pagado;
*/

header('Location: dashboard.php');


?>