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
    <link rel="stylesheet" href="css/style_acerca_de.css">
    <title>Acerca de</title>

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
        <section class="section">
            <div>
                <h1>COMISIÓN ESTATAL DEL AGUA Y ALCANTARILLADO</h1>
            </div>
            <div class="funciones">
                <h2>FUNCIONES</h2>
                <div class="div">
                    <p>Coordinar entre los municipios y el estado y entre éste y la federación las acciones relacionadas con la explotación, 
                    uso y aprovechamiento del agua, coadyuvando en el ámbito de su competencia al fortalecimiento del pacto federal y del 
                    municipio libre en los términos de los artículos 115 de la Constitución General de la República, 115 y 116 de la 
                    Constitución Política del Estado, para lograr el desarrollo equilibrado y la descentralización de los servicios de agua 
                    en la entidad.</p>
                </div>
            </div>

            <div class="funciones2">
                <h2>TITULAR DE LA COMISIÓN</h2>
                <div class="container">
                    <div class="titular">
                        <img src="img/titular.jpg" class="img">
                    </div>
                    <div class="info">
                        <h1>Juan Carlos Chávez González</h1>
                        <h2>Función del Director</h2>
                        <p>Coordinar las acciones para la programación, ejecución, monitoreo y evaluación de la obra pública de agua potable, 
                            alcantarillado y saneamiento, así como de la mejora de calidad y cultura del vital líquido, a través del 
                            fortalecimiento de los organismos operadores del agua y vinculación con instituciones públicas federales, 
                            estatales y municipales.</p>
                    </div>
                </div>
            </div>

            <div class="ubi"></div>
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