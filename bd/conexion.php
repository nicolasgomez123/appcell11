<?php
//conexion base de datos 1 forma PDO
    // class conexion{
    //      public static function conectar(){
    //         define('servidor','localhost');//hosting o servidor
    //         define('nombre_bd','appcell');//base de datos
    //         define('usuario','root');//nombre del usuario
    //         define('password','');//contraseña de la base de datos

    //         //reconecta la base de datos
    //         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    //         try{
    //             $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);
    //             return "$conexion";

    //         }catch (Exception $e){//si hay error nos este mensaje
    //             die("el error de conexion es: ".$e->getMessage());
    //         }
    //     }
    // }

//conexion base de datos forma 2-forma PDO
// class conexion{
//     private $host       = "localhost";
//     private $user       = "root";
//     private $password   = "";
//     private $db         = "appcell";

//     public function __construct(){
//         $connectionString = "mysql:host=".$this->host.";dbname".$this->db."charset=utf8";
//     try{
//         $this->conect = new PDO($connectionString, $this->user, $this->password);
//         $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }catch (Exception $e){
//         $this->conect = 'error de conexion';
//         echo "error", $e->getMessage();
//     }

//     }
// }

// pdo 2
// $host = "localhost";
// $user = "root";
// $password = "";
// $db= "appcell";

// try{
//     $conexion = new PDO($host, $user, $password);
//     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//     echo "fallo la conexion".$e->getMessage();
// }

// $host = "localhost";
//  $user = "root";
//  $password = "";
//  $db= "appcell";
//  try{
//  $conexion = new PDO("mysql:host=$host;dbname=appcell", $user, $password);
//  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "conexion exitosa";
//  }catch(PDOException $e){
//      echo "la conexion ha fallado". $e->getMessage();
//  }
//  $conexion = null;
    

$host = "localhost";
$user = "root";
$password = "";
$db= "appcell";


//database connection
$link = mysql_connect($host, $user, $pass) or																	
    die("No ha sido posible conectarse: " . mysql_error());;
mysql_select_db($db_name);
//sets encoding to utf8
mysql_query("SET NAMES utf8");


// return[
//     'db'=> [
//         'host' => 'localhost',
//         'user' => 'root',
//         'pass' => '',
//         'name' => 'appcell',
//         'options' =>[
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

//         ]
//     ]
// ];

?>