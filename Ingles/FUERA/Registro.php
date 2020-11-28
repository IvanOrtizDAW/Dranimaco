<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../Diseño/CSS/estilosFuera.css" type="text/css">
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
  <title>Pagina de registro de Dranimaco</title>
</head>

<body>

  <section>

    <div class="cabecera">
      <img src="../../Imagenes/logo.png" alt="">
      <h1>DRANIMACO</h1>
      <h3>Registration form</h3>
    </div>

    <ul>

      <li class="menu"><a href="../../Español/FUERA/Registro.php"><img class="imagen-idioma"
            src="../../Imagenes/Español.png" alt=""></a></li>

    </ul>

    <div class="registro-section">

      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        <?php

  $error=false;	
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){
				if(strlen($_POST["nombre"])>=4){	
					$nombre=$_POST["nombre"];
						} else {	
              $error= true;
						 }
						} else {	
						$error= true;
				} 	
		}

?>

        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass"])){
				if(strlen($_POST["pass"])>=5){	
						} else {	
              $error= true;
						 }
						} else {	
						$error= true;
				} 	
		}

?>

        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass-validar"])){
				if(strlen($_POST["pass-validar"])>=5){	
           if ($_POST["pass"] === $_POST["pass-validar"]) {
                }
                else {
                  $error= true;               
                }
						} else {	
              $error= true;         
						 }
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



 if (isset($_POST['enviar'])&& $error==false){			
            
              include("base.php");
            
        /** 
            if($conexion){
              echo "<p class=correcto>Conexion correcta</p><br>";
            }else{
              echo "<p class=correcto>Conexion incorrecta</p><br>";
            }
        */

            $nombre=trim($_POST['nombre']);
            $pass=trim($_POST['pass']);
            $email=trim($_POST['email']);
            $telefono=trim($_POST['telefono']);
            $fecha= date("Y-m-d H:i:s");  
    
            $datos=false;
            $resultado=false;

            $destino="dranimaco2020@gmail.com";
            $contenido="Nombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nFecha: " . $fecha;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers = "From: ".$email." To: ".$destino;
    
           $mail=mail($destino,"Registro (Dranimaco) ",$contenido,$headers);

           /** 
           if($mail){
              echo "<p class=correcto>Mensaje enviado al correo</p><br>";
           }else{
              echo "<p class=error>Mensaje no enviado al correo</p><br>";
           }
           */

            $verificar_usuario=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_nombre='$nombre'");
            if(mysqli_num_rows($verificar_usuario)>0){
               $datos=true;
              echo "<p class=error>User already registered, try again</p><br>";
            }

            $verificar_pass=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_pass='$pass'");
            if(mysqli_num_rows($verificar_pass)>0){
               $datos=true;
              echo "<p class=error>Password already existing, please try again</p><br>";
            }

            $verificar_email=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_email='$email'");
            if(mysqli_num_rows($verificar_email)>0){
               $datos=true;
              echo "<p class=error>Email already existing, try again</p><br>";
            }

            $verificar_telefono=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_tel='$telefono'");
            if(mysqli_num_rows($verificar_telefono)>0){
               $datos=true;
              echo "<p class=error>Existing phone, try again</p><br>";
            }

            if($datos==false){
            $consulta="INSERT INTO registrados (usuario_nombre, usuario_pass, usuario_email, usuario_tel, usuario_fecha,token) 
            VALUES ('$nombre','$pass','$email','$telefono','$fecha','0')";
            $resultado=mysqli_query($conexion,$consulta);
            }

            if($resultado && $datos==false){
                 echo "<p class=correcto>Registered user</p><br>";
            }else{
              echo "<p class=error>Registration failed, please try again</p><br>";
            }
				
 }

?>

        <?php

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){
				if(strlen($_POST["nombre"])>=4){	
						} else {	   
              echo "<p class=error>Wrong name (It must be at least 4 characters long)</p><br>";
						 }
						} else {					
						echo "<p class=error>Name field empty</p><br>";
				} 	
		}

?>


        <input type="text" class="contact-form-text" placeholder="Your name" name="nombre" value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['nombre'])){
			echo $_POST['nombre'];		
	    } else{
			echo '""';
		}
	?>>

        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass"])){
				if(strlen($_POST["pass"])>=5){	
						} else {	
              echo "<p class=error>Incorrect password (It must be at least 5 characters long)</p><br>";
						 }
						} else {	
						echo "<p class=error>Password field empty</p><br>";
				} 	
		}

?>



        <div class="ojo">
          <input type="password" class="contact-form-text" placeholder="Your password" name="pass" id="pass">
          <i class="fas fa-eye" id="boton"></i>
        </div>


        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass-validar"])){
				if(strlen($_POST["pass-validar"])>=5){	
           if ($_POST["pass"] === $_POST["pass-validar"]) {
                }
                else {   
                  echo "<p class=error>The password is not correct</p><br>"; 
                }
						} else {	    
              echo "<p class=error>Incorrect password (It must be at least 5 characters long)</p><br>"; 
						 }
						} else {			
						echo "<p class=error>Password validation field empty</p><br>";
				} 	
		}

