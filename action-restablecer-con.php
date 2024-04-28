<?php


include("conexion/conexion.php");
include('modal-verificacion-usuario.php');

    if(isset($_POST['txtCorreo'])){

        $correoUsuario = $_POST['txtCorreo'];

        $conusulta = "SELECT * FROM pacientes WHERE emailPaciente = '$correoUsuario'";
        $pacientes = mysqli_query($conectar, $conusulta);
        $elegir = mysqli_fetch_array($pacientes);
        echo $elegir[5];

        // echo "<a title='Editar' href='intento2.php?emailPaciente1=".$elegir[5]."'>Restablecer Contraseña</a>";

        if($correoUsuario == $elegir[5]){
            header("location:restablecer-contrasenia.php?emailPaciente1=$elegir[5]");
        }else{
            echo "<script language='JavaScript'>alert ('El usuario no existe, verifique sus datos'); </script>";
        }

    }


?>