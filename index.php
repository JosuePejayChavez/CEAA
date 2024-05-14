<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <title>Cursos</title>

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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="">Usuario</a>
                <ul>
                    <li><a href="inicio_sesion.php">Iniciar sesión</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                </ul>
        </li>
        </ul>
    </header>
    
    <div class="titulo">
        <p>CURSOS</p>
    </div>

    <main class="main">
    <script src="js/redirigir.js"></script>
        <section class="sect1">
            <div class="contenedor">
                <div class="glass">
                    <div class="cabecera">
                        <img src="img/user1.jpeg" alt="huella hidrica">
                    </div>
                    <h2><b>Huella Hídrica</b></h2>
                    <h3>Una exploración fascinante que nos sumergirá en el mundo vital del agua y su interacción con nuestras actividades cotidianas, la producción de bienes y servicios, y la sostenibilidad ambiental.</h3>
                    <div class="footer">
                        <button onclick="redirigirAOtraPagina()">Registrarse</button>
                        
                    </div>
                </div>
                <div class="imagen">
                    <img src="img/huella.jpeg" alt="huella" class="image">
                </div>
            </div>
        </section>
        <section class="sect1">
            <div class="contenedor">
                <div class="glass">
                    <div class="cabecera">
                        <img src="img/user1.jpeg" alt="huella hidrica">
                    </div>
                    <h2><b>Agua en el Planeta</b></h2>
                    <h3>El agua es un elemento primordial para los seres vivos,
                    actualmente se realizan arduas labores para generar conciencia en el
                    cuidado de éste vital líquido, ya que los mantos acuíferos se están agotando.</h3>
                    <div class="footer">
                    <button onclick="redirigirAOtraPagina()">Registrarse</button>
                    </div>
                </div>
                <div class="imagen">
                    <img src="img/aguap.jpg" alt="huella" class="image">
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