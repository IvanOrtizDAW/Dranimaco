var boton = document.getElementById("boton");
var input = document.getElementById("pass");
boton.addEventListener("click", mostrar);

function mostrar() {
  if ((input.type = "password")) {
    input.type = "text";
    boton.style = "color:#393e46;";

    setTimeout("ocultar()", 2500);
  } else {
    input.type = "password";
    boton.style = "color:#00adb5;";
  }
}

function ocultar() {
  input.type = "password";
  boton.src = "../../Imagenes/ojo.png";
  boton.style = "color:#00adb5;";
}
