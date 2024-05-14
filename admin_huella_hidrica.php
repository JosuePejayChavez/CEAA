<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: inicio_sesion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Administrar curso</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo_white.png" class="logo-img" alt="">
        </div>
        <ul class="nav">
            <li><a href="">Admin</a>
                <ul>
                    <li><a href="backend/logout.php">Cerrar sesión</a></li>
                </ul>
        </li>
        </ul>
    </header>

    <section class="section1">
        <div class="div">
            <h1>Huella Hídrica</h1>
        </div>
        <div class="div1">
            <div class="container">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="text" name="nombre" placeholder="Buscar...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="reporte">
                <a class="btn" href="backend/reporte_huella.php" target="_blank">Generar reporte</a>
            </div>
        </div>
    </section>

    <main class="main">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Folio</th>
                    <th>Fecha de finalización</th>
                    <th>Certificado</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <?php include 'backend/mostrar.php'; ?>
        </table>
    </main>

    <footer class="footer1">
        <div class="footer2">
            <img src="img/logo_gob.png" class="imgen">
        </div>
        <div class="footer3">
            <h1>Contacto:</h1>
            <p>Camino Real de la Plata Número 336, Col. Zona Plateada C.P. 42084</p>
            <p>Pachuca de Soto, Hidalgo, México</p>
            <p>ceaa.direcciongeneral@hidalgo.gob.mx</p>
            <p>771 715 8390, 93 al 96</p>
        </div>
    </footer>
</body>
</html>