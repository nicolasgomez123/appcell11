
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
            <a class="nav-link " aria-current="page" href="index.php"><img id="icono_inicio" src="img/inicio-icono.png" width="30px" alt="" srcset="">
               INICIO </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros"><img id="icono_nosotros" src="img/nosotros-icono.png" width="30px" alt="" srcset="">
              NOSOTROS</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#subtitulo"><img id="icono_servicios" src="img/servicios-icono.png" width="30px" alt="" srcset="">
              SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trabajos"><img id="icono_trabajos" src="img/trabajos-iconos.png" width="30px" alt="" srcset="">
              TRABAJOS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contacto"><img id="icono_contacto" src="img/telefono-icono.png" width="30px" alt="" srcset="">
             CONTACTO</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img id="icono_usuario" src="img/usuario-icono.png" alt="" width="30px" srcset="">
               USUARIO
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item"  href="login.html">Acceder</a></li>
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

      <!--Inicio Parte principal-->
        <div class="cuerpo_principal">
          <div class="row mt-5">
              <div class="col-sm-6 col-md-6 text-center mt-3" id="titulo_principal">
                <p >Servicio tecnico <br>
                  especializado en <br>
                  dispositivos <br>
                </p>
                <h2>
                  <strong style="color: #fff;">Apple</strong> <img id="appel-icono" src="img/appel-icono.png" width="50px">
                </h2>
                
                <a href="#form_divicion"><button id="boton" class="btn btn-outline-dark mt-4"> Ver estado de mi dispositivo</button></a>
              </div>

              <div class="col-sm-6 col-md-6">
                <img id="appcell_img" src="img/appcell-logo.png" class="img-fluid" width="550px" >
              </div>
          </div>
      <!--fin Parte principal-->
      </div>
      
       
    <!-- Inicio Tarjetas de reparacion-->
      <div class="container mt-4">
        <h3 id="titulo_reparacion" class="text-center"><i class="fas fa-tools"></i> Realizamos la reparacion de equipos:</h3>
      
            <div class="mt-5 mb-5">
                <div class="row ">
                  
                <div id="tarjetas" class="col-sm-12 col-md-3 col-lg-3 text-center mb-4">
                      <img src="https://www.rogers.com/apple-images/watch/40mm-white-angle.png"  class="img-fluid" id="tarjetas_img">
                      <h3 class="mt-3 mb-3"><strong>Iphone</strong></h3>
                      <div id="texto_tarjeta">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit!</p>
                        <h4><strong>Precio:</strong>500$</p></h4>
                      </div>
                </div>
        
                <div id="tarjetas" class="col-sm-12 col-md-3 col-lg-3 text-center mb-4 ">
                      <img  src="https://www.rogers.com/apple-images/watch/40mm-white-angle.png"  class="img-fluid" id="tarjetas_img">
                      <h3 class="mt-3 mb-3"><strong>Iphone</strong></h3>
                      <div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit!</p>
                        <h4><strong>Precio:</strong>500$</p></h4>
                      </div>
                </div>
        
                <div id="tarjetas" class="col-sm-12 col-md-3 col-lg-3 text-center mb-4 ">
                      <img src="https://i.pinimg.com/originals/c5/95/c9/c595c9dc092cb7fbfecedde02a6952ae.png"  class="img-fluid" id="tarjetas_img">
                      <h3 id="nombre-producto" class="mt-3 mb-3"><strong>Iphone</strong></h3>
                      <div id="texto_tarjeta">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit!</p>
                        <h4><strong>Precio:</strong>500$</p></h4>
                      </div>
                </div>
        
                <div id="tarjetas" class="col-sm-12 col-md-3 col-lg-3 text-center mb-4 ">
                      <img src="https://www.rogers.com/apple-images/watch/40mm-white-angle.png"   class="img-fluid" id="tarjetas_img">
                      <h3 class="mt-3 mb-3"><strong>Iphone</strong></h3>
                      <div id="texto_tarjeta">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit!</p>
                        <h4><strong>Precio:</strong>500$</p></h4>
                      </div>
                </div>

                </div>
              </div>
              <hr> 
            </div>   
      </div>
    <!-- Fin Tarjetas de reparacion-->


    <!--Formulario de contacto  /cambiar el action por watsapp-->
      <h3 id="titulo_contacto" class="text-center mt-5 mb-2">Formulario de Contacto</h3>
      <p id="contacto_texto" class="text-center mt-3 mb-3">Complete este formulario para contactarnos</p>
      
      <form action="" method="POST" class="form-inline" id="formulario_contacto">
        <div class="mb-3 col-sm-12">
          <label class="form-label text-center position-relative" for=""><strong> Contanos sobre tu dispositivo</strong></label>
          <select name="modelo" id="modelo" class="form-select" onchange="enviar(this.form)" required="" >
            <option value="">selecciona el modelo</option>
              <option value="Godzilla">opcion-1</option>
              <option value="King-kong">opcion-2</option>
              <option value="Gidora">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-12">
          <select name="problema" id="problema"  class="form-select" onchange="enviar(this.form)"  required="">
            <option value="">selecciona el problema</option>
            <option value="Bulbasur">opcion-1</option>
            <option value="Pikachu">opcion-2</option>
            <option value="Charizard">opcion-3</option>
          </select>
          <div class="invalid-feedback">Seleccione una opcion</div>
        </div>

        <div class="mb-3 col-sm-6 position-relative">
          <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" required="">
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Nombre</div>
        </div>


        <div class="mb-3 col-sm-3 position-relative">
          <input name="telefono" id="telefono" type="text" class="form-control" placeholder="telefono" required="">
          <div class="valid-tooltip">Campo Completado</div>
          <div class="invalid-tooltip">Ingrese un Numero de telefono</div>
        </div>

        <div class="mb-3 col-sm-3">
          <textarea class="form-control" name="mensaje" id="mensaje" rows="3" style="resize:none" placeholder="Dejanos un mensaje" required=""></textarea>        
        </div>
        <br>
        <input type="submit" id="boton_contacto" class="btn btn-primary" value="Enviar" >
      </form>

      <?php
        include "form_contacto.php";
      ?>
    <!--Fin Formulario de contacto-->

    <div class="container mt-4">
    <hr> 
      <!--inicio carrousel-->
        <h3 id="titulo_trabajos" class="  text-center text-center mt-5 mb-4">
          Trabajos Realizados
        </h3>
        
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

    <!--Inicio Formulario consulta-->
    
      <h3 id="titulo_dispositivo" class="text-center mt-5 mb-5">Ver estado de mi equipo</h3>
        
        <div id="form_divicion" class="col-12">
          <div class="formulario_consulta">
            <form action="#dispositivo" method="POST">

              <label for="">Codigo del Dispositivo</label>
              <input type="text" name="codigo" id="codigo" class="mb-4 form-control " placeholder="Ingrese el codigo de su Dispositivo">
              <br>
              <input type="submit" name="submit2" id="boton_consulta" class="btn btn-primary" value="Enviar">
            </form>
          </div>

          <?php
            include("form_consulta.php");
          ?>
        </div>
      </div>
      <hr>
    <!--Fin Formulario consulta-->
    

    <!--Inicio Sobre Nosotros-->
      <h3 id="titulo_nosotros" class="text-center mb-5 mt-4">Sobre Nosotros</h3>
      
      <div class="container mt-4 ">
        <div class="row" id="texto_imagen">
          <div id="quienes_somos_texto" >

          <h3 class="text-center mb-3"> <strong>¿Quienes Somos?</strong></h3>

            <p>Somos especialista en reparacion y servicio <br>
              tecnico de dispositivos Apple en Argentina. <br>
              Contamos con un laboratorio propio de <br>
              microelectronica, ademas de capacitacion permanente y<br>
              personal calificado. Trabajamos con los mejores <br>
              repuestos homologados, con amplio stock y un <br>
              servicio agil para que puedas contar con tus <br>
              dispositivos rapidamente. <br>
              Si buscas una solucion seria y confiable, te <br>
              esperamos. Solicita tu presupuesto y pone tu <br>
              dispositivos en manos de verdaderos <br>
              profecionales. <br>
            </p>
          </div>

          <div>
            <img src="img/appcell-2.jpg" class="img-fluid" id="imagen_appcell" >
          </div>

        </div>
      </div>  
    <!--Inicio Sobre Nosotros--> 

    <hr>
    <!--Inicio cuadros-->
      <h3 id="titulo_servicios" class="text-center mt-4">Te proporcionamos:</h3>
      
      <div id="cuadros" class=" mt-3" >
        <div class="row">

          <div id="cuadro_bg" class="text-center mt-3">
            <h4><img src="img/tabla-icono.png" width="40px"><strong> Presupuesto</strong></h4>
            <p>Sin compromiso</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
          </div>

          <div id="cuadro_bg" class="text-center mt-3">
            <h4><img src="img/herramientas-icono.png" width="40px"><strong> Descuento</strong></h4>
            <p>Multireparacion</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
          </div>

          <div id="cuadro_bg" class="text-center mt-3">
            <h4><img src="img/camion-icono.png" width="40px" alt="" srcset=""><strong> Recogida a domicilio</strong></h4>
            <p>Con seguro</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
          </div>

          <div id="cuadro_bg" class="text-center mt-3">
            <h4><img src="img/billetera-icono.png" width="40px" alt=""><strong> Realiza el pago</strong></h4>
            <p>Cuando este Reparado</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore nulla obcaecati velit saepe aut aspernatur maxime, temporibus eligendi ab. Voluptate totam nesciunt ex cum omnis quam! Est, dolorem a.</p>
          </div>
    <!--Fin cuadros-->
        </div>
      </div>
    </div>
  </div>

    <?php
      include "partes/footer.php";
    ?>
