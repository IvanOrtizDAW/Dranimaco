<!DOCTYPE html>
<html lang="en">

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
  <title>Dranimaco Basic Tutorials Page</title>
</head>

<body>
  <?php
     session_start();
  
  if(isset($_SESSION['usuario'])){?>
  <header>
    <nav class="menu-navegacion">
      <ul>
        <li><img src="../../Imagenes/logo.PNG" alt="Dranimaco logo" /></li>
        <li class="logo">DRANIMACO</li>

        <?php
 
          echo "<li class=bienvenido>Member: ".$_SESSION['usuario']."</li>";
          
          ?>

        <li class="menu">
          <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="menu"><a href="historia.php"> <i class="fas fa-book"></i> History</a></li>
        <li class="menu">
          <a href="Galeria.php"><i class="fas fa-camera-retro"></i> Gallery</a>
        </li>
        <li class="menu">
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Data</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contact/Suggestion</a>
        </li>
        <li class="menu">
          <a class="active" href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutorials </a><i
              class="fas fa-arrow-circle-down"></i>
          <ul>
            <li class="menu2">
              <a href="#"><i class="fas fa-play-circle"></i> Basic</a>
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
        <li class="menu"><a href="../../Español/DENTRO/basico.php"><img class="imagen-idioma"
              src="../../Imagenes/Español.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

  </header>

  <br>

  <div class="enlace-tutoriales">
    <i class="fas fa-arrow-circle-left"></i><a href="tutoriales.php">Back to the tutorials page</a>
  </div>


  <section>
    <h5 class="nuevo"><i class="fas fa-gift"></i> ¡¡¡NEW!!!</h5>
    <h5>Blender Tutorial: Soccer Ball with Stitching</h5>
    <div class="tutoriales-basicos">
      <iframe class="video" src="https://www.youtube.com/embed/AYC69tt-KMI"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h5>How To Model A Cup Really Easily Using Blender 2.8 (Beginner Tutorial)</h5>
    <div class="tutoriales-basicos">
      <iframe class="video" src="https://www.youtube.com/embed/G_NOA4zeRU0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h5>Blender basic chair Tutorial for beginners</h5>
    <div class="tutoriales-basicos">
      <iframe class="video" src="https://www.youtube.com/embed/Bp2LdaHfE2c"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>


  </section>

  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>

  <div class="enlace-tutoriales">
    <i class="fas fa-arrow-circle-left"></i><a href="tutoriales.php">Back to the tutorials page</a>
  </div>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Pages</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="historia.php">History</a></li>
          <li><a href="Galeria.php">Gallery</a></li>
          <li><a href="datos.php">Data</a></li>
          <li><a href="contacto.php">Contact/Suggestion</a></li>
          <li><a href="tutoriales.php">Tutorials</a></li>
          <li><a href="../../Magento">Store</a></li>
          <li><a href="cerrarSesion.php">Sign off</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Gallery</h2>
        <ul>
          <li><a href="Galeria.php">Page 1</a></li>
          <li><a href="Galeria2.php">Page 2</a></li>
          <li><a href="Galeria3.php">Page 3</a></li>
        </ul>
      </div>
      <div class="ft-main-item">
        <h2 class="ft-title">Tutorials</h2>
        <ul>
          <li><a href="#">Basic</a></li>
          <li><a href="medio.php">Medium</a></li>
          <li><a href="exprto.php">Expert</a></li>
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
