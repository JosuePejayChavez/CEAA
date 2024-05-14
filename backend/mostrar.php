<?php
include('conexion.php');

// Obtener el nombre a buscar, si se ha enviado desde el formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

// Modificar la consulta SQL para incluir la búsqueda por nombre
$query = "SELECT u.nombre, u.ap_p, u.ap_m, h.folio, h.fecha_finalizacion, h.pdf_path
          FROM usuarios u
          INNER JOIN huella_hidrica h ON u.id = h.id
          WHERE u.nombre LIKE '%$nombre%'";

$result = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $fila['nombre'] . ' ' . $fila['ap_p'] . ' ' . $fila['ap_m'] . "</td>";
    echo "<td>" . $fila['folio'] . "</td>";
    echo "<td>" . $fila['fecha_finalizacion'] . "</td>";
    echo "<td>" . $fila['pdf_path'] . "</td>";
    // Construye la URL completa al archivo PDF
    $pdf_url = "http://localhost/CEAA/cursos/huella_hidrica/certificados/" . $fila['pdf_path'];
    // Agrega un botón de descarga en la nueva columna
    echo "<td><a class='btn descargar-btn' href='" . $pdf_url . "' download>Descargar</a></td>";
    echo "</tr>";
}

mysqli_free_result($result);
mysqli_close($conexion);
