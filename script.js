// Obtiene el botón y el contenido
var verBoton = document.getElementById("ver");
var contenido = document.getElementById("contenido");

// Agrega un evento al botón que muestra el contenido de la canción seleccionada
verBoton.addEventListener("click", function() {
  var seleccion = document.getElementById("canciones").value;
  var xhr = new XMLHttpRequest();
  xhr.open("GET", seleccion, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      contenido.innerHTML = xhr.responseText;
    }
  };
  xhr.send();
});
