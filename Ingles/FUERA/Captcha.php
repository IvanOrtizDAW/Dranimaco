<?php

/**
 * 
 * 
 * 
 * Crear un formulario sencillo solo con usuario/contraseña/captcha, cuya validación es que usuario
 *  y contraseña sean iguales, y de más de 5 caracteres. 
(Voluntario: en vez de crear este formulario, utilizar el ejercicio UT9_EJ1 alta de usuario
 para añadir el captcha) 

Partiendo de ese formulario, añadir una imagen captcha con un texto, para que el usuario tenga
 que escribirlo.
Por tanto otra verificación que hay que tener en cuenta  es que el texto del captcha y
 el introducido por el usuario coincidan.

Si todo es correcto, mostrar la página de inicio.php, donde se le dé la bienvenida al usuario.
 *
Iván Ortiz
 * 
 */

function textoAzar( $longitud) { 
    $patron='1234567890aBcdeFghijkLmnoPqrsYuvwXyz'; 
    $key='';
    for ($i=0;$i<$longitud;$i++) { 
        $key .= $patron{rand(0,25)
     };
    }
    return $key;
}

session_start();
$_SESSION['codigo']= textoAzar(6);
$imagen = imagecreate(150,65);

$seleccion = rand(0,1);
switch($seleccion){
    case 0:
        $fondo = imagecolorallocate($imagen,42,145,147); 
    break;   
    case 1:
        $fondo = imagecolorallocate($imagen,17,45,45); 
    break;   
}

$texto = imagecolorallocate($imagen,255,255,255);
ImageFill($imagen,30,0,$fondo);
imagestring($imagen,45,45,25,$_SESSION['codigo'],$texto); // Coloca texto en la imagen
// envía imagen tras la cabecera
header('Content-type: image/png');
imagepng($imagen);


?>