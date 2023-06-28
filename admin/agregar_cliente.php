<?php
include("../conexion.php");

$cliente = $_POST['modal-cliente'] ?? null; 
$codigo = $_POST['modal-codigo'] ?? null;
$modelo = $_POST['modal-modelo'] ?? null;
$falla = $_POST['modal-falla'] ?? null;
$observacion = $_POST['modal-observacion'] ?? null; 
$fecha_ingreso = $_POST['modal-fecha_ingreso'] ?? null;
$fecha_salida = $_POST['modal-fecha_salida'] ?? null;
$precio = $_POST['modal-precio'] ?? null;
$imei = $_POST['modal-imei'] ?? null;
$estado = $_POST['modal-estado'] ?? null; 

$response = [
    'success' => false,
    'error' => 'No se proporcionaron todos los datos requeridos.'
];

if (
    $cliente && $codigo && $modelo && $falla && $observacion && $fecha_ingreso && $fecha_salida && $precio && $imei && $estado
) {
    $sql = "INSERT INTO clientes (cliente, codigo, modelo, falla, observacion, fecha_ingreso, fecha_salida, precio, imei, estado) 
                        VALUES ('$cliente', '$codigo', '$modelo', '$falla', '$observacion', '$fecha_ingreso', '$fecha_salida', '$precio', '$imei', '$estado')";

    if (mysqli_query($con, $sql)) {
        $response = [
            'success' => true
        ];
    } else {
        $response['error'] = 'Error al insertar el cliente en la base de datos: ' . mysqli_error($con);
    }
}

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($con);
?>
