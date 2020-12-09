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
  <title>Pagina de registro de Dranimaco</title>

</head>

<body>

  <section>

    <div class="cabecera">
      <img src="../../Imagenes/logo.png" alt="">
      <h1>DRANIMACO</h1>
      <h3>Formulario registro</h3>
    </div>

    <ul>

      <li class="menu"><a href="../../Ingles/FUERA/Registro.php"><img class="imagen-idioma"
            src="../../Imagenes/Ingles.png" alt=""></a></li>

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

  session_start();
            
              include("base.php");

              include("Password.php");

              include("filtrado.php");

        /** 
            if($conexion){
              echo "<p class=correcto>Conexion correcta</p><br>";
            }else{
              echo "<p class=correcto>Conexion incorrecta</p><br>";
            }
        */

            $nombre=filtrado($_POST['nombre']);
            $pass=filtrado($_POST['pass']);
            $hash = password_hash($pass,  PASSWORD_DEFAULT);
            $email=filtrado($_POST['email']);
            $telefono=filtrado($_POST['telefono']);
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
              echo "<p class=error>Usuario ya registrado,vuelve a intentarlo</p><br>";
            }

           $query = "SELECT * FROM registrados";
          $comprobar= mysqli_query($conexion, $query);

          if (mysqli_num_rows($comprobar) > 0) {
            while($fila = mysqli_fetch_assoc($comprobar)){
              if(password_verify($pass,$fila["usuario_pass"])){
               $datos=true;
              echo "<p class=error>Contraseña ya existente,vuelve a intentarlo</p><br>";
              }
          }   
       }           

            $verificar_email=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_email='$email'");
            if(mysqli_num_rows($verificar_email)>0){
               $datos=true;
              echo "<p class=error>Email ya existente,vuelve a intentarlo</p><br>";
            }

            $verificar_telefono=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_tel='$telefono'");
            if(mysqli_num_rows($verificar_telefono)>0){
               $datos=true;
              echo "<p class=error>Telefono ya existente,vuelve a intentarlo</p><br>";
            }

            if($datos==false){
            $consulta="INSERT INTO registrados (usuario_nombre, usuario_pass, usuario_email, usuario_tel, usuario_fecha, token) 
            VALUES ('$nombre','$hash','$email','$telefono','$fecha',' ')";
            $resultado=mysqli_query($conexion,$consulta);
            }

            if($resultado && $datos==false){
                 echo "<p class=correcto>Usuario registrado</p><br>";
            }else{
              echo "<p class=error>Error al registrarse,vuelve a intentarlo</p><br>";
            }
				
 }

?>

        <?php

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){
				if(strlen($_POST["nombre"])>=4){	
						} else {	   
              echo "<p class=error>Nombre incorrecto(Tiene que tener como minimo 4 caracteres)</p><br>";
						 }
						} else {					
						echo "<p class=error>Campo del nombre vacio</p><br>";
				} 	
		}

?>

        <input type="text" class="contact-form-text" placeholder="Tu nombre" name="nombre" value=<?php 
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
              echo "<p class=error>Contraseña incorrecta(Tiene que tener como minimo 5 caracteres)</p><br>";
						 }
						} else {	
						echo "<p class=error>Campo de la contraseña vacia</p><br>";
				} 	
		}

?>

        <div class="ojo">
          <input type="password" class="contact-form-text" placeholder="Tu contraeña" name="pass" id="pass">
          <i class="fas fa-eye" id="boton"></i>
        </div>

        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass-validar"])){
				if(strlen($_POST["pass-validar"])>=5){	
           if ($_POST["pass"] === $_POST["pass-validar"]) {
                }
                else {   
                  echo "<p class=error>La contraseña no es la misma</p><br>"; 
                }
						} else {	    
              echo "<p class=error>Contraseña incorrecta(Tiene que tener como minimo 5 caracteres)</p><br>"; 
						 }
						} else {			
						echo "<p class=error>Campo de la validacion de la contraseña vacia</p><br>";
				} 	
		}

?>

        <div class="ojo">
          <input type="password" class="contact-form-text" placeholder="Validar contraeña" name="pass-validar"
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
        echo "<p class=error>email incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del email vacio</p><br>";
				} 	
		}

?>

        <input type="email" class="contact-form-text" placeholder="Tu email" name="email" value=<?php 
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
        echo "<p class=error>Telefono incorrecto</p><br>";
    }
      	} else {	
						echo "<p class=error>Campo del telefono vacio</p><br>";
				} 	
		}

