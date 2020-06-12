<?php
session_start();
require("../db/conexion.php");
require("../models/comprar.php");
$cont=0;
$pasajeros=$_SESSION['compra']['pasajeros'];
$salida=$_SESSION['compra']['salida'];
$fecha=$_SESSION['compra']['fecha'];
$pago=$_SESSION['compra']['pago'];
$destino=$_SESSION['compra']['destino'];
$text="Viaje a ".$destino." Con salida el dia ".$fecha." Con ".$pasajeros." pasajeros  por el precio de ".$pago;
unset($_SESSION['compra']);
$DNI=$_SESSION['user'];
$enviar=viaje($db,$text,$pago,$destino,$salida,$pasajeros);

if ($enviar) {
    $datos=datos($DNI,$db);
    $nombre=$datos['nombre'];
    $email=$datos['email'];
    $codigo=codigoviaje($db);
    $fecha = str_replace('/', '-', $fecha);
    $fecha = date("Y-m-d", strtotime($fecha));
    $fechafin=date("Y-m-d",strtotime($fecha."+ 5 day"));
    $enviar2=viajes2($db,$DNI,$codigo,$fecha,$fechafin);
    $subject = "Compra de viaje";
    if($enviar2){
        $subject="Travel and time ";

    $body=$text."<br> Muchas Gracias por su compra ".$nombre;
    }else {
        limpiar($db,$codigo);
        $body="Ha ocurrido un error en la compra de su viaje ";
    }
    include("correo.php");
   }
?>