?>

        <div class="ojo">

          <input type="password" class="contact-form-text" placeholder="Validate password" name="pass-validar"
            id="pass-validar">
          <i class="fas fa-eye" id="boton2"></i>
        </div>

        <?php

  $pattern1 = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["email"])){
      $email=$_POST["email"];
      if(preg_match($pattern1, $email)){
    } else{
        echo "<p class=error>Wrong email</p><br>";
    }
      	} else {	
						echo "<p class=error>Email field empty</p><br>";
				} 	
		}

?>

        <input type="email" class="contact-form-text" placeholder="Your email" name="email" value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['email'])){
			echo $_POST['email'];		
	    } else{
			echo '""';
		}
	?>>

        <?php

  $pattern_2 = '/^([0-9]{3})([0-9]{3})([0-9]{3})$/';

  if(isset($_POST["enviar"])){
    if(!Empty($_POST["telefono"])){
      $telefono=$_POST["telefono"];
      if(preg_match($pattern_2, $telefono)){
    } else{
        echo "<p class=error>Wrong phone</p><br>";
    }
      	} else {	
						echo "<p class=error>Empty phone field</p><br>";
				} 	
		}

?>

        <input type="text" class="contact-form-text" placeholder="Your telephone" name="telefono" value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['telefono'])){
			echo $_POST['telefono'];		
	    } else{
			echo '""';
		}
	?>>

        <div class="privacidad">
          <h5><u><b>PRIVACY POLICY</b></u></h5>

          <br />

          <p>
            This Privacy Policy establishes the terms in which
            Animation uses and protects the information that is provided by its
            users when using your website. This company is
            committed to the security of its users' data. When
            We ask you to fill in the personal information fields with which
            you can be identified, we do so by ensuring that only
            will use in accordance with the terms of this document. However
            This Privacy Policy may change over time or be
            updated so we recommend and emphasize reviewing
            continuously this page to make sure you agree with
            such changes. Information that is collected Our website may
            collect personal information for example: Name, information of
            contact such as your email address and information
            demographic. Likewise, when necessary, it may be required
            specific information to process an order or make a
            delivery or billing. Use of information collected Our site
            web uses the information in order to provide the best
            possible service, particularly to keep track of
            users, orders if applicable, and improve our
            products and services.
          </p>

          <p>
            Emails may be sent
            emails periodically through our site with offers
            specials, new products and other advertising information that
            we consider relevant to you or that may provide you with some
            benefit, these emails will be sent to the address
            that you provide and may be canceled at any time.
            Animation is highly committed to meet the commitment
            to keep your information secure. We use the most advanced systems
            and we constantly update them to make sure there is no
            no unauthorized access. Cookies A cookie refers to a
            file that is sent in order to request permission to
            be stored on your computer, by accepting said file it is created and the
            cookie then serves to have information regarding traffic
            web, and also facilitates future visits to a recurring website.
            Another function that cookies have is that with them the web can
            recognize you individually and therefore provide you with the best service
            personalized of your website. Our website uses cookies to
            to be able to identify the pages that are visited and their frequency.
            This information is used only for statistical analysis and
            the information is then permanently deleted. You can
            delete cookies at any time from your computer. Without
            However cookies help to provide a better service for the
            websites, these do not give access to information on your computer or
            you, unless you want it and provide it
            directly,. You can accept or deny the use of cookies, without
            However, most browsers accept cookies automatically
            it serves to have a better web service. Also you can
            change your computer settings to decline cookies.
            If they are declined, you may not be able to use some of our
            services.
          </p>

          <p>
            Links to Third Parties This website may contain links to other
            sites that may be of interest to you. Once you click
            these links and leave our page, we no longer have control over
            to the site to which it is redirected and therefore we are not responsible
            of the terms or privacy or the protection of your data in
            those other third party sites. These sites are subject to their
            own privacy policies for which it is recommended that the
            check to confirm that you agree to these. Control
            of your personal information At any time you can
            restrict the collection or use of personal information that
            is provided on our website. Every time you are asked
            fill in a form, such as user registration, you can mark or
            uncheck the option to receive information by email.
            In case you have marked the option to receive our newsletter or
            advertising you can cancel it at any time. Is
            company will not sell, transfer or distribute personal information
            that is collected without your consent, unless required by
            a judge with a court order. Animation reserves the right to
            change the terms of this Privacy Policy in
            any moment. This privacy policy have been generated in
            privacypolicytemplate.com
          </p>

        </div>

        <br />

        <label for="aceptar">Do you agree?</label>
        <input type="checkbox" id="aceptar" class="contact-form-btn" value="aceptar" required />

        <br /><br />

        <input type="submit" class="contact-form-btn" value="Registry" name="enviar" />


      </form>

      <div class="div-crear">

        <p class="crear">If you have an account, you can log in</p>
        <form action="inicioSesion.php">
          <button>Log in</button>
        </form>
      </div>

    </div>

  </section>

  <script src="../../Scripts/mostrarContrasena.js"></script>
  <script src="../../Scripts/mostrarContrasenaValidar.js"></script>
</body>

</html>