?>

        <input type="text" class="contact-form-text" placeholder="Tu teléfono" name="telefono" value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['telefono'])){
			echo $_POST['telefono'];		
	    } else{
			echo '""';
		}
	?>>

        <div class="privacidad">
          <h5><u><b>POLÍTICA DE PRIVACIDAD</b></u></h5>

          <br />

          <p>
            El presente Política de Privacidad establece los términos en que
            Animation usa y protege la información que es proporcionada por sus
            usuarios al momento de utilizar su sitio web. Esta compañía está
            comprometida con la seguridad de los datos de sus usuarios. Cuando
            le pedimos llenar los campos de información personal con la cual
            usted pueda ser identificado, lo hacemos asegurando que sólo se
            empleará de acuerdo con los términos de este documento. Sin embargo
            esta Política de Privacidad puede cambiar con el tiempo o ser
            actualizada por lo que le recomendamos y enfatizamos revisar
            continuamente esta página para asegurarse que está de acuerdo con
            dichos cambios. Información que es recogida Nuestro sitio web podrá
            recoger información personal por ejemplo: Nombre, información de
            contacto como su dirección de correo electrónica e información
            demográfica. Así mismo cuando sea necesario podrá ser requerida
            información específica para procesar algún pedido o realizar una
            entrega o facturación. Uso de la información recogida Nuestro sitio
            web emplea la información con el fin de proporcionar el mejor
            servicio posible, particularmente para mantener un registro de
            usuarios, de pedidos en caso que aplique, y mejorar nuestros
            productos y servicios.
          </p>

          <p>
            Es posible que sean enviados correos
            electrónicos periódicamente a través de nuestro sitio con ofertas
            especiales, nuevos productos y otra información publicitaria que
            consideremos relevante para usted o que pueda brindarle algún
            beneficio, estos correos electrónicos serán enviados a la dirección
            que usted proporcione y podrán ser cancelados en cualquier momento.
            Animation está altamente comprometido para cumplir con el compromiso
            de mantener su información segura. Usamos los sistemas más avanzados
            y los actualizamos constantemente para asegurarnos que no exista
            ningún acceso no autorizado. Cookies Una cookie se refiere a un
            fichero que es enviado con la finalidad de solicitar permiso para
            almacenarse en su ordenador, al aceptar dicho fichero se crea y la
            cookie sirve entonces para tener información respecto al tráfico
            web, y también facilita las futuras visitas a una web recurrente.
            Otra función que tienen las cookies es que con ellas las web pueden
            reconocerte individualmente y por tanto brindarte el mejor servicio
            personalizado de su web. Nuestro sitio web emplea las cookies para
            poder identificar las páginas que son visitadas y su frecuencia.
            Esta información es empleada únicamente para análisis estadístico y
            después la información se elimina de forma permanente. Usted puede
            eliminar las cookies en cualquier momento desde su ordenador. Sin
            embargo las cookies ayudan a proporcionar un mejor servicio de los
            sitios web, estás no dan acceso a información de su ordenador ni de
            usted, a menos de que usted así lo quiera y la proporcione
            directamente, . Usted puede aceptar o negar el uso de cookies, sin
            embargo la mayoría de navegadores aceptan cookies automáticamente
            pues sirve para tener un mejor servicio web. También usted puede
            cambiar la configuración de su ordenador para declinar las cookies.
            Si se declinan es posible que no pueda utilizar algunos de nuestros
            servicios.
          </p>

          <p>
            Enlaces a Terceros Este sitio web pudiera contener en laces a otros
            sitios que pudieran ser de su interés. Una vez que usted de clic en
            estos enlaces y abandone nuestra página, ya no tenemos control sobre
            al sitio al que es redirigido y por lo tanto no somos responsables
            de los términos o privacidad ni de la protección de sus datos en
            esos otros sitios terceros. Dichos sitios están sujetos a sus
            propias políticas de privacidad por lo cual es recomendable que los
            consulte para confirmar que usted está de acuerdo con estas. Control
            de su información personal En cualquier momento usted puede
            restringir la recopilación o el uso de la información personal que
            es proporcionada a nuestro sitio web. Cada vez que se le solicite
            rellenar un formulario, como el de alta de usuario, puede marcar o
            desmarcar la opción de recibir información por correo electrónico.
            En caso de que haya marcado la opción de recibir nuestro boletín o
            publicidad usted puede cancelarla en cualquier momento. Esta
            compañía no venderá, cederá ni distribuirá la información personal
            que es recopilada sin su consentimiento, salvo que sea requerido por
            un juez con un orden judicial. Animation Se reserva el derecho de
            cambiar los términos de la presente Política de Privacidad en
            cualquier momento. Esta politica de privacidad se han generado en
            politicadeprivacidadplantilla.com
          </p>

          <br />
        </div>

        <br />

        <?php
          
          
	function escoger($valor){
		if(isset($_POST['enviar'])){
			if(isset($_POST['aceptar'])){
				$aficiones=$_POST['aceptar'];
				if($valor === $aficiones){
					echo "checked=checked";
				}
			}
		}
	}
          
          ?>

        <label for="aceptar">¿Estas de acuerdo?</label>
        <input type="checkbox" id="aceptar" class="contact-form-btn" value="aceptar" name="aceptar" <?php
            escoger("aceptar");
            ?> required />

        <br /><br />

        <input type="submit" class="contact-form-btn" value="Registro" name="enviar" />


      </form>

      <div class="div-crear">
        <p class="crear">Si tienes cuenta, puedes iniciar sesión</p>
        <form action="inicioSesion.php">
          <button>Iniciar sesión</button>
        </form>
      </div>

    </div>

  </section>

  <script src="../../Scripts/mostrarContrasena.js"></script>
  <script src="../../Scripts/mostrarContrasenaValidar.js"></script>
</body>

</html>