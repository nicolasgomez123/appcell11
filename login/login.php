<?php
session_start();

// Verificar las credenciales del usuario
$email = $_POST['email'];
$password = $_POST['password'];

// Aquí deberías implementar tu lógica de verificación de credenciales
// Comparar el correo y la contraseña con los valores almacenados en tu base de datos o sistema de autenticación

// Ejemplo de verificación utilizando una base de datos MySQL
// $host = 'localhost';
// $dbUsername = 'tu_usuario';
// $dbPassword = 'tu_contraseña';
// $dbName = 'tu_base_de_datos';

include("../conexion.php");

// // Crear una conexión a la base de datos
// $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Verificar si la conexión fue exitosa
if ($con->connect_error) {
    die('Error de conexión a la base de datos: ' . $con->connect_error);
}

// Verificar las credenciales del usuario en la base de datos
$sql = "SELECT * FROM usuario WHERE correo = '$email' AND password= '$password'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    // Las credenciales son correctas
    $_SESSION['email'] = $email;
    $response = [
        'success' => true
    ];
} else {
    // Las credenciales son incorrectas
    $response = [
        'success' => false
    ];
}

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión a la base de datos
$con->close();
















// include("conexion.php");

// if(isset($_POST["usuario"]) && !empty($_POST["usuario"]) && isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"])){
//     $usuario = $_POST["usuario"];
//     $cotrasenia= $_POST["contrasenia"];

//     $query= "SELECT * from usuario WHERE (email = '$usuario' && contrasenia= '$cotrasenia')";
//     $result= mysqli_query($con, $query);

//     if(mysqli_num_rows($result)>0){
//         echo json_encode(array('success'=> 1));
//     }
//     else{
//         echo json_encode(array("success"=> 0));
//     }
// }

?>