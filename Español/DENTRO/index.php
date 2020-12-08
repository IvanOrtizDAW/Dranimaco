<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosInicio.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../Diseño/Bootstrap/css/bootstrap.css" />
  <link rel="icon" type="image/png" href="../../Imagenes/logo2.png">
  <script src="../../Scripts/jquery.flexslider.js"></script>
  <title>Pagina principal de Dranimaco</title>
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
          <a class="active" href="#"><i class="fas fa-home"></i> Inicio</a>
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
        <li class="menu"><a href="../../Ingles/DENTRO/index.php"><img class="imagen-idioma"
              src="../../Imagenes/Ingles.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <script src="../JAVASCRIPT/menuHamburgesa.js"></script>

  </header>

  <section>

    <div class="container-all">

      <div id="slider">
        <figure>
          <img src="../../Imagenes/SL1.jpg" alt="">
          <img src="../../Imagenes/SL2.jpg" alt="">
          <img src="../../Imagenes/SL3.jpg" alt="">
          <img src="../../Imagenes/SL1.jpg" alt="">
          <img src="../../Imagenes/SL2.jpg" alt="">



        </figure>
      </div>

      <div class="galeria-inicio">

        <div class="centro">

          <p>Bienvenidos a Anima, aqui ofrecemos la posibilidad de compra de productos de modelado y animación 3D para
            diferentes proyectos.
            Ademas no solo esta pagina ofrece esa gran funcion tambien ofrecemos la posibilidad de aprender sobre
            modelado y animacion 3D con diferentes tutoriales según tu nivel.
            Si tienes algún problema puedes pedirnos ayuda por la página Contacto o inlcuso por redes sociales.
          </p>

        </div>

        <h2>Galería de imágenes</h2>

        <hr>

        <p class="encima-imagenes">Aqui te mostramos una galeria de imagenes de modelado 3D reaaliazo en est pagina para
          la venta de estos productos. Si quieres ver como funciona o se realiza estos modelados registrate en la pagina
        </p>

        <img src="../../Imagenes/Galeria/cohete.jpg" alt="">
        <img src="../../Imagenes/Galeria/robot.jpg" alt="">
        <img src="../../Imagenes/Galeria/robot2.jpg" alt="">
        <img src="../../Imagenes/Galeria/desayuno.jpg" alt="">
        <img src="../../Imagenes/Galeria/nube.jpg" alt="">
        <img src="../../Imagenes/Galeria/personaje.jpg" alt="">

        <form action="Galeria.html" method="POST">

          <input type="submit" class="galeria-inicio-boton" value="Visitar Galeria de fotos">

        </form>

      </div>


      <div class="historia">

        <h2>Historia del modelado y de la animacion 3D</h2>

        <hr>

        <div class="noticia">
          <img class="izquierda" alt="" src="../../Imagenes/Historia/proceso.gif">
          <p>Has crecido disfrutando de películas de animación y videojuegos y ahora te preguntas cómo fue el inicio de
            la animación y el modelado 3D, nosotros te lo explicamos</p>
          <p>Según los entendidos existe un antes y un después en la historia de la Animación 3D, como ya se mencionó en
            el post llamado
            “La Animación en 3D conquista el cine” fue en 1995 cuando se estrenó Toy Story, la primera película creada
            íntegramente con animación 3D.
            Este largometraje realizado por los estudios Pixar sirvió de inspiración a otros muchos animadores que se
            lanzaron al diseño de personajes, sin embargo,
            los inicios de la animación 3D comenzaron mucho antes.</p>

          <form action="historia.html" method="POST">

            <input type="submit" class="galeria-inicio-boton" value="Historia de la aniamcion y modelado 3D">

          </form>

          <div class="reset"></div>

        </div>

      </div>

      <div class="gratuitos">

        <h2>Programas gratuitos</h2>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/blender.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Blender</h4>
            <p class="card-text">Blender es otra aplicación de modelado 3D gratis. Las características que incluye en la
              escultura, animación, renderizado fotorealista y la edición de vídeo. Para aquellos que tienen un nivel
              superior, el software también permite crear juegos completos en 3D, editar videos y simulaciones
              realistas.</p>
            <a href="https://www.blender.org/" class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/makehuman.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Makehuman</h4>
            <p class="card-text">Makehuman es una aplicación de gráficos 3D por computadora para prototipado de
              humanoides fotorealisticos para ser utilizados en gráficos por computador. Es desarrollado por una
              comunidad de programadores, artistas y académicos interesados en el modelado tridimensional de personajes.
            </p>
            <a href="http://www.makehumancommunity.org/" class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/sketchup.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Sketchup</h4>
            <p class="card-text">Es una aplicación fácil de usar que se descarga de forma gratuita y es genial para
              principiantes en el modelado 3D. las versiones más avanzadas cuestan, pero aún así se pueden crear grandes
              renders y animaciones con la versión gratuita.</p>
            <a href="https://www.sketchup.com/ru" class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>

      </div>

      <div class="compra">
        <h2>Programas de pago</h2>
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/max.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Autodesk 3ds Max</h4>
            <p class="card-text">Autodesk 3ds Max (anteriormente 3D Studio Max) es un programa de creación de gráficos y
              animación 3D desarrollado por Autodesk, en concreto la división Autodesk Media & Entertainment
              (anteriormente Discreet). Creado inicialmente por el Grupo Yost para Autodesk, salió a la venta por
              primera vez en 1990 para DOS.
              3ds Max, con su arquitectura basada en plugins, es uno de los programas de animación 3D más utilizado,
              especialmente para la creación de videojuegos, anuncios de televisión, en arquitectura o en películas</p>
            <a href="https://www.autodesk.es/products/3ds-max/overview?plc=3DSMAX&term=1-YEAR&support=ADVANCED&quantity=1"
              class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/houdini.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Houdini </h4>
            <p class="card-text">Houdini es una aplicación de software de animación 3D desarrollada por SideFX, con sede
              en Toronto . SideFX adaptó Houdini de la suite PRISMS de herramientas de software de generación de
              procedimientos . Su atención exclusiva a la generación procedimental lo distingue de otros programas
              informáticos de gráficos 3D .</p>
            <a href="https://www.sidefx.com/products/houdini/" class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/mobu.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">MotionBuilder</h4>
            <p class="card-text">MotionBuilder es un software de animación de personajes en 3D producido por Autodesk .
              Se utiliza para cinematografía virtual , captura de movimiento y animación tradicional de fotogramas clave
              . Originalmente se llamó Filmbox cuando fue creado por primera vez por la compañía canadiense Kaydara,
              luego adquirida por Alias ​​y renombrada como MotionBuilder. A su vez, Alias ​​fue adquirido por Autodesk.
            </p>
            <a href="https://www.autodesk.com/products/motionbuilder/overview?plc=MOBPRO&term=1-YEAR&support=ADVANCED&quantity=1"
              class="btn btn-info">Ver pagina del programa</a>
          </div>
        </div>
      </div>

      <div class="comunidad">

        <h2>
          La comunidad esta contigo
        </h2>

        <hr>

        <p>Unete a nuestra comunidad y aprende con nosotros</p>

        <br>

        <div class="palabra">
          <span>100 +</span>

          <div class="letra">
            <span>Miembros</span>
          </div>
        </div>

        <div class="palabra">
          <span>10 +</span>

          <div class="letra">
            <span>Colaboradores</span>
          </div>
        </div>

        <div class="palabra">
          <span>12 +</span>

          <div class="letra">
            <span>Diferentes paises</span>
          </div>

        </div>

        <div class="datos-globo">

          <img src="../../Imagenes/globo.jpg" alt="">

        </div>

      </div>

      <div class="tutoriales-inicio">

        <h2>Disfruta de nuestros tutoriales</h2>

        <hr>

        <div class="imagenes-videos">

          <img src="../../Imagenes/Tutoriales/pelota-basico.PNG" alt="">

          <img src="../../Imagenes/Tutoriales/taza-basico.PNG" alt="">

          <img src="../../Imagenes/Tutoriales/venom-medio.PNG" alt="">

        </div>

        <div class="imagenes-videos2">

          <img src="../../Imagenes/Tutoriales/escalera-medio.PNG" alt="">

          <img src="../../Imagenes/Tutoriales/playa-experto.PNG" alt="">

          <img src="../../Imagenes/Tutoriales/arbol-experto.PNG" alt="">

        </div>

      </div>

      <div class="empezar">

        <h2>Contacto</h2>

        <hr>

        <p>Si tienes algun problema puedes contactar con nosotros por redes sociales o por el siguiente boton</p>

        <div class="container">
          <div class="row">
            <div class="col">
              <form action="contacto.php">
                <button class="btn btn-info form-control  btn-block">Contacto</button>
              </form>
            </div>

          </div>

          <div class="redes">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>

        </div>

      </div>

    </div>

  

  </section>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Paginas</h2>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="historia.php">Historia</a></li>
          <li><a href="Galeria.php">Galeria</a></li>
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
