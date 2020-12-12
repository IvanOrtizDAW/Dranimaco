<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../DISEÑO/CSS/estilosGaleria.css" type="text/css" />
  <script src="../../Scripts/JQUERY/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
  <link type="text/javascript" property='stylesheet' href="../../DISEÑO/Bootstrap/js/bootstrap.min.js" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="../../Imagenes/logo2.png" />
  <title>Pagina 3 de la galeria de imagenes de animacion y modelado 3D</title>
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
        <li class="menu">
          <a href="historia.php"> <i class="fas fa-book"></i> Historia</a>
        </li>
        <li class="menu">
          <a class="active href=#"> <i class="fas fa-camera-retro"></i> Galeria</a>
        </li>
        <li class="menu">
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Datos</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contacto/Sugerencia</a>
        </li>
        <li class="menu">
          <a href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutoriales </a><i
              class="fas fa-arrow-circle-down"></i>
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
        <li class="menu">
          <a href="../../Ingles/DENTRO/Galeria3.php"><img class="imagen-idioma" src="../../Imagenes/Ingles.png" alt=""/></a>
        </li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
  </header>

  <section>
    <div class="galeria">
      <h2>Galeria de imagenes</h2>

      <hr>

      <img src="../../Imagenes/Galeria/caja.jpg" alt="" />
      <img src="../../Imagenes/Galeria/android.gif" alt="" />
      <img src="../../Imagenes/Galeria/personaje5.jpg" alt="" />
      <img src="../../Imagenes/Galeria/ballena.jpeg" alt="" />
      <img src="../../Imagenes/Galeria/maquina.jpg" alt="" />
      <img src="../../Imagenes/Galeria/tren.png" alt="" />
      <img src="../../Imagenes/Galeria/avion.png" alt="" />
      <img src="../../Imagenes/Galeria/coche2.jpg" alt="" />
      <img src="../../Imagenes/Galeria/dinosaurio.png" alt="" />
      <img src="../../Imagenes/Galeria/robot3.jpg" alt="" />

      <br />
    </div>

    <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>
  </section>

  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="Galeria2.php">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="Galeria.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Galeria2.php">2</a></li>
    <li class="page-item active"><a class="page-link" href="#">3</a></li>
    <li class="page-item disabled">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Paginas</h2>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="historia.php">Historia</a></li>
          <li><a href="#">Galeria</a></li>
          <li><a href="datos.php">Datos</a></li>
          <li><a href="contacto.php">Contacto/Sugerencia</a></li>
          <li><a href="tutoriales.php">Tutoriales</a></li>
          <li><a href="../../wordpress/tienda">Tienda</a></li>
          <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Galeria</h2>
        <ul>
          <li><a href="Galeria.html">Página 1</a></li>
          <li><a href="Galeria2.html">Página 2</a></li>
          <li><a href="#">Página 3</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Tutoriales</h2>
        <ul>
          <li><a href="basico.php">Basico</a></li>
          <li><a href="medio.php">Medio</a></li>
          <li><a href="experto.php">Experto</a></li>
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
    <a href=http://localhost/dranimaco/Espa%C3%B1ol/FUERA/inicioSesion.php>Inicio de sesión</a>
    </p> ";
    echo "<p>Registrese si no tiene cuenta
    <br>
    <a href=http://localhost/dranimaco/Espa%C3%B1ol/FUERA/Registro.php>Registro</a>
    <p> ";
    echo "<img class=denegado-img image-responsive src=../../Imagenes/logoDenegado.PNG>";
    echo "</div>";
  }

?>
</body>

</html>
