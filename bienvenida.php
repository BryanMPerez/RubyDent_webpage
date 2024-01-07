<?php

session_start();
$correo = $_SESSION['username']; 

if(!isset($correo)){
   header("location: formularioInicioDeSesion.html");
}else{

echo "<h1>BIENVENIDO $correo </h1>";

echo "<a href='agendamientoCita.html'> AGENDAR CITA</a>
      <br />
      <a href='salir.php'> SALIR</a>";

}    
?>