<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // Incluye tu archivo de conexión
    include('conexion.php');

    $consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $usuario = mysqli_fetch_assoc($resultado);
        if ($usuario && password_verify($password, $usuario['password'])) {
            // Inicio de sesión exitoso
            $_SESSION['user_id'] = $usuario['id']; // Guarda el ID del usuario en la sesión
            
            // Verificar si el usuario es administrador
            if ($usuario['tipo_usuario'] === 'admin') {
                // Redirigir a una página diferente para el administrador
                header("location: ../admin.php");
                exit();
            } else {
                // Redirigir a la página para usuarios registrados
                header("location: ../cursos_registrado.php");
                exit();
            }
        } else {
            // Inicio de sesión fallido
            $_SESSION['login_error'] = "Nombre o contraseña incorrectos.";
            header("location: ../inicio_sesion.php");
            exit();
        }
        mysqli_free_result($resultado);
    } else {
        // Manejo de errores en la consulta
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

