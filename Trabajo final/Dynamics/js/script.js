document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los botones
    
    var usuarioBtn = document.getElementById("usuarioBtn");
    var administradorBtn = document.getElementById("administradorBtn");
    var moderadorBtn = document.getElementById("moderadorBtn");
  
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
  
});