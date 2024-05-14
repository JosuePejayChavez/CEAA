<?php

// Verificar si el usuario tiene una sesión activa
if(isset($_SESSION['user_id'])) {
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "ceaa_db";

    // Crear conexión
    $conn = new mysqli($servidor, $usuario, $contrasena, $basedatos);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener el nombre de usuario actual desde la sesión
    $nombre_usuario = $_SESSION['user_id'];

    // Consultar si el usuario tiene un folio en la base de datos
    $sql = "SELECT folio FROM agua_planeta WHERE id = '$nombre_usuario'";
    $result = $conn->query($sql);

    // Verificar si se encontró un folio para el usuario
    $folio_encontrado = $result->num_rows > 0;

    // Cerrar la conexión
    $conn->close();
} else {
    // Si el usuario no tiene una sesión activa, inicializar la variable $folio_encontrado como false
    $folio_encontrado = false;
}
?>
