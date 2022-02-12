<?php 
include_once "../bd/conexion.php";

    $cliente = array(
        "cliente"       => $_POST['cliente'],
        "telefono"      => $_POST['telefono'],
        "modelo"        => $_POST['modelo'],
        "falla"         => $_POST['falla'],
        "observacion"   => $_POST['observacion'],
        "fecha_ingreso" => $_POST['fecha_ingreso'],
        "fecha_entrega" => $_POST['fecha_entrega'],
        "precio"        => $_POST['precio'],
        "imei"          => $_POST['imei'],
        "estado"        => $_POST['estado']
    );

    $consultaSQL = "INSERT INTO trabajos(cliente, telefono, modelo, falla, observacion, fecha_ingreso, fecha_entrega, precio, imei, estado) VALUES (:". implode(", :", array_keys($cliente)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    
    if($sentencia->execute($cliente)){
        return header("Location: index.php?pagina=1");
   }else{
       echo "error";
   }

?>

