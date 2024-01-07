<?php
require 'conexionInicioDeSesion.php';
// Se reciben los datos del formulario

session_start();

$correo=$_POST['correo'];
$clave=$_POST['clave'];

$q = "SELECT COUNT(*) as contar from registro where regisCorreoUsuario = '$correo' and regisPasswordUsuario = '$clave' ";
$consulta = mysqli_query($conectar,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $correo;
    header("location: bienvenida.php");


}else{
    echo "DATOS INCORRECTOS";
}




?>