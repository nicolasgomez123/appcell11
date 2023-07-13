<?php
include "../conexion.php";
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si se ha establecido la conexión correctamente
    if ($con->connect_error) {
        die('Error de conexión: ' . $con->connect_error);
    }

    // Verificar las credenciales de inicio de sesión
    $sql = "SELECT * FROM usuario2 WHERE usuario = '$usuario' AND clave = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas, iniciar sesión
        $datos = $result->fetch_object();
        $_SESSION["id"] = $datos->id;
        $_SESSION['nombre'] =  $datos->nombres. " ". $datos->apellidos;
        echo json_encode(['success' => true]);
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
    }

    // Cerrar la conexión a la base de datos
    $con->close();
}
?>
