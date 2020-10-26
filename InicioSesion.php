<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../DISEÑO/CSS/estilos.css" type="text/css">
    <link rel="stylesheet" href="../../DISEÑO/CSS/estilos2.css" type="text/css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../DISEÑO/Bootstrap/css/bootstrap.css" />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/png" href="../../Imagenes/logo2.png">
    <title>Pagina de inicio de sesion de Dranimaco</title>
<style>
 

.iniciosesion-section {
  background: url(../../Imagenes/fondo-login3.jpg) no-repeat center;
  background-size: cover;
  padding: 50px ;

  width: 100%;
        height: 105vh;

}

.iniciosesion-cabecera h1,
h3 {
  text-align: center;
  color: #00adb5;
  text-shadow: #00adb5 0 0 10px;
}


.div-crear{
 margin:30px auto;
    width:75%;
    text-align:center;
    max-height:auto;

}

.div-crear button{
  display: block;
  margin:0 auto;
text-align: center;
padding:10px;
background-color: #00adb5;
border-radius:15px 15px;
border:solid 3px #00adb5;
}

.div-crear button a{
color:white;
text-decoration: none;
}

.div-crear p{
color:white;
text-decoration: none;
display: inline-block;
text-align: center;
margin:10px auto;
}

.div-crear form{
    display: inline;

}

.crear{
  color:white;
  text-align: center;
}

.contact-form-text::placeholder{
  color:#00adb5;
  text-align: center;
  opacity:0.8;
}

 .recordar_pass{
    text-decoration:underline;
    color:white;
}

 .recordar_pass{
    text-decoration:underline;
    color:#00adb5;
}


.contact-form-text{
  border-radius: 600px 100px 600px 100px;
}




</style>
  </head>
  <body>
    <header>
  
      <script>
        $(document).ready(function () {
          $(".hamburgesa").click(function () {
            $(".menu").toggleClass("show");
            $("ul li").toggleClass("hide");
          });
        });
      </script>
    </header>

    <section>

    <div class="iniciosesion-cabecera">
      <img src="../../Imagenes/logo.png" alt="" width="250px" height="200px">
        <h1>DRANIMACO</h1>
        <h3>Formulario de inicio de sesion</h3>
    </div>
<br>
     <ul>
           
          <li class="menu"><a href="../../Ingles/FUERA/inicioSesion.php"><img class="imagen-idioma" src="../../Imagenes/Ingles.png" alt="" ></a></li>
        
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

            $sql2 = $conexion->query("SELECT usuario_nombre,usuario_pass,usuario_email,usuario_tel FROM registrados WHERE usuario_nombre='$usuario'");
            $row=$sql2->fetch_array();

            //echo $row['usuario_nombre'].$row['usuario_pass'].$row['usuario_email'].$row['usuario_tel'];

           $email=$row['usuario_email'];
           $telefono=$row['usuario_tel'];

              if (password_verify($pass, $row['usuario_pass'])) {
                  if($array['contar']>0){
                $_SESSION['usuario']=$usuario;
                $_SESSION['email']=$email;
                $_SESSION['telefono']=$telefono;
                header("location:../DENTRO/index.php");
              }else{
                echo "<p class=error>Nombre de usuario incorrecto,vuelve a intentarlo</p><br>";
              }
              } else {
                 echo "<p class=error>Contraseña incorrecta,vuelve a intentarlo</p><br>";
              }
       
 }

?>

<div class="div-crear">
          
          <p><a href="somos.php" class="recordar_pass">¿Quienes somos?</a>  <img src="../../Imagenes/logo2.png" alt=""></p> 
         
  </div>

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

          <input
            type="text"
            class="contact-form-text"
            placeholder="Tu nombre"
            name="nombre"
            value=<?php 
	if(isset($_POST['enviar']) && isset($_POST['nombre'])){
			echo $_POST['nombre'];		
	    } else{
			echo '""';
		}
	?>
          >

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

<div class="cosa">
          <input
            type="password"
            class="contact-form-text"
            placeholder="Tu contraseña"
             name="pass"
             id="pass"           
          >
          <i class="fas fa-eye"  id="boton"></i>
</div>

         <div class="captcha">
           <img src="Captcha.php" alt="codigo">
          </div> 
    <br>

    <script>

var boton = document.getElementById('boton');
var input = document.getElementById('pass');
boton.addEventListener("click",mostrar);

function mostrar(){
  if(input.type="password"){
      input.type="text";
      boton.style="color:#393e46;";

      setTimeout("ocultar()",2500);
  }else{
    input.type="password";
    boton.style="color:#00adb5;";
  
  }
}

function ocultar(){
  input.type="password";
  boton.src="../../Imagenes/ojo.png";
  boton.style="color:#00adb5;";


}

</script>

     <?php

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["codigo"])){
				if(strlen($_POST["codigo"])==6){	
          if($_SESSION['codigo'] == $_POST['codigo']){	
            } else{
                echo "<p class=error>El codigo no es correcto</p><br>";
            }
						} else {	   
              echo "<p class=error>Codigo incorrecto(Tiene que tener 6 caracteres)</p><br>";
						 }
						} else {					
						echo "<p class=error>Campo del codigo vacio</p><br>";
				} 	
		}

?>

	  <input type="text" id="id_codigo" name="codigo" class="contact-form-text" placeholder="Ingresa el codigo del captcha">
    <br><br>
          <input type="submit" class="contact-form-btn" value="INICIAR" name="enviar" id="enviar" />     
        </form>
        <div class="div-crear">
          <p><a href="recordarPass.php" class="recordar_pass">Cambiar contraseña</a> <i class="fas fa-key"></i></p>
          <br>
        <p class="crear">Si no tienes cuenta, creala a través del boton</p>
        <button><a href="Registro.php">Crear cuenta</a></button>
        </div>
      </div>

    </section>

  </body>
</html>
