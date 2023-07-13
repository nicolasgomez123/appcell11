<?php
include "../conexion.php";
session_start();

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['nombre'])) {
    // El usuario ya ha iniciado sesión, redirigirlo a la página protegida
    header('Location: ../admin/index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Appcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--Icono-->
<link rel="icon" href="../img/favicon-32x32.png" type="../img/ico">   
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						<a href="../index.php">
							<img src="../img/logo-principal.png" class="img-fluid" width="250px">
						</a>
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nombre de usuario requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Ingrese nobre de usuario"
						id="usuario" required autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password requerida">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Escribe tu contraseña"
						id="password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<!-- <div class="text-right p-t-8 p-b-31">
						<a href="#">
							Olvidaste la contraseña?
						</a>
					</div> --> <br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit" >
								Entrar
							</button>
						</div>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="../js/usuario.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
        const form = document.querySelector('form');
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            
            const usuario = document.getElementById('usuario').value;
            const password = document.getElementById('password').value;
            
            fetch('controladorLogin.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'usuario=' + encodeURIComponent(usuario) + '&password=' + encodeURIComponent(password)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Inicio de sesión exitoso, redirigir al usuario a la página protegida
                    window.location.href = '../admin/index.php';
                } else {
                    // Error de inicio de sesión, mostrar mensaje de error
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>

</body>
</html>