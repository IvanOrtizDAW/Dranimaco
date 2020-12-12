<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../Diseño/CSS/estilosContacto.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../../Diseño/CSS/estilosDentroComunes.css" rel="stylesheet" type="text/css" media="screen" />
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

  <title>Dranimaco page contact</title>

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
          <a href="datos.php"><i class="fas fa-globe-europe"></i> Data</a>
        </li>
        <li class="menu">
          <a class="active" href="#"><i class="fas fa-phone"></i> Contact/Suggestion</a>
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
        <li class="menu"><a href="../../Español/DENTRO/contacto.php"><img class="imagen-idioma" alt=""
              src="../../Imagenes/Español.png"></a></li>
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
          <a class="list-group-item list-group-item-action" data-toggle="list" data-target="#contactar">Contact</a>
          <a class="list-group-item list-group-item-action" data-toggle="list" data-target="#sugerencia">Suggestion</a>
        </div>
      </div>
      <div class="col-md-9  mx-auto justify-content-center">
        <div class="tab-content">
          <div class="tab-pane fade show " id="contactar">
            <h1>Contact Form</h1>
            <h3>Write to us and we will contact you shortly</h3>
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
              echo "<p class=correcto>Message sent, you will be answered as quickly as possible</p><br>";
            }else{
              echo "<p class=error>Message not sent, please try again</p><br>";
            }
				
 }

?>


              <?php
  
         $error=false;	
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){		
        if($_POST["nombre"]===$_SESSION['usuario']){   
        }else{
          echo "<p class=error>Wrong name field, enter your name</p><br>";
        }
						} else {	
						echo "<p class=error>Name field empty</p><br>";
				} 	
		}

?>
              <input type="text" class="contact-form-text" placeholder="Your name" name="nombre" value=<?php 
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
          echo "<p class=error>Incorrect email field, enter your email</p><br>";
        }
    } else{
        echo "<p class=error>Wrong email format</p><br>";
    }
      	} else {	
						echo "<p class=error>Email field empty</p><br>";
				} 	
		}

?>

              <input type="email" class="contact-form-text" placeholder="Your email" name="email" value=<?php 
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
          echo "<p class=error>Incorrect phone field, enter your phone</p><br>";
        }
    } else{
        echo "<p class=error>Wrong phone format</p><br>";
    }
      	} else {	
						echo "<p class=error>Empty phone field</p><br>";
				} 	
		}

?>

              <input type="text" class="contact-form-text" placeholder="Your phone" name="telefono" value=<?php 
	echo $_SESSION['telefono'];
	?>>

              <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["mensaje"])){
				if(strlen($_POST["mensaje"])>=10){	
						} else {	
              echo "<p class=error>The message must be at least 10 characters long</p><br>"; 
						 }
						} else {	
						echo "<p class=error>Empty message field</p><br>";
				} 	
		}

?>

              <textarea class="contact-form-text" placeholder="Your message" name="mensaje"></textarea>
              <input type="submit" class="contact-form-btn" value="Send" name="enviar" />


            </form>

          </div>

          <div class="tab-pane fade" id="sugerencia">
            <h1>Suggestion form</h1>
            <h3>Write to us and we will contact you shortly</h3>
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
              echo "<p class=correcto>Suggestion sent, you will be answered as quickly as possible</p><br>";
            }else{
              echo "<p class=error>Suggestion not sent, please try again</p><br>";
            }
				
 }

?>


              <?php
  
  
 if(isset($_POST["enviar2"])){
			if(!Empty($_POST["nombre"])){		
        if($_POST["nombre"]===$_SESSION['usuario']){   
        }else{
          echo "<p class=error>Wrong name field, enter your name</p><br>";
        }
						} else {	
						echo "<p class=error>Name field empty</p><br>";
				} 	
		}

?>
              <input type="text" class="contact-form-text" placeholder="Your name" name="nombre" value=<?php 
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
          echo "<p class=error>Incorrect email field, enter your email</p><br>";
        }
    } else{
        echo "<p class=error>Wrong email format</p><br>";
    }
      	} else {	
						echo "<p class=error>Email field empty</p><br>";
				} 	
		}

?>

              <input type="email" class="contact-form-text" placeholder="Your email" name="email" value=<?php 
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
          echo "<p class=error>Incorrect phone field, enter your phone</p><br>";
        }
    } else{
        echo "<p class=error>Wrong phone format</p><br>";
    }
      	} else {	
						echo "<p class=error>Empty phone field</p><br>";
				} 	
		}

?>

              <input type="text" class="contact-form-text" placeholder="Your phone" name="telefono" value=<?php 
	echo $_SESSION['telefono'];
	?>>

              <?php
  
 if(isset($_POST["enviar2"])){
			if(!Empty($_POST["sugerencia"])){
				if(strlen($_POST["sugerencia"])>=10){	
						} else {	
              echo "<p class=error>The suggestion must be at least 10 characters long</p><br>"; 
						 }
						} else {	
						echo "<p class=error>Suggestion field empty</p><br>";
				} 	
		}

?>

              <textarea class="contact-form-text" placeholder="Your suggestion" name="sugerencia"></textarea>
              <input type="submit" class="contact-form-btn" value="Send" name="enviar2" />


            </form>

          </div>



        </div>
      </div>


      <div class="border"></div>

      <h1 class="redes-sociales">Social networks</h1>

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
        <h2 class="ft-title">Pages</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="historia.php">History</a></li>
          <li><a href="Galeria.php">Gallery</a></li>
          <li><a href="datos.php">Data</a></li>
          <li><a href="#">Contact/Suggestion</a></li>
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
