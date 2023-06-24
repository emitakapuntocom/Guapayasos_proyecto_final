document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los botones
    
    var usuarioBtn = document.getElementById("usuarioBtn");
    var administradorBtn = document.getElementById("administradorBtn");
    var moderadorBtn = document.getElementById("moderadorBtn");
    var crearCuentaBtn = document.getElementById("crearCuentaBtn");
    var EnviarBtn = document.getElementById("submit");

    // Agrega controladores de eventos a los botones

    usuarioBtn.addEventListener("click", function() {
      window.location.href = "usuario.html";
    });
  
    administradorBtn.addEventListener("click", function() {
      window.location.href = "administrador.html";
    });
  
    moderadorBtn.addEventListener("click", function() {
      window.location.href = "moderador.html";
    });
  
    crearCuentaBtn.addEventListener("click", function() {
      // Redirige al index.html
      window.location.href = "../templates/crearcuenta.html";
    });

    //Muestra los mensajes enviados desde Registros.php en forma de alerts
    EnviarBtn.addEventListener("click", () => {
      fetch("../dynamics/php/Registros.php")
      .then((respuesta) => {
          return respuesta.json();
          }).then((datosJSON)=> {
              alert(datosJSON.mensaje);
          });
          
          console.log(respuesta.json());
    });
     
});