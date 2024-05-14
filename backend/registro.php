<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

$ap_p = $_POST['ap_p'];
$ap_p = filter_var($ap_p, FILTER_SANITIZE_STRING);

$ap_m = $_POST['ap_m'];
$ap_m = filter_var($ap_m, FILTER_SANITIZE_STRING);

$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);

$edad = $_POST['edad'];
$edad = filter_var($edad, FILTER_VALIDATE_INT);

if ($edad === false || $edad < 18 || $edad > 99) {
    echo '<script>alert("La edad ingresada no es válida.");</script>';
    echo '<script>window.location.href = "../registro.php";</script>';
    exit();
}

$telefono = $_POST['telefono'];
$telefono = filter_var($telefono, FILTER_SANITIZE_STRING);

if (strlen($telefono) !== 10 || !ctype_digit($telefono)) {
    echo '<script>alert("Número de teléfono no válido.");</script>';
    echo '<script>window.location.href = "../registro.php";</script>';
    exit();
}

$domicilio = $_POST['domicilio'];
$domicilio = filter_var($domicilio, FILTER_SANITIZE_STRING);
$dependencia = $_POST['dependencia'];
$dependencia = filter_var($dependencia, FILTER_SANITIZE_STRING);
$cargo = $_POST['cargo'];
$cargo = filter_var($cargo, FILTER_SANITIZE_STRING);
$profesion = $_POST['profesion'];
$profesion = filter_var($profesion, FILTER_SANITIZE_STRING);
$password = $_POST['password'];
$conf_pass = $_POST['conf_pass'];

// Verificar si los campos contienen números
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
    echo '<script>window.location.href = "../registro.php";</script>';
    exit();
}


$registroExitoso = false;

if ($password === $conf_pass) {

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // Establecer el tipo de usuario como 'lector'
    $tipo_usuario = 'lector';

    $sql = "INSERT INTO usuarios (nombre, ap_p, ap_m, email, edad, telefono, domicilio, dependencia, cargo, profesion, password, tipo_usuario) VALUES ('$nombre', '$ap_p', '$ap_m', '$email', '$edad', '$telefono', '$domicilio', '$dependencia', '$cargo', '$profesion', '$hashedPassword', '$tipo_usuario')";

    if ($conexion->query($sql) === TRUE) {
        $registroExitoso = true;
    } else {
        echo "Error al registrarse: " . $conexion->error;
    }
} else {
    echo '<script>alert("Las contraseñas no coinciden.");</script>';
    echo '<script>window.location.href = "../registro.php";</script>';
}

$conexion->close();

if ($registroExitoso) {
    header("Location: ../inicio_sesion.php");
    exit();
}
?>
