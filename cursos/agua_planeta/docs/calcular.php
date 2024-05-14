<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ducha_minutos = $_POST['ducha_minutos'];
    $grifo_baño_minutos = $_POST['grifo_baño_minutos'];
    $grifo_cocina_minutos = $_POST['grifo_cocina_minutos'];
    $lavavajillas_semana = $_POST['lavavajillas_semana'];
    $fregado_semana = $_POST['fregado_semana'];
    $lavadoras_semana = $_POST['lavadoras_semana'];
    $tiene_coche = $_POST['tiene_coche'];
    $lavados_coche_mes = isset($_POST['lavados_coche_mes']) ? $_POST['lavados_coche_mes'] : 0;
    $consumo_carne_mes = $_POST['consumo_carne_mes'];
    $consumo_frutas_verduras_mes = $_POST['consumo_frutas_verduras_mes'];
    $consumo_legumbres_mes = $_POST['consumo_legumbres_mes'];
    $consumo_bebidas_mes = $_POST['consumo_bebidas_mes'];

    // Cálculo del uso total de agua
    $uso_agua = $ducha_minutos + $grifo_baño_minutos + $grifo_cocina_minutos + ($lavavajillas_semana * 10) + ($lavadoras_semana * 50) + ($tiene_coche == 'si' ? $lavados_coche_mes * 100 : 0);

    // Cálculo del consumo total de alimentos
    $consumo_alimentos = $consumo_carne_mes + $consumo_frutas_verduras_mes + $consumo_legumbres_mes + $consumo_bebidas_mes;

    // Suma de los dos cálculos anteriores para obtener la huella hídrica total
    $huella_hidrica = $uso_agua + $consumo_alimentos;

    echo '<script>alert("Resultado de Huella Hídrica\nTotal consumo de agua: ' . $huella_hidrica . ' litros.");</script>';
} else {
    header("Location: ../leccion14.php");
    exit;
}
?>
