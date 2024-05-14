<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lección 13</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <main class="main">
        <div class="contenido">
            <h1>Lección 13</h1>
            <p>Estimados participante.
            Queremos felicitarte por completar con éxito nuestro curso sobre Huella Hídrica. Su dedicación ha 
            sido admirable, y estamos encantados de haber compartido este viaje educativo con ustedes. 
            Para reconocer su logro, hemos generado constancia de finalización. Descárguela aquí:</p>
        </div>
        <form action="reporte.php" method="post">
            <button class="btn" type="submit" name="generar_constancia">Generar constancia</button>
            <button class="btn" type="submit" name="visualizar_constancia">Visualizar constancia</button>
        </form><br>

        <div>
            <a class="btn" href="leccion12.php">Regresar</a>
            <a class="btn" href="leccion14.php">Siguiente lección</a>
        </div><br>
    </main>
</body>
</html>