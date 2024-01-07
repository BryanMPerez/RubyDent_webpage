<?php
include_once('conexionAgendamiento.php');
// Se reciben los datos del formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['numeroDeTelefono'];
$correo=$_POST['correo'];
$fecha=$_POST['SeleccionarFecha'];
$hora=$_POST['hora'];
$genero=$_POST['genero'];
$servicio=$_POST['servicio'];

echo "los datos son los siguientes: <br>";
echo "$nombres,$apellidos,$telefono,$correo,$fecha,$hora,$genero y $servicio";

$conectar=conn(); //ejecuta las conecciones a la b.d.
$sql="INSERT INTO agendamiento(citagenNombresPaciente, citagenApellidosPaciente, citagenTelefonoPaciente, citagenCorreo, citagenFecha, citagenHora, citagenGenero, citagenServicio) 
VALUES ('$nombres', '$apellidos', '$telefono', '$correo', '$fecha', '$hora', '$genero', '$servicio')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>