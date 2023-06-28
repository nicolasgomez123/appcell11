<?php
include("../conexion.php");

$consulta = "SELECT id, cliente, codigo, modelo, falla, observacion, fecha_ingreso, fecha_salida, precio, imei, estado FROM clientes";
$resultado = mysqli_query($con, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $response = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $id = $fila['id'];
        $cliente = $fila['cliente'];
        $codigo = $fila['codigo'];
        $modelo = $fila['modelo'];
        $falla = $fila['falla'];
        $observacion = $fila['observacion'];
        $fecha_ingreso = $fila['fecha_ingreso'];
        $fecha_salida = $fila['fecha_salida'];
        $precio = $fila['precio'];
        $imei = $fila['imei'];
        $estado = $fila['estado'];

        $response[] = [
            'id' => $id,
            'cliente' => $cliente,
            'codigo' => $codigo,
            'modelo' => $modelo,
            'falla' => $falla,
            'observacion' => $observacion,
            'fecha_ingreso' => $fecha_ingreso,
            'fecha_salida' => $fecha_salida,
            'precio' => $precio,
            'imei' => $imei,
            'estado' => $estado
        ];
    }
} else {
    $response = [
        'mensaje' => 'Error: No se pueden cargar los datos'
    ];
}

mysqli_close($con);

header('Content-Type: application/json');
echo json_encode($response);
?>
