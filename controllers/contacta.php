<?php
$correo1=$_POST['correo'];
$nombre=$_POST['nombre'];
$body=$_POST['mensaje'];
$subject="Correo De Ayuda";
$contacta=True;
$body=$body."<br> El correo de contacto es ".$correo1." <br> Su nombre es ".$nombre;
$email="travelytime2@gmail.com";
require_once("correo.php");
header("contactanos.php");
?>