<?php
#Salir si alguno de los datos no está presente
if(    
    !isset($_POST['id']) ||
    !isset($_POST['cliente']) ||
    !isset($_POST['telefono']) ||
    !isset($_POST['modelo']) ||
    !isset($_POST['falla']) ||
    !isset($_POST['fecha_ingreso']) ||
    !isset($_POST['fecha_entrega']) ||
    !isset($_POST['precio']) ||
    !isset($_POST['imei']) ||
    !isset($_POST['estado']) ||
    !isset($_POST['observacion'])

    
  )exit();
  
      include_once "../bd/conexion.php";
      
      $id               = $_POST['id'];
      $cliente          = $_POST['cliente'];
      $telefono         = $_POST['telefono'];
      $modelo           = $_POST['modelo'];
      $falla            = $_POST['falla'];
      $fecha_ingreso    = $_POST['fecha_ingreso'];
      $fecha_entrega    = $_POST['fecha_entrega'];
      $precio           = $_POST['precio'];
      $imei             = $_POST['imei'];
      $estado           = $_POST['estado'];
      $observacion      = $_POST['observacion'];      


      $sentencia = $conexion->prepare("UPDATE trabajos SET cliente =?, telefono =?, modelo =?, falla =?, fecha_ingreso =?,fecha_entrega =?, precio =?,imei =?,estado =?, observacion  =? WHERE id =?;");
      $resultado = $sentencia->execute([$cliente, $telefono, $modelo, $falla, $fecha_ingreso, $fecha_entrega, $precio, $imei, $estado, $observacion, $id]);
                    
                    if($resultado === TRUE){
                        return header("Location: index.php?pagina=1");
                        exit;
                    }else
                        echo "Algo salio mal. Vrerifique que los datos ingresados existen";

?>