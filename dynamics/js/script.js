document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los botones
    
    var usuarioBtn = document.getElementById("usuarioBtn");
    var administradorBtn = document.getElementById("administradorBtn");
    var moderadorBtn = document.getElementById("moderadorBtn");
  
    // Agrega controladores de eventos a los botones

    usuarioBtn.addEventListener("click", function() {
      window.location.href = "../templates/usuario.html";
    });
  
    administradorBtn.addEventListener("click", function() {
      window.location.href = "../templates/administrador.html";
    });
  
    moderadorBtn.addEventListener("click", function() {
      window.location.href = "../templates/moderador.html";
    });
  
});