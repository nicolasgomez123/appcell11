<?php 
  if(!isset($_GET["id"])) exit();
  $id = $_GET["id"];
  include_once "../bd/conexion.php";
  $sentencia = $conexion->prepare("DELETE FROM trabajos WHERE id = ?;");
  $resultado = $sentencia->execute([$id]);
  if($resultado === true){
    return header("Location: index.php?pagina=1");
    exit;
  }
  else
    echo "No se pudo eliminar al cliente";

?>