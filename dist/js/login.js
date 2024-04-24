let formularioLogin = document.getElementById("formularioLogin")

formularioLogin.addEventListener("submit", IniciarSesion)

function IniciarSesion(e) {
    e.preventDefault()

    let data = new FormData(formularioLogin)

    fetch("controllers/loginController.php", {
        method: 'POST',
        body: data
    })
    .then(respuesta => respuesta.text())
    .then(mensaje => {
        console.log(mensaje)
        if(mensaje == "ok") {
            window.location.href = "index.php"
        } else {
            alert("No se pudo iniciar sesión")
        }
    })
}