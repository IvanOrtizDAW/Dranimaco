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

  <title>Datos de Dranimaco</title>
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
        <img src="../../Imagenes/logo.PNG" alt="logo de Dranimaco" />
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
          <a class="active href=" #"><i class="fas fa-globe-europe"></i> Datos</a>
        </li>
        <li class="menu">
          <a href="contacto.php"><i class="fas fa-phone"></i> Contacto/Sugerencia</a>
        </li>
        <li class="menu">
          <a href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutoriales <i
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
        <li class="menu"><a href="../../Ingles/DENTRO/datos.php"><img class="imagen-idioma"
              src="../../Imagenes/Ingles.png" alt="" width="5px" height="10px"></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
  </header>

  <section>


    <div class="mapa">

      <h2>Nuestros datos sobre la ventas de los productos de animacion y modelado 3D</h2>
      <img src="../../Imagenes/globo.jpg" class="planeta" alt="imagen planeta datos">

      <p>Cada vez vendemos nuestros productos alrededor del mundo debido
        a que es uno de nuestros principales objeitvos, por eso permitimos cambiar de idioma.
        Enseñamos en esta pagina nuestrosa datos de los 5 paises en lo que mas se vende de
        nuestros productos de la scategorias de modelado y aniamción 3D.Estos datos lo iremos actualizando
        y tambien queremos mejorar esta pagina con un mapa interactivo y mas detalles.</p>
      <br>
      <h4>Top 5 de paises en compras de productos de aniamción 3D</h4>
      <div id="tablas">
        <table>
          <thead>
            <tr>
              <th>Pais</th>
              <th>Numero de ventas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>España <img src="../../Imagenes/Datos/españa.png" alt=""> </td>
              <td>23</td>
            </tr>
            <tr>
              <td>Estados Unidos <img src="../../Imagenes/Datos/usa.png" alt=""> </td>
              <td>14</td>
            </tr>
            <tr>
              <td>Reino Unido <img src="../../Imagenes/Datos/uk.png" alt=""> </td>
              <td>9</td>
            </tr>
            <tr>
              <td>Francia <img src="../../Imagenes/Datos/francia.png" alt=""> </td>
              <td>5</td>
            </tr>
            <tr>
              <td>Japon <img src="../../Imagenes/Datos/japon.png" alt=""> </td>
              <td>4</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h4>Producto mas vendido de cada pais de animación 3D</h4>
      <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-3">
            <div class="list-group">
              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#panel1">España <img
                  src="../../Imagenes/Datos/españa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel2">Estados Unidos <img
                  src="../../Imagenes/Datos/usa.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel3">Francia <img
                  src="../../Imagenes/Datos/francia.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel4">Reino Unido <img
                  src="../../Imagenes/Datos/uk.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel5">Japon <img
                  src="../../Imagenes/Datos/japon.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="panel1">
                <img src="../../Imagenes/Tienda/productos/Animacion 3D/Animales/Untitled Project (5).gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel2">
                <img src="../../Imagenes/Tienda/productos/Animacion 3D/Comida & Bebida/pizza.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel3">
                <img src="../../Imagenes/Tienda/productos/Animacion 3D/Animales/Untitled Project (5).gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel4">
                <img src="../../Imagenes/Tienda/productos/Animacion 3D/Comida & Bebida/pizza.gif" alt="">
              </div>
              <div class="tab-pane fade" id="panel5">
                <img src="../../Imagenes/Tienda/productos/Animacion 3D/Naturaleza/Untitled Project (6).gif" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <h4>Producto mas vendido de cada pais de modelado 3D</h4>
      <div id="tablas">
        <table>
          <thead>
            <tr>
              <th>Pais</th>
              <th>Numero de ventas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>España <img src="../../Imagenes/Datos/españa.png" alt=""> </td>
              <td>14</td>
            </tr>
            <tr>
              <td>China <img src="../../Imagenes/Datos/china.png" alt=""> </td>
              <td>9</td>
            </tr>
            <tr>
              <td>Estados Unidos <img src="../../Imagenes/Datos/usa.png" alt=""> </td>
              <td>6</td>
            </tr>
            <tr>
              <td>Corea del sur <img src="../../Imagenes/Datos/coreasur.png" alt=""> </td>
              <td>4</td>
            </tr>
            <tr>
              <td>Alemania <img src="../../Imagenes/Datos/alemania.png" alt=""> </td>
              <td>2</td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <h4>Top 5 de paises en compras de productos de modelado 3D</h4>
      <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-3">
            <div class="list-group">
              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#panel6">España <img
                  src="../../Imagenes/Datos/españa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel7">China <img
                  src="../../Imagenes/Datos/china.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel8">Estados Unidos <img
                  src="../../Imagenes/Datos/usa.png" alt=""></a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel9">Corea del sur <img
                  src="../../Imagenes/Datos/coreasur.png" alt=""> </a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#panel10">Alemania <img
                  src="../../Imagenes/Datos/alemania.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="panel6">
                <img src="../../Imagenes/Tienda/productos/Modelado 3D/Comida & bebida/burger.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel7">
                <img src="../../Imagenes/Tienda/productos/Modelado 3D/Naturaleza/casa.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel8">
                <img src="../../Imagenes/Tienda/productos/Modelado 3D/Comida & bebida/burger.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel9">
                <img src="../../Imagenes/Tienda/productos/Modelado 3D/Animales/camaleon.PNG" alt="">
              </div>
              <div class="tab-pane fade" id="panel10">
                <img src="../../Imagenes/Tienda/productos/Modelado 3D/Vehiculos/barco.PNG" alt="">
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
        <h2 class="ft-title">Paginas</h2>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="historia.php">Historia</a></li>
          <li><a href="Galeria.php">Galeria</a></li>
          <li><a href="#">Datos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="tutoriales.php">Tutoriales</a></li>
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
          <li><a href="experto.php">Experto</a></li>
        </ul>
      </div>
    </section>

    <!-- Footer social -->
    <section class="ft-social">
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
    </section>

    <!-- Footer legal -->
    <section class="ft-legal">
      <ul class="ft-legal-list">
        <li><a href="terminosCondiciones.html" target="_blank">Terminos &amp; Condiciones</a></li>
        <li><a href="politicaPrivacidad.html" target="_blank">Politica de privacidad</a></li>
        <li>&copy; 2020 Copyright</li>
      </ul>
    </section>
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
