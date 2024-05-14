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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style_huella_hidrica.css">
    <title>Mantos Acuaiferos</title>

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
            <li><a href="cursos_registrado.php">Inicio</a></li>
            <li><a href="acerca_de.php">Acerca de</a></li>
            <li><a href="">Usuario</a>
                <ul>
                    <li><a href="actualizar.php">Actualizar datos</a></li>
                    <li><a href="">Mi progreso</a></li>
                    <li><a href="backend/logout.php">Cerrar sesión</a></li>
                </ul>
        </li>
        </ul>
    </header>

    <main class="main">
        <aside class="aside">
            <div class="titulo">
                <h1>Recuperacion de los Mantos Acuaiferos</h1>
            </div>
            <?php
            // Incluir el archivo de verificación de folio
            include 'backend/hrefAP.php';
            ?>
            <nav class="curso">
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion1.php"'; ?> target="iframe1">Lección 1 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion2.php"'; ?> target="iframe1">Lección 2 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion3.php"'; ?> target="iframe1">Lección 3 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion4.php"'; ?> target="iframe1">Lección 4 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion5.php"'; ?> target="iframe1">Lección 5 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion6.php"'; ?> target="iframe1">Lección 6 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion7.php"'; ?> target="iframe1">Lección 7 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion8.php"'; ?> target="iframe1">Lección 8 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion9.php"'; ?> target="iframe1">Lección 9 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion10.php"'; ?> target="iframe1">Lección 10 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion11.php"'; ?> target="iframe1">Lección 11 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion12.php"'; ?> target="iframe1">Lección 12 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion13.php"'; ?> target="iframe1">Lección 13 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion14.php"'; ?> target="iframe1">Lección 14 <i class="fas fa-angle-right"></i></a></li>
                <li><a <?php if ($folio_encontrado) echo 'href="cursos/recuperacion_mantos/leccion15.php"'; ?> target="iframe1">Lección 15 <i class="fas fa-angle-right"></i></a></li>
            </nav>
        </aside>

        <section class="section">
            <iframe class="iframe" name="iframe1" src="cursos/recuperacion_mantos/presentacion.php"></iframe>
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