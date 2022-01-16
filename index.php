

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

          <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>

    <?php endif; ?>

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
              <h2 class="display-5">Servicio Tecnico <br>
                especializado en <br>
                dispositivos <br>
              <h2><strong>Apple</strong> <img src="img/appel-icono.png" width="50px" alt="" srcset=""></h2>
              
              <a href="#contacto"><button id="boton" class="btn btn-outline-dark mt-4"> Registra mi dispositivo</button></a>
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

      <h3 id="contacto" class="text-center mt-5 mb-5">Formulario de Contacto</h3>
      <form class=" needs-validation" id="formulario" novalidate>
        <div class="mb-3 col-sm-12">
          <label class="form-label text-center position-relative" for=""><strong> Contanos sobre tu dispositivo</strong></label>
          <select name="" id="modelo" class="form-select" required>
            <option value="">selecciona el modelo</option>
              <div class="valid-tooltip">Campo Completado</div>
              <div class="invalid-tooltip">Seleccione una opcion</div>
              <option value="">opcion-1</option>
              <option value="">opcion-2</option>
              <option value="">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-12">
          <select name="" id="problema"  class="form-select" required>
            <option value="">selecciona el problema</option>
            <option value="">opcion-1</option>
            <option value="">opcion-2</option>
            <option value="">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-6 position-relative">
          <input id="nombre" type="text" class="form-control" placeholder="Nombre" required>
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Nombre</div>
        </div>

        <div class="mb-3 col-sm-3 position-relative">
          <input id="telefono" type="number" class="form-control" placeholder="telefono" required>
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Numero de telefono</div>
        </div>

        <div class="mb-3 col-sm-3">
          <textarea class="form-control" id="mensaje" rows="3" placeholder="Dejanos un mensaje"></textarea>        
        </div>
        <br>
        <button class="btn btn-primary" onclick="alerta()" id="boton2">Enviar</button>
      </form>

      

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

      <h3 class="text-center mt-5 mb-5">Ver estado de mi equipo</h3>
  
      <div class="formulario2">
        <form method="" action="">
          <label for="">Nombre Cliente</label>
          <input type="text" id="cliente" class="mb-4 form-control" placeholder="Ingrese su nombre">
  
          <label for="">Telefono</label>
          <input type="number" id="tel" class="mb-4 form-control" placeholder="Ingrese su telefono">
  
          <label for="">Codigo del Dispositivo</label>
          <input type="number" id="codigo" class="mb-4 form-control" placeholder="Ingrese el codigo de su Dispositivo">
  
          <label for="">Estado</label>
          <input type="text" id="estado" class="mb-4 form-control" placeholder="Ingrese el estado de su Dispositivo">
  
          <label for="">Observacion</label>
          <textarea name="" cols="30" id="observacion" class="form-control" rows="10"></textarea>
  
          <br>
          <button class="btn btn-primary" id="boton3">Enviar</button>
        </form>
      </div>

        <hr>

        <h2 id="nosotros" class="text-center mb-5 mt-4">Informacion del tecnico</h2>

        <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card" id="tecnico">
              <img src="img/avatar.jpg" class="card-img-top" height="400px" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Nicolas Gomez</h5>
                <p class="card-text">Estudiante de programacion y diseño web</p>
              </div>
            </div>
          </div>
        </div>-->
        

        <div class="localizacion">
          <div class="localizaacion__mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28316.96096570272!2d-58.82158995000001!3d-27.481083549999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b6745a222d1%3A0x798dca366c326036!2sPlaza%20Libertad!5e0!3m2!1ses!2sar!4v1641094258759!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          
          <div class="localizacion__info">
            <h4 class="localizacion__titulo">Titulo</h4>
            <p class="localizacion__texto">
              Telefonos: 011 4551-4496  /  011 4551-4479
            </p> 
            
            <p  class="localizacion__texto"> 
              Email: info@superservicesrl.com.ar
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div> 

      

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
        </div>
      </div>

    <?php
      include "partes/footer.php";
    ?>
