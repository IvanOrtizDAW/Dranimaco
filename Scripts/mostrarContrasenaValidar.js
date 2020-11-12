var boton2 = document.getElementById("boton2");
var input2 = document.getElementById("pass-validar");
boton2.addEventListener("click", mostrar2);

function mostrar2() {
  if ((input2.type = "password")) {
    input2.type = "text";
    boton2.style = "color:#393e46;";

    setTimeout("ocultar2()", 2500);
  } else {
    input2.type = "password";
    boton2.style = "color:#00adb5;";
  }
}

function ocultar2() {
  input2.type = "password";
  boton2.style = "color:#00adb5;";
}
