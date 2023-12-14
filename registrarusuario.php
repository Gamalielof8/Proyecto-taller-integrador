<?php

include_once "funciones.php";

guardarUsuario($_POST["Nombre"], $_POST["Apellidos"], $_POST["Usuario"], $_POST["Contraseña"]);
header("Location: login.php");
