<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "1";
$baseDatos = "consultorio";

$conectar = mysqli_connect(
    $servidor,
    $usuario,
    $contrasenia,
    $baseDatos
) or die
("Problemas al conectar con el servidor de la base de datos");

?>