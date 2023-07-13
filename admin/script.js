//Enviar los datos del modal editar
const btn_actualizar= document.getElementById("actualizar")

const formulario = document.getElementById("form_agregar");

let buscador= document.getElementById("buscador")


//----------------Mostrar Datos en tabla----------------------------
fetch("lista_clientes.php")
  .then((response) => {
    return response.json();
  })
  .then((datos) => {
    cargarDatos(datos);

    buscador.addEventListener("keypress", (e)=>{
      // console.log(buscador.value)
      filtrarBuscador(datos)
     })
     
    obj= datos
  }); 
 

function cargarDatos(arrayClientes) {
  let contenedor = document.getElementById("datosClientes");
  contenedor.innerHTML = "";

  arrayClientes.forEach(
    ({
      id,
      cliente,
      codigo,
      modelo,
      falla,
      observacion,
      fecha_ingreso,
      fecha_salida,
      precio,
      imei,
      estado,
    }) => {
      let tarjeta = document.createElement("tr");
      tarjeta.className = "tarjeta";

      tarjeta.innerHTML = `
        <td scope="row">${id}</td>
        <td scope="row">${cliente}</td>
        <td scope="row">${codigo}</td>
        <td scope="row">${modelo}</td>
        <td scope="row">${falla}</td>
        <td scope="row">${observacion}</td>
        <td scope="row">${fecha_ingreso}</td>
        <td scope="row">${fecha_salida}</td>
        <td scope="row">${precio}</td>
        <td scope="row">${imei}</td>
        <td scope="row">${estado}</td>
        <td>
          <a class="btn btn-primary" id="actualizar" onclick="editarModal(${id})" value="${id}">
            <i class="fa fa-edit"></i>
          </a>
        </td>
        <td>
          <button  class="btn btn-danger" id="borrar"  onclick="borrarCliente(event)" data-id="${id}">
            <i class="fa fa-trash"></i>
          </button>
        </td>
      `;

      contenedor.appendChild(tarjeta);
    }
  );
}

//boton buscar
let buscar= document.getElementById("buscar")
buscar.addEventListener("click", () => {
  filtrarBuscador(obj)
})


function filtrarBuscador(clientes){
  let arrayFiltrado= clientes.filter(({cliente}) => 
    cliente.includes(buscador.value.toLowerCase()))//cambiar por toUpperCase
    cargarDatos(arrayFiltrado)
}

function obtenerLista() {
  fetch("lista_clientes.php")
    .then((response) => response.json())
    .then((datos) => {
      cargarDatos(datos);
    });
}

//----------------Actualizar Datos----------------------------

