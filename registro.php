<?php
include_once('conexionRegistro.php');
// Se reciben los datos del formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

echo "los datos son los siguientes: <br>";
echo "$nombres,$apellidos,$correo y $clave";

$conectar=conn(); //ejecuta las conecciones a la b.d.
$sql="INSERT INTO registro(regisNombresPaciente, regisApellidosPaciente, regisCorreoUsuario, regisPasswordUsuario)
VALUES ('$nombres', '$apellidos', '$correo', '$clave')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";



?>