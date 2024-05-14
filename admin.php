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
    <script src="https://kit.fontawesome.com/ce0debe8fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

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

    <center><h1>ADMINISTRADOR</h1></center>
    <main class="main">
        <section class="section">
            <div class="cards">
                <div class="card">
                    <div class="title">
                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                        <h2>Huella Hídrica</h2>
                    </div>
                    <a class="btn" href="admin_huella_hidrica.php">Gestionar</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="cards">
                <div class="card">
                    <div class="title">
                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                        <h2>Agua en el Planeta</h2>
                    </div>
                    <a class="btn" href="admin_agua_planeta.php">Gestionar</a>
                </div>
            </div>
        </section>  
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