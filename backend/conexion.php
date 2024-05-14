<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "ceaa_db";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

mysqli_set_charset($conexion, "utf8");
?>