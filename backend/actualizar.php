<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: ../inicio_sesion.php');
    exit();
}

// Incluye tu archivo de conexión
include('conexion.php');

// Obtiene el ID del usuario desde la sesión
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe y sanitiza los datos del formulario
    $password_nueva = $_POST['password'];
    $conf_pass = $_POST['conf_pass'];
    $nombre = $_POST['nombre'];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $ap_p = $_POST['ap_p'];
    $ap_p = filter_var($ap_p, FILTER_SANITIZE_STRING);
    $ap_m = $_POST['ap_m'];
    $ap_m = filter_var($ap_m, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $edad = $_POST['edad'];
    $edad = filter_var($edad, FILTER_SANITIZE_STRING);
    $telefono = $_POST['telefono'];
    $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
    $domicilio = $_POST['domicilio'];
    $domicilio = filter_var($domicilio, FILTER_SANITIZE_STRING);
    $dependencia = $_POST['dependencia'];
    $dependencia = filter_var($dependencia, FILTER_SANITIZE_STRING);
    $cargo = $_POST['cargo'];
    $cargo = filter_var($cargo, FILTER_SANITIZE_STRING);
    $profesion = $_POST['profesion'];
    $profesion = filter_var($profesion, FILTER_SANITIZE_STRING);

    if (preg_match('/[0-9]/', $nombre)) {
        $campo = "nombre";
    } elseif (preg_match('/[0-9]/', $ap_p)) {
        $campo = "apellido paterno";
    } elseif (preg_match('/[0-9]/', $ap_m)) {
        $campo = "apellido materno";
    } elseif (preg_match('/[0-9]/', $domicilio)) {
        $campo = "domicilio";
    } elseif (preg_match('/[0-9]/', $dependencia)) {
        $campo = "dependencia";
    } elseif (preg_match('/[0-9]/', $cargo)) {
        $campo = "cargo";
    } elseif (preg_match('/[0-9]/', $profesion)) {
        $campo = "profesión";
    }
    
    if (isset($campo)) {
        echo '<script>alert("El campo ' . $campo . ' no debe contener números.");</script>';
        echo '<script>window.location.href = "../actualizar.php";</script>';
        exit();
    }

    // Verifica que las contraseñas coincidan
    if ($password_nueva !== $conf_pass) {
        $_SESSION['update_error'] = "Las contraseñas no coinciden.";
        header("location: ../actualizar.php");
        exit();
    }

    // Hashea y actualiza la nueva contraseña
    $hashed_password = password_hash($password_nueva, PASSWORD_DEFAULT);
    $update_query = "UPDATE usuarios SET password = '$hashed_password', nombre = '$nombre', ap_p = '$ap_p' WHERE id = '$user_id'";
    // Agrega aquí los otros campos en el query de actualización

    $update_result = mysqli_query($conexion, $update_query);

    if ($update_result) {
        // Actualización exitosa
        header("location: ../cursos_registrado.php");
        exit();
    } else {
        // Manejo de errores en la actualización
        echo "Error en la actualización: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>