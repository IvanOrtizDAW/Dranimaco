<!DOCTYPE html>
<html lang="es">

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
  <title>Historia de la animacion y modelado 3D</title>
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
        <li class="menu"><a class="active" href="#"> <i class="fas fa-book"></i> Historia</a></li>
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
        <li class="menu"><a href="../../Ingles/DENTRO/historia.php"><img class="imagen-idioma"
              src="../../Imagenes/Ingles.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

    </nav>

  </header>

  <section>

    <div class="empezo-animacion">

      <h2>¿Como empezo el modelado 3D?</h2>

      <hr>

    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/personaje.jpg">
      <p>Si alguien dice “modelado 3D”, todos pensamos rápidamente en Pixar o en Toy Story, así como en el resto de
        películas del estilo que han redefinido el concepto de cine de animación de las últimas décadas.</p>

      <p>Sin embargo, el concepto de modelado 3D o computación gráfica es bastante anterior</p>

      <p>Empleado en un principio en campos de análisis y ciencia, poco a poco fue convirtiéndose en un vehículo para la
        creatividad hasta llegar, ahora sí, al primer largometraje de animación generado en base a la computación
        gráfica por ordenador (animación 3D) de 1995.</p>

      <p>Sin embargo, las herramientas empleadas para este fin ya habían tenido cabida en el cine un par de años antes,
        de manera destacable, en la recreación de modelos digitales para dar vida en determinados momentos a los
        dinosaurios que poblaban Jurassic Park. Las posibilidades del hardware y del software en ese momento eran
        limitadas y, en los años venideros, su crecimiento, desarrollo y perfeccionamiento ha sido exponencial.</p>

      <p>Si comparamos la obra de Pixar, podemos apreciar la evolución claramente en la calidad de la representación de
        las luces, las texturas, los elementos que se muestran en pantalla o la densidad de la malla. En general, queda
        claro que la tecnología se consolida y, tras más de 20 años haciendo largometrajes, podemos decir que la
        industria del modelado 3D y de la animación se encuentra más que asentada y en un momento deslumbrante.

        Vivimos una nueva era tecnológica, una era heredada de la ilusión y la innovación producida en los 80 bajo la
        ideación y las bases de la realidad virtual. Aquel sueño fugaz se topó con una barrera evidente: las
        expectativas no se correspondían con la experiencia de usuario que permitían los dispositivos desarrollados con
        el hardware de la época. El hardware, a pesar de ser tremendamente avanzado, a duras penas era capaz de sostener
        la más básica de las necesidades de una experiencia de realidad virtual. Con suerte, eras capaz de ver unos
        elementos cúbicos en un entorno diáfano, flotando y, si la sala estaba acondicionada, podías moverte
        precariamente por el espacio.

        Los grandes cambios hasta el modelado 3D actual
        ¿Qué ha cambiado, cómo ha cambiado y por qué? En resumen: ha cambiado todo. El cambio básico, no obstante, es el
        acceso de cualquier persona mediante un simple clic a una máquina que es más potente que cualquiera en las que
        basaban la realidad virtual en los años 80. ¡Y las llevamos en el bolsillo!</p>

      <p>a era de la información ha permitido que, en seis años, hayamos pasado de un precario acercamiento a la
        realidad virtual de la nueva era (Oculus Rift DK1) a avanzados dispositivos con pantallas que triplican la tasa
        de refresco que ofrecía aquel modelo (frames por segundo), a sistemas de “tracking” que nos permiten escondernos
        bajo una mesa digital o caminar por toda la habitación en el mundo real y recorrer todo un mundo virtual. La
        respuesta, la calidad de las lentes y la calidad de los dispositivos ha mejorado increíblemente rápido en una
        carrera de conquista industrial por ser el dispositivo líder en ventas.</p>

    </div>


    <div class="noticia">
      <img class="derecha" alt="" src="../../Imagenes/Historia/personajes.webp">
      <p>Todo esto ha abierto una nueva dimensión para el modelado 3D. Aquella técnica que en los 90 parecía obra de
        ingenieros, hoy es una herramienta multidisciplinar que está al alcance de todos, con cientos de softwares
        especializados que nos permiten crear desde cero y sin conocimiento técnico. Podemos recorrer el camino hasta
        donde nos sintamos cómodos o hasta donde queramos, podemos crear mundos enteros sin necesidad de tener
        conocimientos de modelado 3D gracias a Internet y a la inmensa comunidad de modeladores que ofrecen su trabajo
        en mercados digitales. Si tenemos una idea, apenas hay barreras para llevar a cabo un MPV.

        Las posibilidades del modelado 3D
        Por primera vez podemos “tocar” ese modelo 3D. ¿Imaginas poder decidir si quieres ser Buzz Lightyear o Woody y
        vivir la película desde su perspectiva, pudiendo tomar decisiones e interactuar con sus personajes? Desde luego,
        el concepto narrativo y de desarrollo es más el de un videojuego que el de una pieza cinematográfica, pero la
        simple idea de poder modelar un contenido y posteriormente verte inmerso en él es increíble.</p>

      <p>La VR es una realidad al alcance de cualquiera y la capacidad de nutrir esos mundos virtuales está en las manos
        del modelador 3D. Hoy ya se emplea la tecnología de realidad virtual con fines comerciales, de investigación y
        de desarrollo. El campo de la medicina, el mercado inmobiliario, la narrativa de ciencia ficción, los
        videojuegos, los chats virtuales, la formación en grandes empresas de procesos internos o el tratamientos de
        fobias, la lista abarca prácticamente todos los sectores.

        La curva de aprendizaje de un programa de modelado 3D es considerablemente retadora. Requiere, sobre todo,
        paciencia. Sin embargo, a día de hoy disponemos de muchos tipos de herramientas para distintos niveles de
        acceso. Software como Sketch Up o Blender nos dan soluciones muy potentes y de licencia gratuita. Por su parte,
        en la industria el software más popular es Maya, 3D Studio Max o Zbrush.

        No es necesario desarrollar un talento artístico y técnico elevado en estas herramientas para poder tener un
        acercamiento a la realidad virtual: podemos emplear contenido generado por terceros y de venta o descarga
        gratuita online. Es tan simple como decidir qué contenido queremos generar o qué experiencia nos gustaría vivir
        en realidad virtual y hacer una búsqueda correcta de los elementos que queremos que pueblen ese mundo
        tridimensional.</p>

      <p>De esta manera, no alcanzaremos una experiencia pulida y bien desarrollada de realidad virtual, pero sí
        podremos tener una maqueta de nuestra idea. Obtendremos un mockup de lo que nos gustaría desarrollar y podremos
        adentrarnos en el contenido para explorarlo y saber qué cosas funcionan y cuales no.

        El modelado 3D en realidad virtual es una varita mágica que abre la puerta a los confines de tu imaginación:
        aprender a utilizarla te permitirá construir sueños imposibles.</p>
    </div>

    <div class="empezo-animacion">

      <h2>¿Como empezo la aniamcion 3D?</h2>

      <hr>

    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/mickey.gif">
      <p>
        Hoy en día la animación ha conseguido un hueco de gran relevancia en el
        mundo cinematográfico. No solo en la realización de largometrajes, sino también con
        cortometrajes. Uno de los estudios de animación más conocidos por excelencia es
        Disney Animation junto con Pixar.
        Las películas crean la ilusión de un movimiento continuo debido a una
        sucesión rápida de imágenes delante de una luz, permitiendo así reproducir dichas
        imágenes en una pantalla. Cada una de ellas se sitúa enfrente de la luz proyectada para
        dar paso a la siguiente rápidamente dando lugar a una suave transición, transformando
        así imágenes discontinuas en continuas, este fenómeno es conocido como el fenómeno
        phi, descubierto por Max Wertheimer. Por norma, el ojo humano percibe movimiento a
        partir de unos diez o doce fotogramas por segundo. Actualmente todas las películas que
        se producen tienen 24 fotogramas por segundo (f.p.s).
        El espectador experimenta una sensación de movimiento físico de los aspectos
        puramente visuales y auditivos que forman el tiempo, el espacio y la energía. Este tipo
        de experiencia consta de una empatía cenestésica con la energía física del propio
        movimiento, su libertad y limite en el espacio, su velocidad, sus curvas, líneas, rarezas...
        creando una trayectoria de emociones ligada a la del movimiento.
        La animación, es un medio de expresión audiovisual en el que se funden, de
        una forma extraordinaria, imágenes en movimiento y sonidos para contar una historia al
        igual que explicar ideas. Así mismo, profundiza en teorías de una forma muy ingeniosa,
        ya que al ser una construcción artificial, ofrece un amplio abanico de posibilidades y
        formas de comunicar. Permite la creación de trucos visuales cinemáticos que permiten
        dar vida a objetos que no la tienen y transportar al espectador a lugares inéditos. Hoy en
        día la animación tiene un gran peso en el mundo del cine y la televisión, además de los
        videojuegos.
      </p>
    </div>

    <div class="noticia">
      <img class="derecha" alt="" src="../../Imagenes/Historia/perro.gif">
      <p>
        Gran parte de la animación de hoy en día está hecha digitalmente, pero en sus
        inicios todo era distinto. Todo empezó con creaciones de pequeños elementos como el
        quinetoscopio1
        y el praxinoscopio2
        en la segunda mitad del siglo XIX. A finales de
        siglo, en París, George Méliès se convierte en una figura importante para el mundo del
        cine de animación debido a sus innovaciones a la hora de realizar efectos especiales.
      </p>
      <p>
        Méliès, en un principio, imitaba las películas de Lumière. No mucho más tarde,
        decidió grabar sus obras teatrales aprovechando las técnicas cinematográficas para crear
        efectos visuales a través de trucos de tipo teatral. Uno de los trucos que más se conocen
        del mago cineasta Méliès es la técnica de cortar fragmentos de la película y volver a
        juntarlos para que parezca que un personaje desaparece de la escena, pero este truco ya
        fue utilizado por Thomas Edison en su corto Execution of Mary, Queen of Scots, en el
        que utilizaba esta técnica para sustituir un cuerpo por un maniquí. Como podemos
        observar, hay veces que la innovación de Méliès se pone en duda, pero lo que no se le
        puede negar es que supo coordinar un repertorio de trucos cinematográficos de forma
        figurativa y rítmica que lleva al origen de la aventura del mundo del cine creando el
        universo figurativo.
        Pasan los años y aparecen los primeros cortos animados como Fantasmagore
        (1908) o Little Nemo en el país de los sueños (1911). Cabe destacar Gertie the dinosaur,
        la primera película animada cuyo protagonista tiene una personalidad reconocible e
        interactúa con el público. Otra de las características de esta película, es que fue la
        primera en utilizar la técnica de los fotogramas claves3
        .
      </p>
    </div>

    <div class="noticia">
      <img class="izquierda" alt="" src="../../Imagenes/Historia/personaje2.webp">
      <p>
        En 1921, Walt Disney comienza a trabajar en el mundo de la animación
        creando pequeñas películas para una cadena de cine. Estas películas, son realizadas con
        su primera gran empresa, Laugh-O-Grams, fundada por Walt Disney y Hugh Herman,
        su productor. Su último proyecto antes de declararse en la banca rota, fue un corto que
        mezclaba acción real y animación, Alice Wonderland. Cuando cerró Laugh-O-Grams
        (1923), Disney decidió mudarse a California y fundar junto con su hermano los estudios
        Disney, dejándose todos sus ahorros en la creación de su primer largometraje
        Blancanieves y los Siete Enanitos. Esta tuvo un gran apoyo por parte de los
        espectadores y gracias a ella, llegaron todas las siguientes películas, como Bambi o
        Pinocho. Los estudios Disney tuvieron un gran éxito hasta a los años 80, etapa conocida
        como la época oscura de Disney en la que por muchas películas que estrenaran, no
        recaudaban lo esperado. Algunos ejemplos de esta época son Basil, el Ratón
        Superdetective, Tod y Tobby o Oliver y su pandilla.
        En 1986 John Lasseter funda los estudios Pixar junto con Steve Jobs. Pixar
        desde sus inicios utiliza la animación digital, los que supuso un gran salto en el mundo
        cinematográfico desde el cine sonoro. En sus comienzos empezaron creando cortos,
        pero fue en 1995 cuando estrenaron el primer largometraje, creado totalmente de forma
        digital, Toy Story, que impulsó a la compañía.
      </p>
      <p>
        Volviendo a los estudios Disney, después de superar ese bache de los 80 y de
        tener algunas disputas con Pixar, en 2006 deciden comprar los estudios de Lasseter. Y
        no es hasta 2010 cuando Disney estrena su primera película digital de principio a fin.
        Actualmente Disney y Pixar siguen trabajando unidos y con muchos proyectos
        por delante. Aunque la historia de la animación es relativamente corta en comparación
        con otras disciplinas artísticas, va de la mano con el avance tecnológico de los últimos
        años cómo el imparable crecimiento de la tecnología móvil o Internet
      </p>
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
          <li><a href="#">Historia</a></li>
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