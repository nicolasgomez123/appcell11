<?php
    session_start();

    if (isset($_SESSION['user_id'])){
        header('location /php-login');
    }

    require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            //nos lleva hacia
            //adminlite
            header('location: AdminLTE-3.1.0');
            
            //index.php
            //header('location: index.php');
        } else{
            $message = 'la contraseña es incorrecta';
        }
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
    <!--owl carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
    <!--owl carousel theme.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5976fd2c71.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <header>
      <a href="index.php">Volver al inicio</a>
  </header>

  <h1>Acceder</h1>
  <span>o <a href="signup.php">Registrate</a></span>

  <?php if (!empty($message)) : ?>
  <p><?= $message ?></p>
  <?php endif ; ?>

  <form action="login.php" method="post">
    <input type="text" name="email" placeholder="ingresa tu email">
    <input type="password" name="password" placeholder="Ingresa tu contraseña">
    <input type="submit" value="enviar">
  </form>

    
  </body>
</html>