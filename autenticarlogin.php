<?php
if (!isset($_POST["Usuario"]) || !isset($_POST["Contraseña"])) {
    exit("Faltan datos");
}
include_once "funciones.php";

$usuario = LoginProcesar2($_POST["Usuario"], $_POST["Contraseña"]);
if ( ($producto->USUARIO) == $_POST["Usuario"] && ($producto->CLAVE/CONTRASEÑA) == $_POST["Contraseña"])
{
    header("Location: tienda.php");
}
else
{
    header("Location: login.php");
}
