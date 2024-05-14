<?php
// Incluir la biblioteca FPDF
require('../fpdf/fpdf.php');
include('conexion.php');

// Crear una nueva clase extendida desde FPDF para generar el PDF
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Encabezado
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(0, 10, utf8_decode('USUARIOS REGISTRADOS EN CURSO HUELLA HÍDRICA'), 0, 1, 'C');
        $this->Ln(10);

        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(167, 167, 167); // Color de fondo del encabezado
        $this->SetDrawColor(255, 255, 255); // Color blanco para el borde de las celdas
        $this->Cell(50, 15, 'Nombre', 0, 0, 'C', true); // Sin bordes laterales
        $this->Cell(50, 15, 'Apellido Paterno', 0, 0, 'C', true); // Sin bordes laterales
        $this->Cell(50, 15, 'Apellido Materno', 0, 0, 'C', true); // Sin bordes laterales
        $this->Cell(45, 15, 'Folio', 0, 0, 'C', true); // Sin bordes laterales
        $this->Cell(50, 15, 'Fecha de Finalizacion', 0, 0, 'C', true); // Sin bordes laterales
        $this->Cell(30, 15, 'Avance', 0, 1, 'C', true); // Sin bordes laterales y con salto de línea

        $this->SetFont('Arial', '', 10); // Sin negrita
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1.5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', '', 10);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciar PDF
$pdf = new PDF('L', 'mm');
$pdf->AliasNbPages();
$pdf->AddPage();

// Consulta para obtener los datos de usuarios y huella hídrica relacionados
$sql = "SELECT u.nombre, u.ap_p, u.ap_m, h.folio, h.fecha_finalizacion, h.avance
        FROM usuarios u
        INNER JOIN huella_hidrica h ON u.id = h.id";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en el PDF
    while ($row = $result->fetch_assoc()) {
        $pdf->SetDrawColor(201, 201, 201);

        $pdf->Cell(50, 12, $row['nombre'], 'B', 0, 'C');
        $pdf->Cell(50, 12, $row['ap_p'], 'B', 0, 'C');
        $pdf->Cell(50, 12, $row['ap_m'], 'B', 0, 'C');
        $pdf->Cell(45, 12, $row['folio'], 'B', 0, 'C');
        $pdf->Cell(50, 12, $row['fecha_finalizacion'], 'B', 0, 'C');
        $pdf->Cell(30, 12, $row['avance'], 'B', 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No se encontraron registros.', 0, 1, 'C');
}

// Salida del PDF
$pdf->Output();
?>
