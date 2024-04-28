<?php

    include("conexion/conexion.php");
    $idCita = $_GET['idCita'];
    echo "$idCita";

    $consulta = "CALL eliminarCitaA('$idCita')";

    $eliminarCita = mysqli_query($conectar, $consulta);

    if(mysqli_query($conectar, $consulta)){
        header("location:citas-agendadas.php");
    }else{
        echo "Problemas al cancelar";
    }
    mysqli_close($conectar);
?>