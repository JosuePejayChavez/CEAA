<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_inicio_sesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>CEAA</title>
    <img src="img/fondo1.png" class="img">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <section class="section">
    <script src="js/redirigir.js"></script>
        <form class="form" action="backend/procesar_login.php" method="POST">
        <h1>Inicio de sesión</h1>
            <div class="container">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                </div>
                <div class="campo">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
    
                <div class="campo">
                    <label for="password">Contraseña:</label>
                </div>
                <div class="campo">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
            </div>
            <p>¿No tienes una cuenta? <a href="registro.php">¡Regístrate aquí!</a></p>
    
            <div class="container2">
                <button type="submit" class="btn" onclick="redirigirAOtraPagina2()">Regresar</button>
                <button type="submit" class="btn">Ingresar</button>
            </div>
        </form>
    </section>
</body>
</html>