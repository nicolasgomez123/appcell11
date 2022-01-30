
 
  <footer class="text-center footer-style mt-5">
    
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 footer-col">
          <h3>Contactanos</h3>
          <p>
          Telefonos: 011 4551-4496 / 011 4551-4479 <br>
          Email: info@superservicesrl.com.ar
          </p>
        </div>

        <div class="col-md-4 footer-col">
          <h3>Nuestra Redes</h3>
          <ul class="list-inline">
            <li>
              <a href=""><img src="img/facebook-icono.png" width="50px" alt="" srcset=""></a>
            </li>

            <li>
              <a href=""><img src="img/whatsapp-icono.png" width="50px" alt="" srcset=""></a>            
            </li>

            <li>
              <a href=""><img src="img/instagram-icono.png" width="50px" alt="" srcset=""></a>            
            </li>

          </ul>
        </div>
        <div class="col-md-4 footer-col">
          <h3>Formas De Pago</h3>
          <p>Efectivo</p>
          <p>Tarjetas de devito o credito</p>
        </div>
      </div>
    </div>
</footer>
  
      


    <!-- Bootstrap JavaScript Libraries -->  
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--j query-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--inclucion del cdn del carusell -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!--Validacion del formulario-->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>

    <!--OWl-carousel-->
    <script>
          $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:[
          "<i class='fas fa-angle-left  flecha'></i>",
          "<i class='fas fa-angle-right flecha'></i>"
        ],
            
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    </script>
    
  </body>
</html>