<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lección 14</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <main class="main">
        <div class="contenido">
            <h1>Lección 14</h1>
        </div>
        <div class="calculator">
        <h2>Calculadora de Huella Hídrica</h2><br>
        <form action="docs/calcular.php" method="post">
            <div class="campo">
                <label>¿Cuántos minutos tardas en ducharte?</label>
            </div>
            <div class="campo">
                <input type="number" name="ducha_minutos" required>
            </div>

            <div class="campo">
                <label>¿Cuántos minutos dejas abierto el grifo del baño?</label>
            </div>
            <div class="campo">
                <input type="number" name="grifo_baño_minutos" required>
            </div>

            <div class="campo">
                <label>¿Cuántos minutos dejas abierto el grifo de la cocina?</label>
            </div>
            <div class="campo">
                <input type="number" name="grifo_cocina_minutos" required>
            </div>

            <div class="campo">
                <label>¿Cuántos lavavajillas pones a la semana?</label>
            </div>
            <div class="campo">
                <input type="number" name="lavavajillas_semana" required>
            </div>

            <div class="campo">
                <label>¿Cuántas veces friegas a mano a la semana?</label>
            </div>
            <div class="campo">
                <input type="number" name="fregado_semana" required>
            </div>

            <div class="campo">
                <label>¿Cuántas lavadoras pones a la semana?</label>
            </div>
            <div class="campo">
                <input type="number" name="lavadoras_semana" required>
            </div>

            <div class="campo">
                <label>¿Tienes coche?</label>
            </div>
            <div class="campo">
                <select name="tiene_coche" required>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="campo">
                <label>¿Cuántas veces lavas el coche al mes?</label>
            </div>
            <div class="campo">
                <input type="number" name="lavados_coche_mes">
            </div>

            <div class="campo">
                <label>Indica el consumo en kilos de carne al mes</label>
            </div>
            <div class="campo">
                <input type="number" name="consumo_carne_mes" required>
            </div>

            <div class="campo">
                <label>Indica el consumo en kilos de frutas y verduras al mes</label>
            </div>
            <div class="campo">
                <input type="number" name="consumo_frutas_verduras_mes" required>
            </div>

            <div class="campo">
                <label>Indica el consumo en kilos de legumbres al mes</label>
            </div>
            <div class="campo">
                <input type="number" name="consumo_legumbres_mes" required>
            </div>

            <div class="campo">
                <label>Indica el consumo en litros de bebidas al mes</label>
            </div>
            <div class="campo">
                <input type="number" name="consumo_bebidas_mes" required>
            </div>

            <div class="container">
                <button type="submit" class="btn">Calcular Huella Hídrica</button>
            </div>
        </form><br>

        <div>
            <a class="btn" href="leccion13.php">Regresar</a>
            <a class="btn" href="leccion15.php">Siguiente lección</a>
        </div><br>
    </div>
    </main>
</body>
</html>