<?php
include("../conexion.php");

// Obtener los parámetros de paginación
$page = $_GET['page'] ?? 1; // Número de página actual
$pageSize = $_GET['pageSize'] ?? 10; // Cantidad de elementos por página

// Calcular el índice inicial y la cantidad de registros a obtener
$offset = ($page - 1) * $pageSize;
$limit = $pageSize;

// Realizar la consulta a la base de datos utilizando los parámetros de paginación
$sql = "SELECT * FROM clientes LIMIT $offset, $limit";
$result = mysqli_query($con, $sql);

// Obtener el total de registros sin paginación
$total = mysqli_num_rows(mysqli_query($con, "SELECT * FROM clientes"));

// Construir el arreglo de resultados
$results = [
  'data' => [],
  'total' => $total
];

// Recorrer los resultados y agregarlos al arreglo de datos
while ($row = mysqli_fetch_assoc($result)) {
  $results['data'][] = $row;
}

// Devolver los resultados como respuesta JSON
header('Content-Type: application/json');
echo json_encode($results);

mysqli_close($con);
?>
