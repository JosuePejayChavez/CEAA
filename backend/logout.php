<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirecciona al inicio de sesión
header('Location: ../inicio_sesion.php');
exit();
?>
