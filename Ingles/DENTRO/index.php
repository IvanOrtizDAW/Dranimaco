<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosInicio.css" type="text/css" />
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
  <title>Dranimaco main page</title>
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
          <a class="active" href="#"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="menu">
          <a href="historia.php"><i class="fas fa-book"></i> History</a>
        </li>
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
          <a href="../../wordpress/shop/"><i class="fas fa-shopping-cart"></i> Store</a>
        </li>
        <li class="menu">
          <a href="cerrarSesion.php"><i class="far fa-times-circle"></i> Sign off</a>
        </li>
        <li class="menu"><a href="../../Español/DENTRO/index.php"><img class="imagen-idioma"
              src="../../Imagenes/Español.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
  </header>

  <section>

    <div class="container-all">


      <div id="slider">
        <figure>
          <img src="../../Imagenes/SL1in.jpg" alt="">
          <img src="../../Imagenes/SL2in.jpg" alt="">
          <img src="../../Imagenes/SL3in.jpg" alt="">
          <img src="../../Imagenes/SL1in.jpg" alt="">
          <img src="../../Imagenes/SL2in.jpg" alt="">



        </figure>
      </div>


      <div class="galeria-inicio">

        <div class="centro">

          <p>Welcome to Anima, here we offer the possibility of purchasing 3D modeling and animation products for
            different projects.
            Furthermore, not only does this page offer that great function, we also offer the possibility of learning
            about 3D modeling and animation with different tutorials according to your level.
            If you have any problem you can ask us for help through the Contact page or even through social networks.
          </p>

        </div>

        <h2>image gallery</h2>

        <hr>

        <p class="encima-imagenes">Here we show you a gallery of 3D modeling images realiazo on this page for the sale
          of these products. If you want to see how these modeling works or is done, register on the page</p>

        <img src="../../Imagenes/Galeria/cohete.jpg" alt="">
        <img src="../../Imagenes/Galeria/robot.jpg" alt="">
        <img src="../../Imagenes/Galeria/robot2.jpg" alt="">
        <img src="../../Imagenes/Galeria/desayuno.jpg" alt="">
        <img src="../../Imagenes/Galeria/nube.jpg" alt="">
        <img src="../../Imagenes/Galeria/personaje.jpg" alt="">

        <form action="Galeria.html" method="POST">

          <input type="submit" class="galeria-inicio-boton" value="Visit Photo Gallery">

        </form>

      </div>



      <div class="historia">

        <h2>History of 3D modeling and animation</h2>

        <hr>

        <div class="noticia">
          <img class="izquierda" alt="" src="../../Imagenes/Historia/proceso.gif">
          <p>You have grown up enjoying animation films and video games and now you wonder how animation and 3D modeling
            started, we will explain it to you</p>
          <p>According to experts there is a before and after in the history of 3D Animation, as already mentioned in
            the post called
            "3D Animation conquers the cinema" was in 1995 when Toy Story was released, the first film created entirely
            with 3D animation.
            This feature film made by Pixar studios served as an inspiration to many other animators who threw
            themselves into character design, however,
            the beginnings of 3D animation started long before.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos rerum, repellat animi laudantium eum unde odit necessitatibus ipsa eaque maxime ipsum explicabo pariatur ex quia quae voluptatum quis. Modi, alias? </p>

          <form action="historia.html" method="POST">

            <input type="submit" class="galeria-inicio-boton" value="History of 3D modeling and animation">

          </form>

          <div class="reset"></div>

        </div>

      </div>

      <div class="gratuitos">

        <h2>Free programs</h2>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/blender.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Blender</h4>
            <p class="card-text">Blender is another free 3D modeling application. The features it includes in sculpting,
              animation, photorealistic rendering, and video editing. For those who have a higher level, the software
              also allows to create complete 3D games, edit videos and realistic simulations.</p>
            <a href="https://www.blender.org/" class="btn btn-info">See program page</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/makehuman.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Makehuman</h4>
            <p class="card-text">Makehuman is a 3D computer graphics application for prototyping photorealistic
              humanoids for use in computer graphics. It is developed by a community of programmers, artists, and
              academics interested in three-dimensional character modeling.</p>
            <a href="http://www.makehumancommunity.org/" class="btn btn-info">See program page</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/sketchup.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Sketchup</h4>
            <p class="card-text">It's an easy-to-use app that is free to download and is great for 3D modeling
              beginners. the more advanced versions cost, but still great renders and animations can be created with the
              free version.</p>
            <a href="https://www.sketchup.com/ru" class="btn btn-info">See program page</a>
          </div>
        </div>

      </div>

      <div class="compra">
        <h2>Payment programs</h2>
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/max.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Autodesk 3ds Max</h4>
            <p class="card-text">Autodesk 3ds Max (formerly 3D Studio Max) is a 3D animation and graphics creation
              program developed by Autodesk, specifically the Autodesk Media & Entertainment (formerly Discreet)
              division. Initially created by the Yost Group for Autodesk, it was first released in 1990 for DOS.
              3ds Max, with its plugin-based architecture, is one of the most widely used 3D animation programs,
              especially for creating video games, television commercials, in architecture or in movies.</p>
            <a href="https://www.autodesk.es/products/3ds-max/overview?plc=3DSMAX&term=1-YEAR&support=ADVANCED&quantity=1"
              class="btn btn-secondary">See program page</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/houdini.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Houdini </h4>
            <p class="card-text">Houdini is a 3D animation software application developed by Toronto-based SideFX.
              SideFX adapted Houdini from the PRISMS suite of procedural generation software tools. Its exclusive
              attention to procedural generation sets it apart from other 3D graphics software.</p>
            <a href="https://www.sidefx.com/products/houdini/" class="btn btn-secondary">See program page</a>
          </div>
        </div>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="../../Imagenes/Programas/mobu.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">MotionBuilder</h4>
            <p class="card-text">MotionBuilder is 3D character animation software produced by Autodesk. It is used for
              virtual cinematography, motion capture, and traditional keyframe animation. It was originally called
              Filmbox when it was first created by the Canadian company Kaydara, later acquired by Alias and renamed
              MotionBuilder. In turn, Alias was acquired by Autodesk.</p>
            <a href="https://www.autodesk.com/products/motionbuilder/overview?plc=MOBPRO&term=1-YEAR&support=ADVANCED&quantity=1"
              class="btn btn-secondary">See program page</a>
          </div>
        </div>
      </div>

      <div class="comunidad">

        <h2>
          The community is with you
        </h2>

        <hr>

        <p>Join our community and learn with us</p>

        <br>

        <div class="palabra">
          <span>100 +</span>

          <div class="letra">
            <span>Members</span>
          </div>
        </div>

        <div class="palabra">
          <span>10 +</span>

          <div class="letra">
            <span>Collaborators</span>
          </div>
        </div>

        <div class="palabra">
          <span>12 +</span>

          <div class="letra">
            <span>Different countries</span>
          </div>

        </div>

        <div class="datos-globo">

          <img src="../../Imagenes/globo.jpg" alt="">

        </div>

      </div>

      <div class="tutoriales-inicio">

        <h2>Enjoy our tutorials</h2>

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

        <h2>Contact</h2>

        <hr>

        <p>If you have any problem you can contact us through social networks or through the following button</p>

        <div class="container">
          <div class="row">
            <div class="col">
              <form action="contacto.php">
                <button class="btn btn-info form-control  btn-block">Contact</button>
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

        <span class="ir-arriba"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></span>


  </section>

  <footer>
    <!-- Footer main -->
    <section class="ft-main">
      <div class="ft-main-item">
        <h2 class="ft-title">Pages</h2>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="historia.php">History</a></li>
          <li><a href="Galeria.php">Gallery</a></li>
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
          <li><a href="exeprto.php">Expert</a></li>
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
