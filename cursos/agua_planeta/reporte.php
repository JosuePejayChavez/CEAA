<?php
require('fpdf/fpdf.php');
require('phpqrcode/qrlib.php'); // Incluir la biblioteca QR Code

class PDF extends FPDF
{
    // Método para establecer el folio y el nombre
    function SetFolioNombre($folio, $nombreCompleto)
    {
        // Folio
        $this->SetFont('Arial', '', 12);
        $this->SetY($this->GetY() + 5);
        $this->Cell(0, 10, 'Folio: ' . $folio, 0, 0, 'C');
        //Nombre
        $this->SetFont('Arial', '', 32);
        $this->SetY($this->GetY() + 80);
        $this->Cell(280, 10, utf8_decode($nombreCompleto), 0, 0, 'C');
    }
}

// Inicia la sesión
session_start();

// Verifica si hay una sesión iniciada
if (isset($_SESSION['user_id'])) {
    // Obtener el ID de usuario de la sesión
    $user_id = $_SESSION['user_id'];

    // Crear la conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'ceaa_db');

    // Verificar la conexión
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se hizo clic en el botón "Generar constancia"
        if (isset($_POST["generar_constancia"])) {
            // Consultar si ya existe un PDF para este usuario
            $query_select_certificado = "SELECT * FROM agua_planeta WHERE id = '$user_id'";
            $resultado_certificado = mysqli_query($conexion, $query_select_certificado);
        
            if (mysqli_num_rows($resultado_certificado) > 0) {
                // Si ya existe un certificado, mostrar un mensaje
                echo '<script>alert("Ya se ha generado un certificado para este usuario.");</script>';
                echo '<script>window.location.href = "leccion13.php";</script>';
            } else {
                // Definir el folio como una cadena aleatoria única
                $folio = uniqid();
        
                // Definir la fecha de finalización
                $fecha_finalizacion = date("Y-m-d");
        
                // Definir el avance
                $avance = 100;
        
                // Creación del objeto de la clase heredada
                $pdf = new PDF('L', 'mm');
                $pdf->AliasNbPages();
                $pdf->AddPage();
                $pdf->Image('img/reconocimiento.png', 0, 0, 300);
        
                // Consulta a la base de datos para obtener el nombre y apellidos del usuario
                $query_select = "SELECT nombre, ap_p, ap_m FROM usuarios WHERE id = $user_id";
                $resultado = mysqli_query($conexion, $query_select);
        
                if ($fila = mysqli_fetch_assoc($resultado)) {
                    $nombreCompleto = $fila['nombre'] . ' ' . $fila['ap_p'] . ' ' . $fila['ap_m'];
        
                    // Establecer el folio y el nombre en el PDF
                    $pdf->SetFolioNombre($folio, $nombreCompleto);

                    // Datos adicionales para el código QR
                    $datosQR = "Nombre: " . $fila['nombre'] . ' ' . $fila['ap_p'] . ' ' . $fila['ap_m'] . "\n";
                    $datosQR .= "Curso: Agua en el Planeta\n";
                    $datosQR .= "Folio: $folio\n";
                    $datosQR .= "Fecha de finalizacion: $fecha_finalizacion\n";
                    $datosQR .= "Avance: $avance%\n";

                    // Generar el código QR
                    $tempDir = 'temp/';
                    $codeFile = $tempDir.'qr_'.$folio.'.png';
                    QRcode::png($datosQR, $codeFile, 'L', 4);

                    // Insertar el código QR en el PDF
                    $pdf->Image($codeFile, 202, 135, 50, 50);

                    // Guardar el PDF en la carpeta "certificados" en el servidor
                    $pdf_file_name = 'certificado_' . $folio . '.pdf';
                    $pdf_file_path = 'certificados/' . $pdf_file_name; // Ruta relativa
        
                    $pdf->Output($pdf_file_path, 'F');
        
                    // Actualizar la ruta del archivo PDF en la base de datos (ruta relativa)
                    $query_update = "INSERT INTO agua_planeta (id, folio, fecha_finalizacion, avance, pdf_path) VALUES ('$user_id', '$folio', '$fecha_finalizacion', '$avance', '$pdf_file_name')";
                    if (mysqli_query($conexion, $query_update)) {
                        // Mostrar el PDF
                        header('Content-Type: application/pdf');
                        readfile($pdf_file_path);
                        exit();
                    } else {
                        // Error al actualizar la ruta del archivo PDF en la base de datos
                        echo "Error al actualizar la ruta del archivo PDF en la base de datos.";
                    }

                    // Limpiar el código QR temporal después de usarlo
                    unlink($codeFile);
                } else {
                    // El usuario no fue encontrado en la base de datos
                    echo "Error: Usuario no encontrado.";
                }
            }
        } elseif (isset($_POST["visualizar_constancia"])) {
            // Consultar si ya existe un PDF para este usuario
            $query_select_certificado = "SELECT * FROM agua_planeta WHERE id = '$user_id'";
            $resultado_certificado = mysqli_query($conexion, $query_select_certificado);
        
            if (mysqli_num_rows($resultado_certificado) > 0) {
                // Si ya existe un certificado, recuperar la ruta del PDF y mostrarlo
                $fila_certificado = mysqli_fetch_assoc($resultado_certificado);
                $pdf_file_path = 'certificados/' . $fila_certificado['pdf_path'];
        
                // Mostrar el PDF
                if (file_exists($pdf_file_path)) {
                    header('Content-Type: application/pdf');
                    readfile($pdf_file_path);
                    exit();
                } else {
                    // El archivo no existe en la ruta especificada en la base de datos
                    echo "Error: El archivo PDF no existe.";
                }
            } else {
                // No existe un PDF asociado a este usuario
                echo "No existe un certificado asociado a este usuario.";
            }
        }        
    }
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // No hay sesión iniciada, redirige a la página de inicio de sesión
    header("Location: ../../iniciar_sesion.php");
    exit();
}
