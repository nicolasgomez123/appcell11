<?php



if($_POST){
    session_start();
    require("bd/conexion.php");
    $user = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $rol    = $_POST['rol'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM tipo WHERE email = :user AND pass = :pass AND tipo = :rol");
    $query->bindParam(":user", $user);
    $query->bindParam(":pass", $pass);
    $query->bindParam(":tipo", $rol);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario['email'];
        header("Location: admin/index.php?pagina=1");
    }else{
        echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'login.html'</script>";
    }

}


// $rol    = $_POST['rol'];

// $consultaSQL = "SELECT * FROM roles WHERE email = ':$email' AND pass = ':$pass' AND rol = ':$rol'";
// $sentencia= $conexion->prepare($consultaSQL);
// $sentencia->execute();

?>