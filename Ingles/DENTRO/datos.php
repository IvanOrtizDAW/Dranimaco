<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../DISEÑO/CSS/estilosDatos.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
  <link rel="icon" type="image/png" href="../../Imagenes/logo2.png">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <title>Dranimaco data</title>

  <style>
    .list-group-item.active {
      background-color: #00adb5;
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
          <a href="Galeria.php"> <i class="fas fa-camera-retro"></i> Gallery</a>
        </li>
        <li class="menu">
          <a class="active" href="#"><i class="fas fa-globe-europe"></i> Data</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contact/Suggestion</a>
        </li>
        <li class="menu">
          <a href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutorials <i
              class="fas fa-arrow-circle-down"></i></a>
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
        <li class="menu"><a href="../../Español/DENTRO/datos.php"><img class="imagen-idioma"
              src="../../Imagenes/Español.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

  </header>

  <section>

    <div class="mapa">

      <h2>Our data on the sales of 3D modeling and animation products</h2>
      <img src="../../Imagenes/globo.jpg" class="planeta" alt="imagen planeta datos">

      <p>Every time we sell our products around the world because
        since it is one of our main objectives, that is why we allow to change languages.
        We show on this page our data of the 5 countries in which it is sold the most of
        our products in the 3D modeling and aniamtion categories. We will update this data
        and we also want to improve this page with an interactive map and more details.</p>
      <br>
      <h4>Top 5 countries in purchases of 3D animation products</h4>
      <div class="tablas">
        <table>
          <thead>
            <tr>
              <th>Country</th>
              <th>Number of sales</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Spain <img src="../../Imagenes/Datos/españa.png" alt=""> </td>
              <td>23</td>
            </tr>
            <tr>
              <td>United States <img src="../../Imagenes/Datos/usa.png" alt=""> </td>
              <td>14</td>
            </tr>
            <tr>
              <td>United Kingdom <img src="../../Imagenes/Datos/uk.png" alt=""> </td>
              <td>9</td>
            </tr>
            <tr>
              <td>France <img src="../../Imagenes/Datos/francia.png" alt=""> </td>
              <td>5</td>
            </tr>
            <tr>
              <td>Japan <img src="../../Imagenes/Datos/japon.png" alt=""> </td>
              <td>4</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h4>Most sold product of each 3D animation country</h4>
      <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-3">
            <div class="list-group">
              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#panel1">Spain <img
                  src="../../Imagenes/Datos/españa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel2">United States <img
                  src="../../Imagenes/Datos/usa.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel4">United Kingdom <img
                  src="../../Imagenes/Datos/uk.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel3">France <img
                  src="../../Imagenes/Datos/francia.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel5">Japan <img
                  src="../../Imagenes/Datos/japon.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="panel1">
                <img src="../../Imagenes/Tienda/productos/Animacion_3D/Animales/mosasaurio.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel2">
                <img src="../../Imagenes/Tienda/productos/Animacion_3D/Comida_&_Bebida/pizza.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel3">
                <img src="../../Imagenes/Tienda/productos/Animacion_3D/Animales/mosasaurio.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel4">
                <img src="../../Imagenes/Tienda/productos/Animacion_3D/Comida_&_Bebida/pizza.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel5">
                <img src="../../Imagenes/Tienda/productos/Animacion_3D/Naturaleza/fogata.gif" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <h4>Best selling product of each 3D modeling country</h4>
      <div class="tablas">
        <table>
          <thead>
            <tr>
              <th>Country</th>
              <th>Number of sales</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Spain <img src="../../Imagenes/Datos/españa.png" alt=""> </td>
              <td>14</td>
            </tr>
            <tr>
              <td>China <img src="../../Imagenes/Datos/china.png" alt=""> </td>
              <td>9</td>
            </tr>
            <tr>
              <td>United States <img src="../../Imagenes/Datos/usa.png" alt=""> </td>
              <td>6</td>
            </tr>
            <tr>
              <td>South Korea <img src="../../Imagenes/Datos/coreasur.png" alt=""> </td>
              <td>4</td>
            </tr>
            <tr>
              <td>Germany <img src="../../Imagenes/Datos/alemania.png" alt=""> </td>
              <td>2</td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <h4>Top 5 countries in purchases of 3D modeling products</h4>
      <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-3">
            <div class="list-group">
              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#panel6">Spain <img
                  src="../../Imagenes/Datos/españa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel7">China <img
                  src="../../Imagenes/Datos/china.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel8">United States <img
                  src="../../Imagenes/Datos/usa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel9">South Korea <img
                  src="../../Imagenes/Datos/coreasur.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel10">Germany <img
                  src="../../Imagenes/Datos/alemania.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="panel6">
                <img src="../../Imagenes/Tienda/productos/Modelado_3D/Comida_&_bebida/burger.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel7">
                <img src="../../Imagenes/Tienda/productos/Modelado_3D/Naturaleza/casa.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel8">
                <img src="../../Imagenes/Tienda/productos/Modelado_3D/Comida_&_bebida/burger.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel9">
                <img src="../../Imagenes/Tienda/productos/Modelado_3D/Animales/camaleon.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel10">
                <img src="../../Imagenes/Tienda/productos/Modelado_3D/Vehiculos/barco.PNG" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

        </div>

      <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>

  </section>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Pages</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="historia.php">History</a></li>
          <li><a href="Galeria.php">Gallery</a></li>
          <li><a href="#">Data</a></li>
          <li><a href="contacto.php">Contact/Suggestion</a></li>
          <li><a href="tutoriales.php">Tutorials</a></li>
          <li><a href="../../wordpress/tienda">Store</a></li>
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
          <li><a href="basico.php">Basic</a></li>
          <li><a href="medio.php">Middle</a></li>
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
    echo "<h1>Acceso denegado</h1>";
    echo "<br>";
    echo "<p>Vuelva a iniciar sesión
    <br>
    <a href=http://dranimaco.com/Ingles/FUERA/inicioSesion.php>Inicio de sesión</a>
    </p> ";
    echo "<p>Registrese si no tiene cuenta
    <br>
    <a href=http://dranimaco.com/Ingles/FUERA/Registro.php>Registro</a>
    <p> ";
    echo "<img class=denegado-img image-responsive src=../../../../Imagenes/logoDenegado.PNG>";
    echo "</div>";
  }

?>

</body>

</html>
