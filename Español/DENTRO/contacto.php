<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../Diseño/CSS/estilosContacto.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../../Diseño/CSS/estilosDentroComunes.css" rel="stylesheet" type="text/css" media="screen" />
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
  <title>Pagina de contacto de Dranimaco</title>
  <style>
    /**boton para mostrar un formualrio*/
    .list-group-item {
      background-color: #00adb5;
      color: white;
      text-align: center;
      margin: 3px;
    }

    /**efecto hover para el boton para mostrar un formualrio*/
    .list-group-item:hover {
      background-color: #222831;
      color: white;
      text-align: center;
    }

    /**efecto active para el boton para mostrar un formualrio*/
    .list-group-item.active {
      background-color: #00adb5;
      color: white;
      text-align: center;
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

          echo "<li class=bienvenido>Usuario: ".$_SESSION['usuario']."</li>";
          
          ?>

        <li class="menu">
          <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        </li>
        <li class="menu"><a href="historia.php"> <i class="fas fa-book"></i> Historia</a></li>
        <li class="menu"><a href="Galeria.php"> <i class="fas fa-camera-retro"></i> Galeria</a></li>
        <li class="menu">
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Datos</a>
        </li>
        <li class="menu">
          <a class="active" href="#"><i class="fas fa-phone"></i> Contacto/Sugerencia</a>
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
        <li class="menu"><a href="../../Ingles/DENTRO/Contacto.php"><img class="imagen-idioma"
              src="../../Imagenes/Ingles.png" alt=""></a></li>
        <li class="hamburgesa">
          <a href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
  </header>

  <section>
    <div class="contact-section">
      <div class="col-md-5  mx-auto justify-content-center">
        <div class="list-group   list-group-horizontal">
          <a class="list-group-item list-group-item-action" data-toggle="list" data-target="#contactar">Contactar</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" data-target="#sugerencia">Sugerencia</a>
        </div>
      </div>
      <div class="col-md-9  mx-auto justify-content-center">
        <div class="tab-content">
          <div class="tab-pane fade show " id="contactar">
            <h1>Formulario de contacto</h1>
            <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
            <div class="border"></div>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

              <?php

         $error=false;	
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){		
						} else {	
						$error= true;
				} 	
		}

?>

              <?php


  $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["email"])){
      $email=$_POST["email"];
      if(preg_match($pattern1, $email)){
    } else{
      $error= true;
    }
      	} else {	
						$error= true;
				} 	
		}

?>

              <?php

  $pattern_2 = '/^([0-9]{3})([0-9]{3})([0-9]{3})$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["telefono"])){
      $telefono=$_POST["telefono"];
      if(preg_match($pattern_2, $telefono)){
    } else{
      $error= true;
    }
      	} else {	
						$error= true;
				} 	
		}

?>

              <?php

if(isset($_POST["enviar"])){
			if(!Empty($_POST["mensaje"])){
				if(strlen($_POST["mensaje"])>=10){	
						} else {	
              $error= true;
						 }
						} else {	
						$error= true;
				} 	
		}

?>

              <?php 


 if (isset($_POST['enviar'])&& $error==false){			
            
        include("base.php");          
          
          /** 
            if($conexion){
              echo "<p class=correcto>Conexion correcta</p><br>";
            }else{
              echo "<p class=correcto>Conexion incorrecta</p><br>";
            }
          */

            $id=$_SESSION['id'];
            $nombre=trim($_POST['nombre']);
            $email=trim($_POST['email']);
            $telefono=trim($_POST['telefono']);
            $mensaje=$_POST['mensaje'];
            $fecha= date("Y-m-d H:i:s");  
            $contestacion="no";
    
            $destino="dranimaco2020@gmail.com";
            $contenido="ID: ". $id . "\nNombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nFecha: " . $fecha . "\nMensaje: " . $mensaje;
            
             $headers = 'From: ' .$email. "\r\n". 
            'Reply-To: ' . $email. "\r\n" . 
            'X-Mailer: PHP/' . phpversion();

           $mail=mail($destino,"contacto",$contenido,$headers);

           /** 
           if($mail){
              echo "<p class=correcto>mensaje escrito</p><br>";
           }else{
              echo "<p class=error>mensaje no escrito</p><br>";
           } 
          */

           $consulta="INSERT INTO mensajes (usuario_id, usuario_nombre,	usuario_email, usuario_tel, usuario_mensaje, usuario_fecha, usuario_contestacion) 
            VALUES ('$id','$nombre','$email','$telefono','$mensaje','$fecha','$contestacion')";
            $resultado=mysqli_query($conexion,$consulta);

            if($resultado){
              echo "<p class=correcto>Mensaje enviado, Se te respondera con la mayor velocidad posible</p><br>";
            }else{
              echo "<p class=error>Mensaje no enviado,vuelve a intentarlo</p><br>";
            }
				
 }

