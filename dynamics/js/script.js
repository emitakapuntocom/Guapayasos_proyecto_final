document.addEventListener("DOMContentLoaded", () => {
    // Obtén referencias a los botones
    
    var usuarioBtn = document.getElementById("usuarioBtn");
    var administradorBtn = document.getElementById("administradorBtn");
    var moderadorBtn = document.getElementById("moderadorBtn");
    var crearCuentaBtn = document.getElementById("crearCuentaBtn");
    var EnviarBtn = document.getElementById("submit");

    //Agrega controladores de eventos a los botones
    if(usuarioBtn !== null)
    {
      usuarioBtn.addEventListener("click", function() {
        window.location.href = "../templates/usuario.html";
      });
    }
  
    if(administradorBtn !== null)
    {
      administradorBtn.addEventListener("click", function() {
        window.location.href = "../templates/administrador.html";
      });
    }
  
    if(moderadorBtn !== null)
    {
      moderadorBtn.addEventListener("click", function() {
        window.location.href = "../templates/moderador.html";
      });
    }
  
    if(crearCuentaBtn !== null)
    {
      crearCuentaBtn.addEventListener("click", function() {
      // Redirige al index.html
        window.location.href = "../templates/crearcuenta.html";
      });
    }

      let form = document.getElementById("form");

      if(form != null)
      {
        var hijos = form.querySelectorAll("input, select");
      }

      let datos = new FormData();
      
      const url = "../dynamics/php/Registros.php"
      if(EnviarBtn !== null && form != null)
      {
        EnviarBtn.addEventListener("click", () => {
            hijos.forEach(input => {
                if(input.id != "PFP")
                    datos.append(`${input.id}`, input.value);
                else
                    datos.append("PFP", input.files[0].name);
            });
            console.log("hola");
            fetch(url, {
                method: "POST",
                body: datos
            })
                .then(response => {
                    if (!response.ok) {
                        console.log("error")
                    }
                    return response.text();
                })
                .then(data => {
                    alert(data);
                });
    
        });
    }
     
});