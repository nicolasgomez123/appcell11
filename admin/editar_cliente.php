<?php
include("../conexion.php");

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'GET':
        if (!isset($_GET['id'])) {
            // Obtener todos los registros
            $result = $con->query("SELECT * FROM clientes");

            // Crear un array para almacenar los registros
            $elementos = array();

            // Iterar sobre cada fila de resultados y almacenar los campos en el array
            while ($row = $result->fetch_assoc()) {
                $elementos[] = $row;
            }

            // Devolver los campos en formato JSON
            echo json_encode($elementos);
        } else {
            // Obtener un registro en particular
            $id = intval($_GET['id']);
            $result = $con->query("SELECT * FROM clientes WHERE id=$id");

            // Crear un array para almacenar el registro
            $elementos = array();

            // Iterar sobre cada fila de resultados y almacenar los campos en el array
            while ($row = $result->fetch_assoc()) {
                $elementos[] = $row;
            }

            // Devolver los campos en formato JSON
            echo json_encode($elementos);
        }
        break;

    case 'POST':
        // Leer el cuerpo de la solicitud y decodificarlo como JSON
        $input = json_decode(file_get_contents('php://input'), true);

        $id = $input["id"];
        $cliente = $input["cliente"];
        $codigo = $input["codigo"];
        $modelo = $input["modelo"];
        $falla = $input["falla"];
        $observacion = $input["observacion"];
        $fecha_ingreso = $input["fecha_ingreso"];
        $fecha_salida = $input["fecha_salida"];
        $precio = $input["precio"];
        $imei = $input["imei"];
        $estado = $input["estado"];

        // Actualizar registros
        $sql = "UPDATE clientes SET cliente=?, codigo=?, modelo=?, falla=?, observacion=?, fecha_ingreso=?, fecha_salida=?, precio=?, imei=?, estado=? WHERE id=?";
        $query = $con->prepare($sql);
        $query->bind_param("ssssssssssi", $cliente, $codigo, $modelo, $falla, $observacion, $fecha_ingreso, $fecha_salida, $precio, $imei, $estado, $id);
        $query->execute();

        // Devolver un código de estado de éxito
        $data = array("estado" => true);
        echo json_encode($data);
        break;

    default:
        // Manejar otros métodos HTTP si es necesario
        break;
}

mysqli_close($con);
?>
