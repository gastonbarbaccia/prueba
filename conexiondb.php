<?php

function conexion_db(){

$basededatos = "dashhtml";
$usuario = "root" ;
$contrasena = "";
$conexion = "localhost";

$cadena_conexion = new mysqli($conexion,$usuario,$contrasena,$basededatos);

return $cadena_conexion;

}



?>