<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <img src="img/fondo1.png" class="img">
    <title>Registro</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
</head>
<body>
    <section class="form">
        <script src="js/redirigir.js"></script>
        <div class="container">
            <form action="backend/registro.php" method="POST" class="forms">
                <div class="container13">
                    <div class="container11">
                        <h1>Registro</h1>
                        <div class="campo">
                            <label for="">Nombre:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-user"></i>
                            <input type="text" name="nombre" placeholder="Nombre" required>
                        </div>

                        <div class="apellidos">
                            <div class="ap">
                                <div class="campo1">
                                    <label for="">Apellido paterno:</label>
                                </div>
                                <div class="campo1">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="ap_p" placeholder="Apellido paterno" required>
                                </div>
                            </div>

                            <div class="am">
                                <div class="campo1">
                                    <label for="">Apellido materno:</label>
                                </div>
                                <div class="campo1">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="ap_m" placeholder="Apellido materno" required>
                                </div>
                            </div>
                        </div>

                        <div class="campo">
                            <label for="">Correo electronico:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Correo electronico" required>
                        </div>

                        <div class="num">
                            <div class="eda">
                                <div class="campo2">
                                    <label for="">Edad:</label>
                                </div>
                                <div class="campo2">
                                    <i class="fas fa-user"></i>
                                    <input type="number" name="edad" placeholder="Edad" required>
                                </div>
                            </div>

                            <div class="tel">
                                <div class="campo2">
                                    <label for="">Teléfono:</label>
                                </div>
                                <div class="campo2">
                                    <i class="fas fa-phone"></i>
                                    <input type="number" name="telefono" placeholder="Teléfono" required>
                                </div>
                            </div>
                        </div>

                        <div class="campo">
                            <label for="">Domicilio:</label>
                        </div>
                        <div class="campo">
                            <i class="fas fa-home"></i>
                            <input type="text" name="domicilio" placeholder="Domicilio" required>
                        </div>
                    </div>

                    <div class="v-line"></div>

                    <div class="container12">
                        <div class="campo">
                            <label for="">Dependencia:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <input type="text" name="dependencia" placeholder="Dependencia" required>
                        </div>

                        <div class="campo">
                            <label for="">Cargo:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <input type="text" name="cargo" placeholder="Cargo" required>
                        </div>

                        <div class="campo">
                            <label for="">Profesión:</label>
                        </div>
                        <div class="campo">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <input type="text" name="profesion" placeholder="Profesión" required>
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
                            <button class="btn" type="button" onclick="cancelarRegistro()">Cancelar</button>
                            <button class="btn" type="submit" name="submit" value="registrar">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>