<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../DISEÑO/CSS/estilosDentroComunes.css" type="text/css" />
    <link rel="stylesheet" href="../../DISEÑO/CSS/estilosGaleria.css" type="text/css" />
    <script src="../../Scripts/JQUERY/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
    <link
    property='stylesheet'

      type="text/javascript"
      href="../../DISEÑO/Bootstrap/js/bootstrap.min.js"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="../../Imagenes/logo2.png" />
    <title>Pagina 1 de la galeria de imagenes de animacion y modelado 3D</title>
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
          <img src="../../Imagenes/logo.PNG" alt="logo de Dranimaco" />
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
            <a class="active" href="#"> <i class="fas fa-camera-retro"></i> Galeria</a>
          </li>
          <li class="menu">
            <a href="datos.php"><i class="fas fa-globe-europe"></i> Datos</a>
          </li>
          <li class="menu">
            <a href="contacto.php"><i class="fas fa-phone"></i> Contacto/Sugerencia</a>
          </li>
        <li class="menu">
            <a href="tutoriales.php"><i class="fas fa-play-circle"></i> Tutoriales <i class="fas fa-arrow-circle-down"></i></a>
             <ul >
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
            <a href="../../wordpress/shop"
              ><i class="fas fa-shopping-cart"></i> Tienda</a
            >
          </li>
          <li class="menu">
            <a href="cerrarSesion.php"><i class="far fa-times-circle"></i> Cerrar sesion</a>
          </li>
          <li class="menu">
            <a href="../../Ingles/DENTRO/Galeria.php"
              ><img
                class="imagen-idioma"
                src="../../Imagenes/Ingles.png"
                alt=""
                width="5px"
                height="10px"
            /></a>
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

      <span class="ir-arriba"
        ><a href="#"><i class="fas fa-arrow-circle-up"></i></a
      ></span>
    </section>

    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#">Anterior</a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="Galeria2.php">2</a></li>
      <li class="page-item"><a class="page-link" href="Galeria3.php">3</a></li>
      <li class="page-item">
        <a class="page-link" href="Galeria2.php">Siguiente</a>
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
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="tutoriales.php">Tutoriales</a></li>
            <li><a href="../../wordpress/tienda">Tienda</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Galeria</h2>
          <ul>
            <li><a href="#">Página 1</a></li>
            <li><a href="Galeria2.html">Página 2</a></li>
            <li><a href="Galeria3.html">Página 3</a></li>
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
            <a href="#"><i class="fab fa-github"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>
      </section>

      <!-- Footer legal -->
      <section class="ft-legal">
        <ul class="ft-legal-list">
          <li><a href="#">Terminos &amp; Condiciones</a></li>
          <li><a href="#">Politica de privacidad</a></li>
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