btn_actualizar.addEventListener("click", function(e){
    e.preventDefault(); // Evitar el envío del formulario

    // Obtención de datos
    const id = document.getElementById("id").value;
    const cliente = document.getElementById("cliente").value;
    const codigo = document.getElementById("codigo").value;
    const modelo = document.getElementById("modelo").value;
    const falla = document.getElementById("falla").value;
    const observacion = document.getElementById("observacion").value;
    const fecha_ingreso = document.getElementById("fecha_ingreso").value;
    const fecha_salida = document.getElementById("fecha_salida").value;
    const precio = document.getElementById("precio").value;
    const imei = document.getElementById("imei").value;
    const estado = document.getElementById("estado").value;

    console.log(estado.value)
    // Validación de datos
    if (cliente === "" || codigo === "" || modelo === "" || falla === "") {
      alert("Ingrese todos los datos, por favor.");
      return;
    }

    fetch(`editar_cliente.php?id=${id}&opcion=modificar`, {
      method: "POST",
      body: JSON.stringify({
        id,
        cliente,
        codigo,
        modelo,
        falla,
        observacion,
        fecha_ingreso,
        fecha_salida,
        precio,
        imei,
        estado,
      }),
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((resultado) => {
        if (resultado.estado === true) {
          $("#modal-editar").modal("hide");

          // Muestra el modal si todo está bien
          lanzarAlerta("Solicitud exitosa", "La edición se realizó con éxito", "success")
          obtenerLista();
        } else {
          // Muestra el modal si hay un error
          lanzarAlerta("Ocurrió un error", "La edición no se realizó con éxito", "error")
        }
      });
  });

//traer los datos al modal editar
function editarModal(id) {
  // Abrir modal
  $("#modal-editar").modal("show");
  // Obtener datos del elemento
  fetch(`editar_cliente.php?id=${id}`)
    .then((response) => response.json())
    .then((elemento) => {
      // Rellenar el formulario
      document.getElementById("id").value = elemento[0].id;
      document.getElementById("cliente").value = elemento[0].cliente;
      document.getElementById("codigo").value = elemento[0].codigo;
      document.getElementById("modelo").value = elemento[0].modelo;
      document.getElementById("falla").value = elemento[0].falla;
      document.getElementById("observacion").value = elemento[0].observacion;
      document.getElementById("fecha_ingreso").value = elemento[0].fecha_ingreso;
      document.getElementById("fecha_salida").value = elemento[0].fecha_salida;
      document.getElementById("precio").value = elemento[0].precio;
      document.getElementById("imei").value = elemento[0].imei;
      document.getElementById("estado").value = elemento[0].estado;
    });
}

//----------------Mostrar alerta----------------------------
function lanzarAlerta(title, text, icon){
  swal.fire({
      title,
      text,
      icon
  })
}


//-------------Borrar usuario--------------------

function borrarCliente(event) {
  const button = event.target;
  // Obtener el ID del cliente del atributo "data-id" del botón
  const id = button.getAttribute("data-id");

  // Confirmar la eliminación con el usuario
  //if (confirm("¿Estás seguro de que deseas eliminar este cliente?")) {
  // }
  Swal
    .fire({
        title: "¿Eliminar cliente?",
        text: "¿Estás seguro de que deseas eliminar este cliente?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
    })
    .then(resultado => {
      if (resultado.value) {
      
    // Enviar una solicitud fetch para eliminar el cliente
    fetch('eliminar_cliente.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
    })
      .then(response => response.json())
      .then(data => {
        // Hacer algo con la respuesta del servidor, si es necesario
        console.log(data);

        // Mostrar una alerta si el cliente se eliminó correctamente
        if (data.success) {
          lanzarAlerta("Cliente eliminado", "El cliente ha sido eliminado correctamente", "success");
          obtenerLista(); // Actualizar la lista de clientes después de la eliminación
        } else {
          lanzarAlerta("Error", "No se pudo eliminar el cliente", "error");
        }
      })
      .catch(error => {
        console.error(error);
        lanzarAlerta("Error", "Ocurrió un error al procesar la solicitud", "error");
      });
        // Hicieron click en "Sí"
        console.log("*se elimina la venta*");
      } else {
          // Dijeron que no
          console.log("*NO se elimina la venta*");
      }
  });
  
}

//----------------Agregar nuevo usuario------------------------------
formulario.addEventListener("submit", (event) => {
  event.preventDefault()
  // Crear objeto FormData
  const formData = new FormData(document.getElementById('form_agregar'))
  // Obtener los datos del formulario
  const cliente = document.getElementById("modal-cliente").value;
  const codigo = document.getElementById("modal-codigo").value;
  const modelo = document.getElementById("modal-modelo").value;
  const falla = document.getElementById("modal-falla").value;
  const observacion = document.getElementById("modal-observacion").value;
  const fecha_ingreso = document.getElementById("modal-fecha_ingreso").value;
  const fecha_salida = document.getElementById("modal-fecha_salida").value;
  const precio = document.getElementById("modal-precio").value;
  const imei = document.getElementById("modal-imei").value;
  const estado = document.getElementById("modal-estado").value
  // Agregar los datos al objeto FormData
  formData.append('modal-cliente', cliente);
  formData.append('modal-codigo', codigo);
  formData.append('modal-modelo', modelo);
  formData.append('modal-falla', falla);
  formData.append('modal-observacion', observacion);
  formData.append('modal-fecha_ingreso', fecha_ingreso);
  formData.append('modal-fecha_salida', fecha_salida);
  formData.append('modal-precio', precio);
  formData.append('modal-imei', imei);
  formData.append('modal-estado', estado)
  // console.log(formData.get('modal-cliente'));
  // console.log(formData.get('modal-codigo'));
  // console.log(formData.get('modal-modelo'));

  // Deshabilitar el botón mientras se envían los datos
  agregar.disabled = true
  // Enviar los datos mediante una solicitud fetch
  fetch('agregar_cliente.php',{
    method:'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      // Hacer algo con la respuesta del servidor, si es necesario
      console.log(data)
      // Habilitar el botón nuevamente después de completar la solicitud
      agregar.disabled = false
      // Cerrar el modal si se ha agregado correctamente el cliente
      if (data.success) {
        $('#modal-insertar').modal('hide');
        // Muestra el modal si todo está bien
        lanzarAlerta("Solicitud exitosa", "Se agregó al usuario con éxito", "success");
        obtenerLista();
      } else {
        // Muestra el modal si hay un error
        lanzarAlerta("Solicitud fallida", "No se pudo agregar al usuario", "error");
      }
    })
    .catch(error => {
      // Manejar cualquier error de la solicitud
      console.error(error);
      // Habilitar el botón nuevamente en caso de error
      agregar.disabled = false;
    });
});




//---------------Filtrar estado--------------------------
// let inputOption= document.getElementsByClassName("input")

// for(const input of inputOption){
//   input.addEventListener("click", filtrarPorEstado)
// }

// function filtrarPorEstado(e){
//   let estados= []
//   for(const input of inputOption){
//     if(input.checked){
//       estados.push(input.id)
//     }
//   }
//   let arrayFiltrado= obj.filter(ob => estados.includes(ob.estado))
//   cargarDatos(arrayFiltrado.length > 0 ? arrayFiltrado : obj)
// }


let selectEstado = document.getElementById("estado");

selectEstado.addEventListener("change", filtrarEstado);

function filtrarEstado() {
  let estadoSeleccionado = selectEstado.value;
  
  if (estadoSeleccionado !== "") {
    let arrayFiltrado = obj.filter(ob => ob.estado === estadoSeleccionado);
    cargarDatos(arrayFiltrado);
  } else {
    cargarDatos(obj);
  }
}


//-------------Paginacion-----------------

// Ejemplo de uso
// Función para actualizar los controles de paginación
function actualizarControlesPaginacion(page, pageSize, total) {
    const anteriorElement = document.getElementById('anterior');
    const siguienteElement = document.getElementById('siguiente');
    const numPaginaElement = document.getElementById('numPagina');
  
    // Actualizar el número de página actual y el total de páginas
    numPaginaElement.textContent = `Página ${page} de ${Math.ceil(total / pageSize)}`;
  
    // Habilitar o deshabilitar el enlace de página anterior según corresponda
    if (page === 1) {
      anteriorElement.classList.add('disabled');
    } else {
      anteriorElement.classList.remove('disabled');
    }
  
    // Habilitar o deshabilitar el enlace de página siguiente según corresponda
    if (page === Math.ceil(total / pageSize)) {
      siguienteElement.classList.add('disabled');
    } else {
      siguienteElement.classList.remove('disabled');
    }
  
    // Asignar los manejadores de eventos a los enlaces de página anterior y siguiente
    anteriorElement.addEventListener('click', () => {
      if (page > 1) {
        cargarPagina(page - 1, pageSize);
      }
    });
  
    siguienteElement.addEventListener('click', () => {
      if (page < Math.ceil(total / pageSize)) {
        cargarPagina(page + 1, pageSize);
      }
    });
  }
  

//-------------Fin Paginacion-----------------

//-------------Inicio generado de codigo-----------------
let numeros= "0123456789"
let letras= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
let todo= numeros + letras

function generateRandomNumber() {
  let longitud= 15
  let password= ""
  for(let x = 0; x<longitud; x++){
    let aleatorio= Math.floor(Math.random() * todo.length)
    password += todo.charAt(aleatorio)
  }

  // Asigna el número aleatorio al input
  document.getElementById('modal-codigo').value = password;
}
//-------------Fin generado de codigo-----------------