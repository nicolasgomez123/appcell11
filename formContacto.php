<?php
    include "bd/conexion.php";

if (isset($_POST['submit'])) {
    if(!empty($_POST['modelo']) && !empty($_POST['problema']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
        //campos    
        $nombre    = $_POST['nombre'];    
        $problema  = $_POST['problema'];    
        $telefono  = $_POST['telefono'];
        $modelo    = $_POST['modelo'];
        $mensaje   = $_POST['mensaje'];

        //datos enviados al correo
        $destinatario = "nicolasgomez8010@gmail.com";
        $asunto = "Formulario de contacto desde nuestro sitio web";

        $carta  = 'De: $nombre \n';
        $carta .= 'Problema: $problema \n';
        $carta .= 'Telefono: $telefono \n';
        $carta .= 'Modelo: $modelo \n';
        $carta .= 'Mensaje: $mensaje \n';

        //enviando Mensaje
        mail($destinatario, $asunto, $carta);
    }
}

    // if (isset($_POST['submit'])) {
    //     if(!empty($_POST['modelo']) && !empty($_POST['problema']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
    //         try{
    //             $contacto = array(
    //                 "modelo"    => $_POST['modelo'],
    //                 "problema"  => $_POST['problema'],
    //                 "nombre"    => $_POST['nombre'],
    //                 "telefono"  => $_POST['telefono'],
    //                 "mensaje"   => $_POST['mensaje'],
    //             );
    //             $consultaSQL ="INSERT INTO contacto(modelo, problema, nombre, telefono, mensaje) VALUES (:" . implode(", :", array_keys($contacto)) . ")";
    //             $sentencia = $conexion->prepare($consultaSQL);
    //             $sentencia->execute($contacto);

    //             }catch(PDOException $error){
    //             $resultado['error'] = true;
    //             $resultado['mensaje'] = $error;
    //         }
    //     }
    // }

?>