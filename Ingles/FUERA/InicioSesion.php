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
  <title>Pagina de inicio de sesion de Dranimaco</title>
</head>

<body>
  <header>

  </header>

  <section>

    <div class="cabecera">
      <img src="../../Imagenes/logo.png" alt="">
      <h1>DRANIMACO</h1>
      <h3>Login form</h3>
    </div>
    <br>
    <ul>

      <li class="menu"><a href="../../Español/FUERA/inicioSesion.php"><img class="imagen-idioma"
            src="../../Imagenes/Español.png" alt=""></a></li>

    </ul>

    <div class="iniciosesion-section">

      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        <?php 

session_start();

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
			if(!Empty($_POST["codigo"])){
				if(strlen($_POST["codigo"])==6){	
          if($_SESSION['codigo'] == $_POST['codigo']){	
            } else{
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

 if (isset($_POST['enviar'])&& $error==false){			

                include("base.php");
            
            $usuario=$_POST['nombre'];
            $pass=$_POST['pass'];

            $sql= "SELECT COUNT(*) as contar from registrados where usuario_nombre ='$usuario'";
            $consulta=mysqli_query($conexion,$sql);
            $array=mysqli_fetch_array($consulta);

            $sql2 = $conexion->query("SELECT usuario_id,usuario_nombre,usuario_pass,usuario_email,usuario_tel FROM registrados WHERE usuario_nombre='$usuario'");
            $row=$sql2->fetch_array();

            //echo $row['usuario_nombre'].$row['usuario_pass'].$row['usuario_email'].$row['usuario_tel'];

           $email=$row['usuario_email'];
           $telefono=$row['usuario_tel'];
            $id=$row['usuario_id'];
     
            if($array['contar']>0){
              if (password_verify($pass, $row['usuario_pass'])) {
                $_SESSION['id']=$id;   
                $_SESSION['usuario']=$usuario;
                $_SESSION['email']=$email;
                $_SESSION['telefono']=$telefono;
                header("location:../DENTRO/index.php");
              } else {
                 echo "<p class=error>Wrong password, try again</p><br>";
              }
            }else{
                echo "<p class=error>Incorrect username, please try again</p><br>";
              }
			
 }

?>

        <?php

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["nombre"])){
				if(strlen($_POST["nombre"])>=4){	
						} else {	   
              echo "<p class=error>Incorrect name (It must be at least 4 characters long)</p><br>";
						 }
						} else {					
						echo "<p class=error>Name field empty</p><br>";
				} 	
		}

?>

        <div class="div-crear">

          <p><a href="somos.html" class="recordar_pass">About us?</a> <img src="../../Imagenes/logo2.png" alt=""></p>

        </div>

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

        <div class="captcha">
          <img src="Captcha.php" alt="codigo">
        </div>
        <br>

        <?php

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["codigo"])){
				if(strlen($_POST["codigo"])==6){	
          if($_SESSION['codigo'] == $_POST['codigo']){	
            } else{
                echo "<p class=error>The code is not correct</p><br>";
            }
						} else {	   
              echo "<p class=error>Incorrect code (It must be 6 characters)</p><br>";
						 }
						} else {					
						echo "<p class=error>Code field empty</p><br>";
				} 	
		}

?>

        <input type="text" id="id_codigo" name="codigo" class="contact-form-text" placeholder="Enter the captcha code">
        <br><br>
        <input type="submit" class="contact-form-btn" value="START" name="enviar" id="enviar" />
      </form>
      <div class="div-crear">
        <p><a href="recordarPass.php" class="recordar_pass">Remember password</a> <i class="fas fa-key"></i></p>
        <br>
        <p class="crear">If you don't have an account, create it through the button</p>
        <form action="Registro.php">
          <button>Create Account</button>
        </form>
      </div>
    </div>

  </section>

  <script src="../../Scripts/mostrarContrasena.js"></script>
</body>

</html>
