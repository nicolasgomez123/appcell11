<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "appcell2";

$con = mysqli_connect($server, $user, $pass, $db) or die("Problemas de conexión");
mysqli_set_charset($con, "utf8");

// if($con){
//     echo "conexion exitosa";
// }
// else{
//     echo "Error conexion";
// }
?>

