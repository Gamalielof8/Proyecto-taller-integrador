<?php
if (!isset($_POST["Usuario"]) || !isset($_POST["Contraseña"])) {
    exit("Faltan datos");
}
include_once "funciones.php";


if ( LoginProcesar($_POST["Usuario"], $_POST["Contraseña"]) )
{
    header("Location: tienda.php");
}
else
{
    header("Location: login.php");
}
