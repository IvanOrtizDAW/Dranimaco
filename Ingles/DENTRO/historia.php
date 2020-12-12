<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosDentroComunes.css" type="text/css" />
  <link rel="stylesheet" href="../../DISEÑO/CSS/estilosHistoria.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
  <script src="../JAVASCRIPT/JQUERY/jquery.flexslider.js"></script>

  <title>History of animation and 3D modeling</title>

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

        <li class="menu"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li class="menu"><a class="active" href="#"> <i class="fas fa-book"></i> History</a></li>
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
        <li class="menu"><a href="../../Español/DENTRO/historia.php"><img class="imagen-idioma"
              src="../../Imagenes/Español.png" alt=""></a></li>
        <li class="hamburgesa"><a href="#"><i class="fas fa-bars"></i></a></li>

      </ul>

    </nav>

  </header>

  <section>

    <div class="empezo-animacion">

      <h2>How did 3D modeling start?</h2>

      <hr>

    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/personaje.jpg">
      <p>
        If someone says "3D modeling", we all quickly think of Pixar or Toy Story, as well as the rest of the movies
        that have redefined the concept of animated cinema in recent decades.
      </p>

      <p>
        However, the concept of 3D modeling or computer graphics is much older
      </p>

      <p>
        Initially used in the fields of analysis and science, little by little it became a vehicle for creativity until
        now reaching the first animated feature film generated based on computer graphics (3D animation) in 1995.
      </p>

      <p>
        However, the tools used for this purpose had already had a place in the cinema a couple of years earlier,
        notably in the recreation of digital models to give life at certain times to the dinosaurs that populated
        Jurassic Park. The possibilities of hardware and software at that time were limited and, in the years to come,
        their growth, development and refinement has been exponential.
      </p>

      <p>
        If we compare the work of Pixar, we can clearly appreciate the evolution in the quality of the representation of
        the lights, the textures, the elements that are displayed on the screen or the density of the mesh. In general,
        it is clear that technology is consolidating and, after more than 20 years making feature films, we can say that
        the 3D modeling and animation industry is more than settled and in a dazzling moment.

        We are living in a new technological era, an era inherited from the illusion and innovation produced in the 80s
        under the ideation and foundations of virtual reality. That fleeting dream ran into an obvious barrier:
        expectations did not correspond to the user experience allowed by devices developed with the hardware of the
        time. The hardware, despite being tremendously advanced, was barely capable of supporting the most basic of
        needs for a virtual reality experience. With luck, you were able to see some cubic elements in a diaphanous
        environment, floating and, if the room was conditioned, you could move precariously through the space.

        The big changes to today's 3D modeling
        What has changed, how has it changed and why? In short: everything has changed. The basic change, however, is a
        simple click access for anyone to a machine that is more powerful than anyone who based virtual reality in the
        80s. And we carry them in our pocket!
      </p>

      <p>
        he information age has allowed that, in six years, we have gone from a precarious approach to virtual reality of
        the new era (Oculus Rift DK1) to advanced devices with screens that triple the refresh rate offered by that
        model (frames per second), to "tracking" systems that allow us to hide under a digital table or walk around the
        room in the real world and go through a virtual world. Response, lens quality, and device quality has improved
        incredibly fast in a race of industrial conquest to be the top-selling device.
      </p>

      <div class="reset"></div>
    </div>


    <div class="noticia">
      <img class="derecha" alt="" src="../../Imagenes/Historia/personajes.webp">
      <p>
        All of this has opened up a new dimension for 3D modeling. That technique that in the 90s seemed the work of
        engineers, today is a multidisciplinary tool that is available to everyone, with hundreds of specialized
        software that allows us to create from scratch and without technical knowledge. We can go the way where we feel
        comfortable or as far as we want, we can create entire worlds without the need for 3D modeling knowledge thanks
        to the Internet and the huge community of modelers who offer their work in digital markets. If we have an idea,
        there are hardly any barriers to carrying out an MPV.

        The possibilities of 3D modeling
        For the first time we can "touch" that 3D model. Can you imagine being able to decide if you want to be Buzz
        Lightyear or Woody and live the movie from their perspective, being able to make decisions and interact with
        their characters? Of course, the narrative and development concept is more that of a video game than that of a
        cinematographic piece, but the simple idea of ​​being able to model content and later see yourself immersed in
        it is incredible.
      </p>

      <p>
        VR is a reality within the reach of anyone and the ability to nurture these virtual worlds is in the hands of
        the 3D modeler. Today, virtual reality technology is used for commercial, research and development purposes.
        From the field of medicine, the real estate market, science fiction narrative, video games, virtual chats,
        training in large internal process companies or the treatment of phobias, the list covers practically all
        sectors.

        The learning curve of a 3D modeling program is considerably challenging. Above all, it requires patience.
        However, today we have many types of tools for different levels of access. Software like Sketch Up or Blender
        give us very powerful solutions with a free license. For its part, the most popular software in the industry is
        Maya, 3D Studio Max or Zbrush.

        It is not necessary to develop a high artistic and technical talent in these tools to be able to have an
        approach to virtual reality: we can use content generated by third parties and for sale or free download online.
        It is as simple as deciding what content we want to generate or what experience we would like to live in virtual
        reality and doing a correct search for the elements that we want to populate that three-dimensional world.
      </p>

      <p>
        In this way, we will not achieve a polished and well-developed virtual reality experience, but we will be able
        to have a mockup of our idea. We will obtain a mockup of what we would like to develop and we will be able to
        delve into the content to explore it and find out what works and what doesn't.

        3D modeling in virtual reality is a magic wand that opens the door to the confines of your imagination: learning
        to use it will allow you to build impossible dreams.
      </p>
      <div class="reset"></div>
    </div>

    <div class="empezo-animacion">

      <h2>How did the 3D animation start?</h2>

      <hr>

    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/mickey.gif">
      <p>
        Nowadays animation has achieved a highly relevant niche in the
        movie world. Not only in the making of feature films, but also with
        short films. One of the best known animation studios par excellence is
        Disney Animation together with Pixar.
        Movies create the illusion of continuous movement due to a
        rapid succession of images in front of a light, thus allowing to reproduce these
        images on a screen. Each of them is placed in front of the projected light to
        give way to the next one quickly giving rise to a smooth transition, transforming
        thus discontinuous images in continuous, this phenomenon is known as the phenomenon
        phi, discovered by Max Wertheimer. As a rule, the human eye perceives movement
        start at about ten or twelve frames per second. Currently all the movies that
        are produced at 24 frames per second (f.p.s).
        The viewer experiences a sense of physical movement of the aspects
        purely visual and auditory that make up time, space and energy. This type
        experience consists of a kinesthetic empathy with the physical energy of one's own
        movement, its freedom and limits in space, its speed, its curves, lines, oddities ...
        creating a path of emotions linked to that of movement.
        Animation is a means of audiovisual expression in which they merge,
        an extraordinary way, moving images and sounds to tell a story by
        same as explaining ideas. Likewise, it delves into theories in a very ingenious way,
        since being an artificial construction, it offers a wide range of possibilities and
        ways of communicating. Allows the creation of cinematic visual tricks that allow
        give life to objects that do not have it and transport the viewer to unpublished places. Today in
        animation has a great weight in the world of cinema and television, in addition to the
        video game.
      </p>
      <div class="reset"></div>
    </div>

    <div class="noticia">
      <img class="derecha" alt="" src="../../Imagenes/Historia/perro.gif">
      <p>
        Much of today's animation is done digitally, but in its
        in the beginning everything was different. It all started with creations of small elements like the
        kinetoscope1
        and the praxinoscope2
        in the second half of the 19th century. At the end of
        century, in Paris, George Méliès became an important figure for the world of
        animation cinema due to its innovations when it comes to making special effects.
      </p>
      <p>
        Méliès, at first, imitated Lumière's films. Not much later,
        decided to record his theatrical works taking advantage of cinematographic techniques to create
        visual effects through theatrical type tricks. One of the most popular tricks
        of the magician filmmaker Méliès is the technique of cutting fragments of the film and re-
        put them together to make it appear that a character disappears from the scene, but this trick already
        was used by Thomas Edison in his short Execution of Mary, Queen of Scots, in the
        who used this technique to replace a body with a mannequin. As we can
        Note, there are times when Méliès innovation is questioned, but what is not
        can deny is that he knew how to coordinate a repertoire of cinematographic tricks in a
        figurative and rhythmic that leads to the origin of the adventure of the world of cinema creating the
        figurative universe.
        Years pass and the first animated shorts appear as Fantasmagore
        (1908) or Little Nemo in the land of dreams (1911). It should be noted Gertie the dinosaur,
        the first animated film whose protagonist has a recognizable personality and
        interact with the public. Another feature of this film is that it was the
        first to use keyframe technique3
        .
      </p>
      <div class="reset"></div>
    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/personaje2.webp">
      <p>
        In 1921, Walt Disney began to work in the world of animation
        creating small films for a cinema chain. These films are made with
        his first major company, Laugh-O-Grams, founded by Walt Disney and Hugh Herman,
        your producer. His last project before filing for bankruptcy was a short film that
        mixed live action and animation, Alice Wonderland. When Laugh-O-Grams closed
        (1923), Disney decided to move to California and together with his brother founded the studios
        Disney, leaving all its savings in the creation of its first feature film
        Snow White and the Seven Dwarfs. This had great support from the
        viewers and thanks to her, all the following films arrived, such as Bambi or
        Pinocchio. The Disney studios had great success until the 80s, a well-known stage
        like Disney's dark ages in which no matter how many movies they released, no
        they raised what was expected. Some examples from this era are Basil the Mouse
        Superdetective, Tod and Tobby or Oliver and his gang.
        In 1986 John Lasseter founded Pixar studios together with Steve Jobs. Pixar
        Since its inception it uses digital animation, which was a great leap in the world
        cinematographic from the talkies. In the beginning they started creating shorts,
        but it was in 1995 when they released the first feature film, created entirely in a
        digital, Toy Story, which propelled the company.
      </p>
      <p>
        Returning to the Disney studios, after overcoming that crisis of the 80s and
        having some controversy with Pixar, in 2006 they decide to buy Lasseter's studios. IS
        It's not until 2010 when Disney releases its first digital film from start to finish.
        Currently Disney and Pixar continue to work together and with many projects
        in front of. Although the history of animation is relatively short in comparison
        with other artistic disciplines, it goes hand in hand with the technological progress of the latter
        years like the unstoppable growth of mobile technology or the Internet
      </p>
      <div class="reset"></div>
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
          <li><a href="#">History</a></li>
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