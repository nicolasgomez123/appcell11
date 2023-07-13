//Codigo formulario de consulta
document.getElementById('contact-form').addEventListener('submit', function(event) {
event.preventDefault(event); // Evitar el envío del formulario
  
    // Obtener los valores de los campos del formulario
    var modelo = document.getElementById("modelo").value;
    var problema = document.getElementById("problema").value;
    var nombre = document.getElementById("nombre").value;
    var mensaje = document.getElementById("mensaje").value;
  
    // Validar los campos (opcional)
  
    // Crear el objeto de datos a enviar
    var data = new FormData(this);
    data.append("modelo", modelo);
    data.append("problema", problema);
    data.append("nombre", nombre);
    data.append("mensaje", mensaje);
  
    // Enviar la solicitud mediante fetch
    fetch("formContacto.php", {
      method: "POST",
      body: data
    })
      .then(function(response) {
        return response.json();
      })
      .then(function(responseData) {
        if (responseData.success) {
          document.getElementById("success-message").textContent = responseData.message;
          document.getElementById("contact-form").reset();
        } else {
          alert("Error al enviar el formulario");
        }
      })
      .catch(function(error) {
        console.log(error);
        alert("Error en la solicitud");
      });
  });
//Fin Codigo formulario de consulta

// function para font awesome
function lanzarAlerta(title, text, icon){
    swal.fire({
        title: title,
        text: text,
        icon: icon
    })
}

//Codigo Ejecutar Modal consulta
//Cerrar Modal 
let closeModal = document.getElementById('modalData');
let botonCerrar = document.querySelector("#modalData .close");

botonCerrar.addEventListener("click", function() {
    let modal = bootstrap.Modal.getInstance(closeModal);
    modal.hide();
});
//Fin Cerrar Modal 

document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    let formData = new FormData(this);

    fetch('codigoConsulta.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Error en la solicitud: ' + response.status);
        }
        return response.json();
    })
    .then(function(data) {
        let modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = '';

        if (data.mensaje) {
            // Mostrar mensaje de error
            let mensajeError = document.createElement('p');
            mensajeError.innerText = data.mensaje;
            modalContent.appendChild(mensajeError);
        } else {
            // Mostrar datos del cliente
            let cliente = document.createElement('p');
            cliente.innerText = 'Cliente: ' + data.cliente;
            modalContent.appendChild(cliente);

            let estado = document.createElement('p');
            estado.innerText = 'Estado del celular: ' + data.estado;
            modalContent.appendChild(estado);
        }

        // Abrir el modal
        let modal = new bootstrap.Modal(document.getElementById('modalData'));
        modal.show();
    })
    .catch(function(error) {
        console.log('Error: ', error);
    });
});
//Fin codigo Ejecutar Modal consulta

//inicio codigo Navbar
const toggleBtn= document.querySelector('.toggle_btn')
const toggleBtnIcon= document.querySelector('.toggle_btn i')
const dropDownMenu= document.querySelector('.dropdown_menu')

toggleBtn.onclick= function(){
  dropDownMenu.classList.toggle('open')
  const isOpen= dropDownMenu.classList.contains('open')
  
  toggleBtnIcon.classList= isOpen 
  ? 'fas fa-bars'
  : 'fas fa-bars'
}
//Fin codigo Navbar

//Inicio Carrousel
const sliderContainer= document.querySelector('.container-slider')
const slide= document.querySelector('.slides')
const nextBtn= document.getElementById('next-btn')
const prevBtn= document.getElementById('prev-btn')
const interval= 3000

let slides= document.querySelectorAll('.slide')
let index= 1
let slideId

const firstClone= slides[0].cloneNode(true)
const lastClone= slides[slides.length - 1].cloneNode(true)

firstClone.id= 'first-clone'
lastClone.id= 'last-clone'

slide.append(firstClone)
slide.prepend(lastClone)

const slideWidth= slides[index].clientWidth

slide.style.transform= `translateX(${-slideWidth * index}px)`


const startSlide = () =>{
  slideId= setInterval(() => {
    moveToNextSlide()
  }, interval)
}

const getSlides = ()=>(document.querySelectorAll('.slide'))

slide.addEventListener('transitionend', () => {
    slides= getSlides()
    if(slides[index].id === firstClone.id){
      slide.style.transition= 'none'
      index= 1
      slide.style.transform= `translateX(${-slideWidth * index}px)` 
    }

    if(slides[index].id === lastClone.id){
      slide.style.transition= 'none'
      index= slide.length - 2
      slide.style.transform= `translateX(${-slideWidth * index}px)` 
    }
})

const moveToNextSlide= () => {
    slides= getSlides()
    if(index >= slides.length -1) return;
    index++
    slide.style.transform= `translateX(${-slideWidth * index}px)` 
    slide.style.transition= '.7s'
}

const moveToPreviousSlide= () =>{
  if(index <= 0) return
    index--
    slide.style.transform= `translateX(${-slideWidth * index}px)` 
    slide.style.transition= '.7s'
}

sliderContainer.addEventListener('mouseenter', () => {
  clearInterval(slideId)
})

sliderContainer.addEventListener('mouseleave', startSlide)

nextBtn.addEventListener('click', moveToNextSlide)
prevBtn.addEventListener('click', moveToPreviousSlide)

startSlide()
//Fin Carrousel

//Inicio Card-modal-Tarjetas de reparacion
let popupViews= document.querySelectorAll('.popup-view')
let poupBtns= document.querySelectorAll('.popup-btn')
let closeBtn= document.querySelectorAll('.close-btn')

let popup= function(popupClick){
  popupViews[popupClick].classList.add('active')
}

poupBtns.forEach((poupBtn, i) => {
  poupBtn.addEventListener("click", () => {
    popup(i)
  })
})

closeBtn.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () =>{
      popupViews.forEach((popupViews) => {
        popupViews.classList.remove('active')
      })
  })
})

window.onload = function() {
  const app = new App();
  window.app = app;
};

class App {
  constructor() {
    this.track = document.querySelector('#track');
    this.carruselList = document.querySelector('#carrusel-list');

    this.carruselList.addEventListener('click', (event) => {
      if (event.target.classList.contains('carrusel-arrow')) {
        this.processingButton(event);
      }
    });
  }

  processingButton(event) {
    const btn = event.target;
    const carrusel = this.track.querySelectorAll('.carrusel2');

    const trackWidth = this.track.offsetWidth;
    const carruselWidth = carrusel[0].offsetWidth;
    const listWidth = this.carruselList.offsetWidth;

    let leftPosition = parseFloat(this.track.style.left) || 0;
    if (btn.dataset.button === "button-prev") {
      this.prevAction(leftPosition, carruselWidth);
    } else {
      this.nextAction(leftPosition, trackWidth, listWidth, carruselWidth);
    }
  }

  prevAction(leftPosition, carruselWidth) {
    if (leftPosition < 0) {
      this.track.style.left = `${leftPosition + carruselWidth}px`;
    }
  }

  nextAction(leftPosition, trackWidth, listWidth, carruselWidth) {
    if (leftPosition > (listWidth - trackWidth)) {
      this.track.style.left = `${leftPosition - carruselWidth}px`;
    }
  }
}
//Fin Card-modal-Tarjetas de reparacion
