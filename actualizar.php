<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: inicio_sesion.php');
    exit();
}

// Incluye tu archivo de conexión
include('backend/conexion.php');

// Obtiene el ID del usuario desde la sesión
$user_id = $_SESSION['user_id'];

// Realiza una consulta para obtener los datos del usuario
$consulta = "SELECT * FROM usuarios WHERE id = '$user_id'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $usuario = mysqli_fetch_assoc($resultado);
} else {
    // Manejo de errores en la consulta
    echo "Error en la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_actualizar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <img src="img/fondo1.png" class="img">
    <title>Actualizar datos</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <section class="form">
        <script src="js/redirigir.js"></script>
        <div class="container">
            <form action="backend/actualizar.php" method="POST" class="forms">
                <div class="container13">
                    <div class="container11">
                        <h1>Actualizar datos</h1>
                        <div class="campo">
                            <label for="">Nombre:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-user"></i>
                            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $usuario['nombre']; ?>" required>
                        </div>

                        <div class="apellidos">
                            <div class="ap">
                                <div class="campo1">
                                    <label for="">Apellido paterno:</label>
                                </div>
                                <div class="campo1">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="ap_p" placeholder="Apellido paterno" value="<?php echo $usuario['ap_p']; ?>" required>
                                </div>
                            </div>

                            <div class="am">
                                <div class="campo1">
                                    <label for="">Apellido materno:</label>
                                </div>
                                <div class="campo1">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="ap_m" placeholder="Apellido materno" value="<?php echo $usuario['ap_m']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="campo">
                            <label for="">Correo electronico:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Correo electronico" value="<?php echo $usuario['email']; ?>" required>
                        </div>

                        <div class="num">
                            <div class="eda">
                                <div class="campo2">
                                    <label for="">Edad:</label>
                                </div>
                                <div class="campo2">
                                    <i class="fas fa-user"></i>
                                    <input type="number" name="edad" placeholder="Edad" value="<?php echo $usuario['edad']; ?>" required>
                                </div>
                            </div>

                            <div class="tel">
                                <div class="campo2">
                                    <label for="">Teléfono:</label>
                                </div>
                                <div class="campo2">
                                    <i class="fas fa-phone"></i>
                                    <input type="number" name="telefono" placeholder="Teléfono" value="<?php echo $usuario['telefono']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="campo">
                            <label for="">Domicilio:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-home"></i>
                            <input type="text" name="domicilio" placeholder="Domicilio"  value="<?php echo $usuario['domicilio']; ?>" required>
                        </div>
                    </div>

                    <div class="v-line"></div>

                    <div class="container12">
                        <div class="campo">
                            <label for="">Dependencia:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <input type="text" name="dependencia" placeholder="Dependencia" value="<?php echo $usuario['dependencia']; ?>" required>
                        </div>

                        <div class="campo">
                            <label for="">Cargo:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <input type="text" name="cargo" placeholder="Cargo" value="<?php echo $usuario['cargo']; ?>" required>
                        </div>

                        <div class="campo">
                            <label for="">Profesión:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <input type="text" name="profesion" placeholder="Profesión" value="<?php echo $usuario['profesion']; ?>" required>
                        </div>

                        <div class="campo">
                            <label for="">Contraseña:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-key"></i>
                            <input type="password" name="password" placeholder="Contraseña" required>
                        </div>

                        <div class="campo">
                            <label for="">Confirmar contraseña:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-key"></i>
                            <input type="password" name="conf_pass" placeholder="Confirmar contraseña" required>
                        </div>
                        <div class="container2">
                            <button class="btn" type="button" onclick="cancelarActualizar()">Cancelar</button>
                            <button class="btn" type="submit" name="submit" value="registrar">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>