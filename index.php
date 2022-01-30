
<?php
  include 'partes/header.php';
?>

  <!--inicio navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.html">
        <img src="img/logo-principal.png" width="60px" alt="" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php"><img src="img/inicio-icono.png" width="30px" alt="" srcset="">
               INICIO </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros"><img src="img/nosotros-icono.png" width="30px" alt="" srcset="">
              NOSOTROS</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#subtitulo"><img src="img/servicios-icono.png" width="30px" alt="" srcset="">
              SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trabajos"><img src="img/trabajos-iconos.png" width="30px" alt="" srcset="">
              TRABAJOS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contacto"><img src="img/telefono-icono.png" width="30px" alt="" srcset="">
             CONTACTO</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/usuario-icono.png" alt="" width="30px" srcset="">
               USUARIO
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item"  href="usuario.php">Acceder</a></li>
              <li><a class="dropdown-item" href="signup.php">Registrarme</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--fin navbar-->

  <body>
    
    
    <div class="container-fluid">
      <div class="cuerpo_principal">
        <div class="row row-md mt-5">
            <div class=" col-6 text-center mt-3" id="titulo">
              <h2 class="display-5">Servicio tecnico <br>
                especializado en <br>
                dispositivos <br>
              <h2><strong>Apple</strong> <img src="img/appel-icono.png" width="50px" alt="" srcset=""></h2>
              
              <a href="#form3"><button id="boton" class="btn btn-outline-dark mt-4"> Ver estado de mi dispositivo</button></a>
            </div>

            <div class=" col-6">
              <img src="img/appcell-logo.png" class="img-fluid" width="500px" alt="" srcset="">
            </div>
        </div>
      </div>
      

    <div class="container mt-4">
        <div class="row">
        <h4 id="subtitulo" class="text-center"><i class="fas fa-tools"></i> Realizamos la reparacion de equipos:</h4>
            <div class="mt-5 mb-5">
              <div class="row row-2">
                
                <div id="img-2" class="col-sm-12 col-md-3 text-center mt-4">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpurepng.com%2Fpublic%2Fuploads%2Fmedium%2Fapple-iphone-5-smartphone-sqk.png&f=1&nofb=1" class="img-fluid" width="237px" alt="" srcset="">
                    <h4 class="mt-1" id="nombre-1">Iphone</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis et ratione amet voluptatem repellat aperiam aut mollitia expedita placeat. Suscipit!</p>
                    <h4><strong>Costo:</strong> 500$</p>
                </div>
      
                <div id="img-3" class="col-sm-12 col-md-3 text-center mt-3">
                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.pngall.com%2Fwp-content%2Fuploads%2F5%2FApple-iPad-PNG-HD-Image.png&f=1&nofb=1" class="img-fluid" width="300px"  alt="" srcset="">
                    <h4 class="mt-3" id="nombre-2">Ipad</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis et ratione amet voluptatem repellat aperiam aut mollitia expedita placeat. Suscipit!</p>
                    <h4><strong>Costo:</strong> 1500$</p>
                  </div>
      
                <div id="img-4" class="col-sm-12 col-md-3 text-center mt-4">
                  <img src="https://i.pinimg.com/originals/c5/95/c9/c595c9dc092cb7fbfecedde02a6952ae.png" class="img-fluid" width="300px" alt="" srcset="">
                  <h4 class="mt-1" id="nombre-3">Mackbook</h4>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis et ratione amet voluptatem repellat aperiam aut mollitia expedita placeat. Suscipit!</p>
                  <h4><strong>Costo:</strong> 2500$</p>
                </div>
      
                <div id="img-5" class="col-sm-12 col-md-3 text-center mt-2">
                  <img src="https://www.rogers.com/apple-images/watch/40mm-white-angle.png" class="img-fluid" width="225px" alt="" srcset="">
                  <h4 class="mt-5" id="nombre-4">Apple Whatch</h4>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis et ratione amet voluptatem repellat aperiam aut mollitia expedita placeat. Suscipit!</p>
                  <h4><strong>Costo:</strong> 1200$</p>
                </div>
              </div>
            </div>
          </div>
       <hr> 
    </div>

      <!--Formulario de contacto  /cambiar el action por watsapp-->
      <h3 id="contacto" class="text-center mt-5 mb-2">Formulario de Contacto</h3>
      <p id="contacto_texto" class="text-center mt-3 mb-3">Complete este formulario para contactarnos</p>
      
      <form action="index.php" method="POST" class="form-inline" id="formulario" novalidate>
        <div class="mb-3 col-sm-12">
          <label class="form-label text-center position-relative" for=""><strong> Contanos sobre tu dispositivo</strong></label>
          <select name="modelo" id="modelo" class="form-select" onchange="enviar(this.form)" required >
            <option value="">selecciona el modelo</option>
              <div class="valid-tooltip">Campo Completado</div>
              <div class="invalid-tooltip">Seleccione una opcion</div>
              <option value="Godzilla">opcion-1</option>
              <option value="King-kong">opcion-2</option>
              <option value="Gidora">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-12">
          <select name="problema" id="problema"  class="form-select" onchange="enviar(this.form)"  required>
            <option value="">selecciona el problema</option>
            <option value="Bulbasur">opcion-1</option>
            <option value="Pikachu">opcion-2</option>
            <option value="Charizard">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-6 position-relative">
          <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" required>
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Nombre</div>
        </div>


        <div class="mb-3 col-sm-3 position-relative">
          <input name="telefono" id="telefono" type="number" class="form-control" placeholder="telefono" required>
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Numero de telefono</div>
        </div>

        <div class="mb-3 col-sm-3">
          <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Dejanos un mensaje"></textarea>        
        </div>
        <br>
        <input type="submit" name="submit" id="boton2" class="btn btn-primary" value="Enviar">
      </form>

      <?php
  include "bd/conexion.php";

