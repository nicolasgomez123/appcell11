<?php
include("../conexion.php");

// Obtener el ID del cliente del cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);
$idCliente = $data['id'] ?? null;

$response = [
  'success' => false,
  'error' => 'No se proporcionó el ID del cliente.'
];

if ($idCliente) {
  $sql = "DELETE FROM clientes WHERE id = $idCliente";

  if (mysqli_query($con, $sql)) {
    $response = [
      'success' => true
    ];
  } else {
    $response['error'] = 'Error al eliminar el cliente: ' . mysqli_error($con);
  }
}

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($con);
?>