?>


              <?php
  
         $error=false;	
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){		
        if($_POST["nombre"]===$_SESSION['usuario']){   
        }else{
          echo "<p class=error>Campo del nombre incorrecto, ingresa tu nombre</p><br>";
        }
						} else {	
						echo "<p class=error>Campo del nombre vacio</p><br>";
				} 	
		}

?>
              <input type="text" class="contact-form-text" placeholder="Tu nombre" name="nombre" value=<?php 
            echo $_SESSION['usuario'];
	?>>

              <?php


  $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["email"])){
      $email=$_POST["email"];
      if(preg_match($pattern1, $email)){
        if($_POST["email"]===$_SESSION['email']){   
        }else{
          echo "<p class=error>Campo del email incorrecto, ingresa tu email</p><br>";
        }
    } else{
        echo "<p class=error>Formato del email incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del email vacio</p><br>";
				} 	
		}

?>

              <input type="email" class="contact-form-text" placeholder="Tu email" name="email" value=<?php 
	echo $_SESSION['email'];
	?>>

              <?php

  $pattern_2 = '/^([0-9]{3})([0-9]{3})([0-9]{3})$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["telefono"])){
      $telefono=$_POST["telefono"];
      if(preg_match($pattern_2, $telefono)){
        if($_POST["telefono"]===$_SESSION['telefono']){   
        }else{
          echo "<p class=error>Campo del teléfono incorrecto, ingresa tu teléfono</p><br>";
        }
    } else{
        echo "<p class=error>Formato del telefono incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del telefono vacio</p><br>";
				} 	
		}

?>

              <input type="text" class="contact-form-text" placeholder="Tu teléfono" name="telefono" value=<?php 
	echo $_SESSION['telefono'];
	?>>

              <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["mensaje"])){
				if(strlen($_POST["mensaje"])>=10){	
						} else {	
              echo "<p class=error>El mensaje tiene que tener como minimo 10 caracteres</p><br>"; 
						 }
						} else {	
						echo "<p class=error>Campo del mensaje vacio</p><br>";
				} 	
		}

?>

              <textarea class="contact-form-text" placeholder="Tu mensaje" name="mensaje"></textarea>
              <input type="submit" class="contact-form-btn" value="Enviar" name="enviar" />


            </form>

          </div>

          <div class="tab-pane fade" id="sugerencia">
            <h1>Formulario de sugerencias</h1>
            <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
            <div class="border"></div>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

              <?php

         $error2=false;	
  
 if(isset($_POST["enviar2"])){
			if(!Empty($_POST["nombre"])){		
						} else {	
						$error2= true;
				} 	
		}

?>

              <?php


  $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

  if(isset($_POST["enviar2"])){
    if(!Empty($_POST["email"])){
      $email=$_POST["email"];
      if(preg_match($pattern1, $email)){
    } else{
      $error2= true;
    }
      	} else {	
						$error2= true;
				} 	
		}

?>

              <?php

  $pattern_2 = '/^([0-9]{3})([0-9]{3})([0-9]{3})$/';

  if(isset($_POST["enviar2"])){
    if(!Empty($_POST["telefono"])){
      $telefono=$_POST["telefono"];
      if(preg_match($pattern_2, $telefono)){
    } else{
      $error2= true;
    }
      	} else {	
						$error2= true;
				} 	
		}

?>

              <?php

if(isset($_POST["enviar2"])){
			if(!Empty($_POST["sugerencia"])){
				if(strlen($_POST["sugerencia"])>=10){	
						} else {	
              $error2= true;
						 }
						} else {	
						$error2= true;
				} 	
		}