if (isset($_POST['submit'])) {
try{
 
  $contacto = array(
    "modelo"    => $_POST['modelo'],
    "problema"  => $_POST['problema'],
    "nombre"    => $_POST['nombre'],
    "telefono"  => $_POST['telefono'],
    "mensaje"   => $_POST['mensaje'],
  );
  $consultaSQL ="INSERT INTO contacto(modelo, problema, nombre, telefono, mensaje) VALUES (:" . implode(", :", array_keys($contacto)) . ")";
 
  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute($contacto);
}catch(PDOException $error){
  $resultado['error'] = true;
  $resultado['mensaje'] = $error;
}
}

?>
      <!--Fin Formulario de contacto-->


      

    <div class="container mt-4">
         <hr>  
        <h3 id="trabajos" class="  text-center text-center mt-5 mb-4">Trabajos Realizados</h3>
      
        <!--inicio carrousel-->
      <div class="owl-carousel owl-theme">
        <!--inicio 1 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fofertasdelocura.com%2Fwp-content%2Fuploads%2F2020%2F08%2FReparar-pantalla-iphone-scaled.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 1 item-->

        <!--inicio 2 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FtR60Z7oIJAQ%2Fmaxresdefault.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 2 item-->

         <!--inicio 3 item-->
         <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fapplesencia.com%2Ffiles%2F2016%2F07%2FReparar-iPhone.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 3 item-->

        <!--inicio 4 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsolucel.com.ar%2Fwp-content%2Fuploads%2F2016%2F08%2Fservicio-tecnico-reparacion-celulares-multimarca-providencia-297311-MLC20543242278_012016-F.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 4 item-->

        <!--inicio 5 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmlstaticquic-a.akamaihd.net%2Fcambio-de-pantalla-display-iphone-6-plus-a-domicilio-en-30-D_NQ_NP_757945-MLU26381452202_112017-F.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 5 item-->

        <!--inicio 6 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimg1.wsimg.com%2Fisteam%2Fstock%2F6enelJe&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 6 item-->

         <!--inicio 7 item-->
         <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fst2.depositphotos.com%2F1623206%2F6228%2Fi%2F450%2Fdepositphotos_62285313-stock-photo-hands-holding-broken-smartphone.jpg&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 7 item-->

        <!--inicio 8 item-->
        <div class="item mb-4">
          <div class="card text-center">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fd3nevzfk7ii3be.cloudfront.net%2Figi%2FqlrtNWvDrQaULt4D&f=1&nofb=1" alt="imge" class="card-img-top">
            <div class="card-body">
              <h4>Carrousel</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, similique. Accusamus, aliquam! Cupiditate, voluptate reiciendis cumque autem distinctio, quasi fugiat laboriosam voluptatibus dolores dolorem facilis dicta repellendus cum recusandae harum?</p>
            </div>
          </div>
        </div>
        <!--finaliza 8 item-->
      </div>
      <!--fin carrousel-->


      <hr>

    <!--Inicio Formulario 3-->
      <h3 id="dispositivo" class="text-center mt-5 mb-5">Ver estado de mi equipo</h3>
      <div id="form3" class="col-12">
      <div class="formulario2">
        <form action="#dispositivo" method="POST">
  

          <label for="">Codigo del Dispositivo</label>
          <input type="text" name="codigo" id="codigo" class="mb-4 form-control " placeholder="Ingrese el codigo de su Dispositivo">
  
          <br>
          <input type="submit" name="submit2" id="boton3" class="btn btn-primary" value="Enviar">
        </form>
      </div>

      <?php
        include "bd/conexion.php";
        $codigo = $_POST['codigo'];


        //para evitar inyecciones sql lo ejecutamos en la segunda variable
        // $sentencia = $conexion->prepare("SELECT * FROM trabajos where telefono = '?' ");;
        // $sentencia->execute(array($codigo));
          $sentencia = $conexion->query("SELECT * FROM trabajos where id = '$codigo' LIMIT 1 ");
          $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
          // $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);

      ?>
      
      <div class="datos">

      <?php
         foreach($clientes as $cliente){
      ?>
        <form class="form-datos" action="" method="">
        
          <label for="">Cliente</label>
            <input class="mb-4 form-control disabled" value="<?php echo $cliente->cliente?>" >
    
            <label for="">Modelo</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->modelo?>">
    
            <label for="">Falla</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->modelo?>">
      
            <label for="">Precio</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->precio?>">
    
            <label for="">Estado</label>
            <input type="" id="" class="mb-4 form-control"value="<?php echo $cliente->estado?>">
        </form>
        <?php
          }
        ?>

      </div>
    </div>
   
    <!--Fin Formulario 3-->
      <hr>

        <h2 id="nosotros" class="text-center mb-5 mt-4">Sobre Nosotros</h2>

        <div class="container mt-4">
        <div class="row row-2">

            <div class="col-sm-12 col-md-6">
                <img id="img-1" src="img/appcell-2.jpg" class="img-fluid" width="500px" height="200px" alt="" srcset="">
            </div>

            <div class="col-sm-12 col-md-6">

                <h4 class="text-center"> ¿Quienes Somos?</h4>

                <p class="text-center mt-3">Somos especialista en reparacion y servicio <br>
                                       tecnico de dispositivos Apple en Argentina. <br>
                                       Contamos con un laboratorio propio de <br>
                                       microelectronica, ademas de capacitacion permanente y <br>
                                       personal calificado. Trabajamos con los mejores <br>
                                       repuestos homologados, con amplio stock y un <br>
                                       servicio agil para que puedas contar con tus <br>
                                       dispositivos rapidamente. <br>
                                       Si buscas una solucion seria y confiable, te <br>
                                       esperamos. Solicita tu presupuesto y pone tu <br> 
                                       dispositivos en manos de verdaderos <br>
                                       profecionales.</p>
            </div>
        </div>
    </div>
    </div> 
    </div>


        </div>
          <hr>
      </div>   
    </div> 

      
    <!--Inicio cuadros-->
      <h3 id="subtitulo-2" class="text-center mt-4">Te proporcionamos:</h3>
      <div class="cuerpo_secundario mt-3">
        <div class="row row-2">
          <div class="col-sm-12 col-md-6 text-center mt-5">
          <h4><img src="img/tabla-icono.png" width="40px" alt="" srcset=""> Presupuesto</h4>
          <p>Sin compromiso</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
          </div>

          <div class="col-sm-12 col-md-6 text-center mt-5">
            <h4><img src="img/herramientas-icono.png" width="30px" alt="" srcset=""> Descuento</h4>
            <p>Multireparacion</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
            </div>

            <div class="col-sm-12 col-md-6 text-center mt-5">
              <h4><img src="img/camion-icono.png" width="35px" alt="" srcset=""> Recogida a domicilio</h4>
              <p>Con seguro</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
            </div>

            <div class="col-sm-12 col-md-6 text-center mt-5">
              <h4><img src="img/billetera-icono.png" width="30px" alt="" srcset=""> Realiza el pago</h4>
              <p>Cuando este Reparado</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
             </div>
            <!--Fin cuadros-->
        </div>
      </div>

    <?php
      include "partes/footer.php";
    ?>
