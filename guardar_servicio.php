<?php

include 'conexiondb.php';

$conexion = conexion_db();

$servicio = $_POST['servicio'];
$ven_1 = $_POST['ven_1'];
$ven_2 = $_POST['ven_2'];
$importe = $_POST['importe'];
$pagado = $_POST['pagado'];

$conexion->query("INSERT INTO servicios (`servicio`, `1er_vto`, `2do_vto`, `importe`, `pagado`) VALUES ( '$servicio' , '$ven_1', '$ven_2', '$importe', '$pagado')");

header('Location:dashboard.php');

?>