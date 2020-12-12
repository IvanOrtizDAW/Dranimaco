<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosFuera.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../Diseño/Bootstrap/css/bootstrap.css" />
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
  <title>Pagina de inicio de sesion de Dranimaco</title>
</head>

<body>
  <header>

  </header>

  <section>

    <div class="cabecera">
      <img src="../../Imagenes/logo.png" alt="">
      <h1>DRANIMACO</h1>
      <h3>Formulario de cambio de contraseña</h3>
    </div>
    <br>
    <ul>

      <li class="menu"><a href="../../Ingles/FUERA/recordarPass.php"><img class="imagen-idioma"
            src="../../Imagenes/Ingles.png" alt=""></a></li>

    </ul>

    <div class="recordar-section">

      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        <?php

         $error=false;	

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

 if (isset($_POST['enviar']) && $error==false){			

      require "base.php";

      $email = $conexion->real_escape_string($_POST['email']);

      $sql = $conexion->query("SELECT usuario_nombre,usuario_email FROM registrados WHERE usuario_email = '$email'");
      $row=$sql->fetch_array();

      $count = $sql->num_rows;

      if($count==1){

        $token =uniqid();

        $act= $conexion->query("UPDATE registrados SET token = '$token' WHERE usuario_email = '$email'");

        $email_to=$email;
        $email_subject="Cambio de contraseña";
        $email_from="dranimaco2020@gmail.com";

        $email_message="Hola ".$row['usuario_nombre']. " has solicitado cambiar tu contraseña, ingresa al siguiente link\n\n";
        $email_message .="http://localhost/dranimaco/Espa%C3%B1ol/FUERA/nuevaPass.php?user=".$row['usuario_nombre']."&token=".$token."\n\n";

         $headers = 'From: ' .$email_from . "\r\n". 
        'Reply-To: ' . $email_from. "\r\n" . 
        'X-Mailer: PHP/' . phpversion();
        
        mail($email_to, $email_subject, $email_message, $headers); 

        echo "<p class=correcto>Revisa tu correo</p><br>";

      }else{
        echo "<p class=error>Este correo no esta registrado en nuetra base de datos</p><br>";
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
        echo "<p class=error>Email incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del email vacio</p><br>";
				} 	
		}

?>


        <input type="text" class="contact-form-text" placeholder="Tu email" name="email" value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['email'])){
			echo $_POST['email'];		
	    } else{
			echo '""';
		}
	?>>

        <input type="submit" class="contact-form-btn" value="Cambiar contraseña" name="enviar" id="enviar" />
      </form>

      <div class="div-crear">
        <p class="crear">Volver al menu de inicio</p>
        <form action="inicioSesion.php">
          <button>Pulsar</button>
        </form>
      </div>

    </div>

  </section>

</body>

</html>