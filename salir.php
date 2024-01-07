<?php
session_start();

session_destroy();

header("location: formularioInicioDeSesion.html");
exit();


?>