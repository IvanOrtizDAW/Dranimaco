<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="../../Diseño/CSS/estilosFuera.css" type="text/css">

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

  </head>
  <body>
 
    <section>

    <?php

            require "base.php";

  $error=false;	

 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass"])){
				if(strlen($_POST["pass"])>=5){	
            if ($_POST["pass"] === $_POST["pass-validar"]) {
               $pass=$conexion->real_escape_string($_POST['pass']);
               $verificar_pass=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_pass='$pass'"); 
                 if(mysqli_num_rows($verificar_pass)>0){
                 $error=true;
                 }  
                }
                else {   
                 $error=true;
                }
						} else {	
                $error=true;
						 }
						} else {	
                $error=true;
				} 	
		}

?>


    <?php
    
    if(isset($_GET['user']) && isset($_GET['token'])){

        $user = $conexion->real_escape_string($_GET['user']);
        $token = $conexion->real_escape_string($_GET['token']);

        $sql = $conexion->query("SELECT token FROM registrados WHERE usuario_nombre = '$user'");

        $row=$sql->fetch_array();

        if($row['token']==$token){
    
    ?>

    <div class="cabecera">
      <img src="../../Imagenes/logo.png" alt="" width="250px" height="200px">
        <h1>DRANIMACO</h1>
        <h3>Password change form</h3>
    </div>
    <br>

      <div class="recordar-section">

        <form class="contact-form" action="#" method="post">

       <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass"])){
				if(strlen($_POST["pass"])>=5){	
               $pass=$conexion->real_escape_string($_POST['pass']);
               $verificar_pass=mysqli_query($conexion,"SELECT * FROM registrados WHERE usuario_pass='$pass'"); 
                 if(mysqli_num_rows($verificar_pass)>0){
                 echo "<p class=error>Password already existing, please try again</p><br>";
                 }  
						} else {	
              echo "<p class=error>Incorrect password (It must be at least 5 characters long)</p><br>";
						 }
						} else {	
						echo "<p class=error>Password field empty</p><br>";
				} 	
		}

?>

          <?php

if(isset($_POST['enviar']) && $error==false){

    $pass=$conexion->real_escape_string($_POST['pass']);
 
    $act = $conexion->query("UPDATE registrados SET usuario_pass = '$pass', token = '' WHERE usuario_nombre ='$user'");

    if($act ){
        echo "<div class=spinner-border text-info><p class=correcto>Password changed, wait 3 seconds ..</p></div><br>";
        Header("Refresh: 3; URL=InicioSesion.php");
    }

}

?>


<div class="ojo">
     <input
            type="password"
            class="contact-form-text"
            placeholder="Your new password"
            name="pass"
            id="pass"
          >
          <i class="fas fa-eye"  id="boton"></i>
</div>


        <?php
  
 if(isset($_POST["enviar"])){
			if(!Empty($_POST["pass-validar"])){
				if(strlen($_POST["pass-validar"])>=5){	
            if ($_POST["pass"] === $_POST["pass-validar"]) { 
                }
                else {   
                  echo "<p class=error>Validation is not correct</p><br>"; 
                }
						} else {	
              echo "<p class=error>Incorrect password (It must be at least 5 characters long)</p><br>";
						 }
						} else {	
						echo "<p class=error>Password field empty</p><br>";
				} 	
		}

?>



<div class="ojo">
          <input
            type="password"
            class="contact-form-text"
            placeholder="Validate password"
            name="pass-validar"
             id="pass-validar"  
          >
         <i class="fas fa-eye"  id="boton2"></i>
</div>

          <input type="submit" class="contact-form-btn" value=Change Password name="enviar" id="enviar" />     
        </form>
  
    </section>

<?php
        }
    }
?>


 <script src="../../Scripts/mostrarContrasena.js"></script>
    <script src="../../Scripts/mostrarContrasenaValidar.js"></script>
  </body>
</html>
