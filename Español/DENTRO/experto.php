<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../DISEÑO/CSS/estilosTutoriales.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link rel="icon" type="image/png" href="../../Imagenes/logo2.png">
  <title>Pagina de tutoriales expertos de Dranimaco</title>
</head>

<body>
  <?php
     session_start();
  
  if(isset($_SESSION['usuario'])){?>
  <header>
    <nav class="menu-navegacion">
      <ul>
        <li><img src="../../Imagenes/logo.PNG" alt="logo de Dranimaco" /></li>
        <li class="logo">DRANIMACO</li>

        <?php


          echo "<li class=bienvenido>Usuario: ".$_SESSION['usuario']."</li>";
          
          ?>

        <li class="menu">
          <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        </li>
        <li class="menu"><a href="historia.php"> <i class="fas fa-book"></i> Historia</a></li>
        <li class="menu"><a href="Galeria.php"> <i class="fas fa-camera-retro"></i> Galeria</a></li>
        <li class="menu">
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Datos</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contacto/Sugerencia</a>
        </li>
        <li class="menu">
          <a class="active" href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutoriales <i
              class="fas fa-arrow-circle-down"></i></a>
          <ul>
            <li class="menu2">
              <a href="basico.php"><i class="fas fa-play-circle"></i> Basico</a>
            </li>
            <li class="menu2">
              <a href="medio.php"><i class="fas fa-play-circle"></i> Medio</a>
            </li>
            <li class="menu2">
              <a href="experto.php"><i class="fas fa-play-circle"></i> Experto</a>
            </li>
          </ul>
        </li>
        <li class="menu">
          <a href="../../wordpress/shop"><i class="fas fa-shopping-cart"></i> Tienda</a>
        </li>
        <li class="menu">
          <a href="cerrarSesion.php"><i class="far fa-times-circle"></i> Cerrar sesion</a>
        </li>
        <li class="menu"><a href="../../Ingles/DENTRO/experto.php"><img class="imagen-idioma"
              src="../../Imagenes/Ingles.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
  </header>

  <br>
  <div class="enlace-tutoriales">
    <i class="fas fa-arrow-circle-left"></i><a href="tutoriales.php">Volver a la pagina de tutoriales</a>
  </div>

  <section>
    <h5 class="nuevo"><i class="fas fa-gift"></i> ¡¡¡NUEVO!!!</h5>
    <h5>🚀 Introducción a Blender para escenarios. Clase 1 (en vivo)</h5>
    <div class="tutoriales-experto">
      <iframe class="video" src="https://www.youtube.com/embed/aYelpU4n4hQ"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h5>Modelado Escenario Low poly Blender 2.8 Español Principiante</h5>
    <div class="tutoriales-experto">
      <iframe class="video" src="https://www.youtube.com/embed/qT0uUjJXDx4" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h5>Creando un Bosque Magico en Blender - Timelapse</h5>
    <div class="tutoriales-experto">
      <iframe class="video" src="https://www.youtube.com/embed/qNqNvffW7GQ" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>

  </section>

  <h5>Más tutoriales</h5>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">Anterior</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="Galeria2.html">2</a></li>
    <li class="page-item"><a class="page-link" href="Galeria3.html">3</a></li>
    <li class="page-item">
      <a class="page-link" href="Galeria2.html">Siguiente</a>
    </li>
  </ul>

  <div class="enlace-tutoriales">
    <i class="fas fa-arrow-circle-left"></i><a href="tutoriales.php">Volver a la pagina de tutoriales</a>
  </div>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Paginas</h2>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="historia.php">Historia</a></li>
          <li><a href="Galeria.php">Galeria</a></li>
          <li><a href="datos.php">Datos</a></li>
          <li><a href="contacto.php">Contacto/Sugerencia</a></li>
          <li><a href="#">Tutoriales</a></li>
          <li><a href="../../wordpress/tienda">Tienda</a></li>
          <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Galeria</h2>
        <ul>
          <li><a href="Galeria.php">Pagina 1</a></li>
          <li><a href="Galeria2.php">Pagina 2</a></li>
          <li><a href="Galeria3.php">Pagina 3</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Tutoriales</h2>
        <ul>
          <li><a href="basico.php">Basico</a></li>
          <li><a href="medio.php">Medio</a></li>
          <li><a href="#">Experto</a></li>
        </ul>
      </div>
    </section>

    <!-- Footer social -->
    <div class="ft-social">
      <ul class="ft-social-list">
        <li>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
      </div>

    <!-- Footer legal -->
    <div class="ft-legal">
      <ul class="ft-legal-list">
        <li><a href="terminosCondiciones.html" target="_blank">Terminos &amp; Condiciones</a></li>
        <li><a href="politicaPrivacidad.html" target="_blank">Politica de privacidad</a></li>
        <li>&copy; 2020 Copyright</li>
      </ul>
      </div>
  </footer>
  <script src="../../Scripts/menuHamburgesa.js"></script>
  <?php 

  }else{
    echo "<div class=denegado>";
    echo "<h1>Acceso denegado</h1>";
    echo "<br>";
    echo "<p>Vuelva a iniciar sesión
    <br>
    <a href=http://dranimaco.com/Espa%C3%B1ol/FUERA/inicioSesion.php>Inicio de sesión</a>
    </p> ";
    echo "<p>Registrese si no tiene cuenta
    <br>
    <a href=http://dranimaco.com/Espa%C3%B1ol/FUERA/Registro.php>Registro</a>
    <p> ";
    echo "<img class=denegado-img image-responsive src=../../../../Imagenes/logoDenegado.PNG>";
    echo "</div>";
  }

?>
</body>

</html>