?>

              <?php 


 if (isset($_POST['enviar2'])&& $error2==false){			
            
        include("base.php");
                 
           /** 
            if($conexion){
              echo "<p class=correcto>Conexion correcta</p><br>";
            }else{
              echo "<p class=correcto>Conexion incorrecta</p><br>";
            }
          */

            $id=$_SESSION['id'];
            $nombre2=trim($_POST['nombre']);
            $email2=trim($_POST['email']);
            $telefono2=trim($_POST['telefono']);
            $sugerencia2=$_POST['sugerencia'];
            $fecha2= date("Y-m-d H:i:s");  
            $contestacion2="no";
    
            $destino2="dranimaco2020@gmail.com";
            $contenido2="ID: ". $id . "\nNombre: " . $nombre2 . "\nEmail: " . $email2 . "\nTelefono: " . $telefono2 . "\nFecha: " . $fecha2 . "\nSugerencia: " . $sugerencia2;
            
             $headers2 = 'From: ' .$email2. "\r\n". 
            'Reply-To: ' . $email2. "\r\n" . 
            'X-Mailer: PHP/' . phpversion();

           $mail2=mail($destino2,"Sugerencia",$contenido2,$headers2);

           /** 
           if($mail2){
              echo "<p class=correcto>mensaje escrito</p><br>";
           }else{
              echo "<p class=error>mensaje no escrito</p><br>";
           }
           */

           $consulta2="INSERT INTO sugerencias (usuario_id, usuario_nombre,	usuario_email, usuario_tel, usuario_sugerencia, usuario_fecha, usuario_contestacion) 
            VALUES ('$id','$nombre2','$email2','$telefono2','$sugerencia2','$fecha2','$contestacion2')";
            $resultado2=mysqli_query($conexion,$consulta2);

            if($resultado2){
              echo "<p class=correcto>Sugerencia enviada, Se te respondera con la mayor velocidad posible</p><br>";
            }else{
              echo "<p class=error>Sugerencia no enviada,vuelve a intentarlo</p><br>";
            }
				
 }

?>


              <?php
  
  
 if(isset($_POST["enviar2"])){
			if(!Empty($_POST["nombre"])){		
        if($_POST["nombre"]===$_SESSION['usuario']){   
        }else{
          echo "<p class=error>Campo del nombre incorrecto, ingresa tu nombre</p><br>";
        }
						} else {	
						echo "<p class=error>Campo del nombre vacio</p><br>";
				} 	
		}

?>
              <input type="text" class="contact-form-text" placeholder="Tu nombre" name="nombre" value=<?php 
            echo $_SESSION['usuario'];
	?>>

              <?php


  $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

  if(isset($_POST["enviar2"])){
    if(!Empty($_POST["email"])){
      $email=$_POST["email"];
      if(preg_match($pattern1, $email)){
        if($_POST["email"]===$_SESSION['email']){   
        }else{
          echo "<p class=error>Campo del email incorrecto, ingresa tu email</p><br>";
        }
    } else{
        echo "<p class=error>Formato del email incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del email vacio</p><br>";
				} 	
		}

?>

              <input type="email" class="contact-form-text" placeholder="Tu email" name="email" value=<?php 
	echo $_SESSION['email'];
	?>>

              <?php

  $pattern_2 = '/^([0-9]{3})([0-9]{3})([0-9]{3})$/';

  if(isset($_POST["enviar2"])){
    if(!Empty($_POST["telefono"])){
      $telefono=$_POST["telefono"];
      if(preg_match($pattern_2, $telefono)){
        if($_POST["telefono"]===$_SESSION['telefono']){   
        }else{
          echo "<p class=error>Campo del teléfono incorrecto, ingresa tu teléfono</p><br>";
        }
    } else{
        echo "<p class=error>Formato del telefono incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del telefono vacio</p><br>";
				} 	
		}

?>

              <input type="text" class="contact-form-text" placeholder="Tu teléfono" name="telefono" value=<?php 
	echo $_SESSION['telefono'];
	?>>

              <?php
  
 if(isset($_POST["enviar2"])){
			if(!Empty($_POST["sugerencia"])){
				if(strlen($_POST["sugerencia"])>=10){	
						} else {	
              echo "<p class=error>La sugerencia tiene que tener como minimo 10 caracteres</p><br>"; 
						 }
						} else {	
						echo "<p class=error>Campo de la sugerencia vacia</p><br>";
				} 	
		}

?>

              <textarea class="contact-form-text" placeholder="Tu sugerencia" name="sugerencia"></textarea>
              <input type="submit" class="contact-form-btn" value="Enviar" name="enviar2" />


            </form>

          </div>



        </div>
      </div>


      <div class="border"></div>

      <h1 class="redes-sociales">Redes Sociales</h1>

      <div class="redes">
        <i class="fab fa-twitter"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
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
          <li><a href="datos.php">Datos</a></li>
          <li><a href="#">Contacto/Sugerencia</a></li>
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
