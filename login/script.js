const loginForm= document.getElementById('formulario');

loginForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    const email=document.getElementById('email').value;
    const password= document.getElementById('password').value;

    const formData= new FormData();
    formData.append('email', email);
    formData.append('password', password);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success){
            window.location.href = '../admin/index.php';
        }
        else{
            alert('Contrseña o email incorrecto');
        }
    })
    .catch(error => {
        console.log(error);
        alert("ERROR en la solicitud: " + error);
    });
});






// let usuario= document.getElementById("email")
// let contrasenia= document.getElementById("contrasenia")
// let botonSubmit= document.getElementById("formulario")

// function data(){
//   let datos= new FormData(this)
//   datos.append("usuario", usuario.value)
//   datos.append("contrasenia", contrasenia.value)
//   fetch("login.php", {
//         method: "POST",
//         body: datos
//     }).then(Response => Response.json())
//     .then(({success}) => {
//       if(success === 1){
//         location.href= "homeLogin.php"
//       }
//       else{
//         swal.fire({
//           title: "error",
//           text: "Usuario no registrado",
//           icon: "error"
//         })
//       }
//     })
// }

// botonSubmit.addEventListener("submit", (e) => {
//   e.preventDefault()
//   data()
// })