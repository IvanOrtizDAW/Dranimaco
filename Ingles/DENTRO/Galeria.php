<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../DISEÑO/CSS/estilosGaleria.css" type="text/css" />
  <script src="../../Scripts/JQUERY/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
  <link type="text/javascript"  property='stylesheet' href="../../DISEÑO/Bootstrap/js/bootstrap.min.js" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="../../Imagenes/logo2.png" />
  <title>Page 1 of the gallery of images of animation and 3D modeling</title>
  <style>
    .galeria {
      text-align: center;
      background-color: white;
    }
  </style>
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
 

          echo "<li class=bienvenido>Member: ".$_SESSION['usuario']."</li>";
          
          ?>

        <li class="menu">
          <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="menu">
          <a href="historia.php"> <i class="fas fa-book"></i> History</a>
        </li>
        <li class="menu">
          <a class="active" href="#"> <i class="fas fa-camera-retro"></i> Gallery</a>
        </li>
        <li class="menu">
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Data</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contact/Suggestion</a>
        </li>
        <li class="menu">
          <a href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutorials </a><i
              class="fas fa-arrow-circle-down"></i>
          <ul>
            <li class="menu2">
              <a href="basico.php"><i class="fas fa-play-circle"></i> Basic</a>
            </li>
            <li class="menu2">
              <a href="medio.php"><i class="fas fa-play-circle"></i> Middle</a>
            </li>
            <li class="menu2">
              <a href="experto.php"><i class="fas fa-play-circle"></i> Expert</a>
            </li>
          </ul>
        </li>
        <li class="menu">
          <a href="../../wordpress/shop"><i class="fas fa-shopping-cart"></i> Store</a>
        </li>
        <li class="menu">
          <a href="cerrarSesion.php"><i class="far fa-times-circle"></i> Sign off</a>
        </li>
        <li class="menu">
          <a href="../../Español/DENTRO/Galeria.php"><img class="imagen-idioma" src="../../Imagenes/Español.png"
              alt="" /></a>
        </li>

        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

  </header>

  <section>
    <div class="galeria">
      <h2>Image gallery</h2>

      <hr>

      <img src="../../Imagenes/Galeria/cohete.jpg" alt="" />
      <img src="../../Imagenes/Galeria/robot.jpg" alt="" />
      <img src="../../Imagenes/Galeria/robot2.jpg" alt="" />
      <img src="../../Imagenes/Galeria/saludo.gif" alt="" />
      <img src="../../Imagenes/Galeria/desayuno.jpg" alt="" />
      <img src="../../Imagenes/Galeria/nube.jpg" alt="" />
      <img src="../../Imagenes/Galeria/personaje.jpg" alt="" />
      <img src="../../Imagenes/Galeria/coche.jpg" alt="" />
      <img src="../../Imagenes/Galeria/astronauta.jpg" alt="" />
      <img src="../../Imagenes/Galeria/camara.jpg" alt="" />

      <br />
    </div>

    <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>
  </section>

  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="Galeria2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Galeria3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="Galeria2.php">Next</a>
    </li>
  </ul>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Paginas</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="historia.php">History</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="datos.php">Data</a></li>
          <li><a href="contacto.php">Contact/Suggestion</a></li>
          <li><a href="tutoriales.php">Tutorials</a></li>
          <li><a href="../../wordpress/tienda">Store</a></li>
          <li><a href="cerrarSesion.php">Sign off</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Gallery</h2>
        <ul>
          <li><a href="#">Page 1</a></li>
          <li><a href="Galeria2.php">Page 2</a></li>
          <li><a href="Galeria3.php">Page 3</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Tutorials</h2>
        <ul>
          <li><a href="basico.php">Basic</a></li>
          <li><a href="medio.php">Middle</a></li>
          <li><a href="experto.php">Expert</a></li>
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
        <li><a href="terminosCondiciones.html" target="_blank">Terms &amp; Conditions</a></li>
        <li><a href="politicaPrivacidad.html" target="_blank">Privacy Policy</a></li>
        <li>&copy; 2020 Copyright</li>
      </ul>
    </div>
  </footer>
  <script src="../../Scripts/menuHamburgesa.js"></script>

  <?php 

  }else{
    echo "<div class=denegado>";
    echo "<h1>Access denied</h1>";
    echo "<br>";
    echo "<p>Log in again
    <br>
    <a href=http://localhost/dranimaco/Ingles/FUERA/inicioSesion.php>Login</a>
    </p> ";
    echo "<p>Register if you don't have an account
    <br>
    <a href=http://localhost/dranimaco/Ingles/FUERA/Registro.php>Registry</a>
    <p> ";
    echo "<img class=denegado-img image-responsive src=../../Imagenes/logoDenegado.PNG>";
    echo "</div>";
  }

?>
</body>

</html>
