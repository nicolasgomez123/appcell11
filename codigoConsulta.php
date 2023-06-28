<?php
include("conexion.php");

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigoCliente = $_POST['codigo'];

    $consulta = "SELECT cliente,estado FROM clientes WHERE codigo = '$codigoCliente'";
    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila && isset($fila['cliente'])) {
        $cliente = $fila['cliente'];
        $estado = $fila['estado'];


        $response = [
            'cliente' => $cliente,
            'estado' => $estado
        ];
    } else {
        $response = [
            'mensaje' => 'El código ingresado es incorrecto.'
        ];
    }  
    header('Content-Type: application/json');
    echo json_encode($response);
}   
    mysqli_close($con);
?>
