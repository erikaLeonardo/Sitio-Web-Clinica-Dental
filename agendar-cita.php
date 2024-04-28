
<?php

    include("conexion/conexion.php");

    //$usuarioPaciente = $_POST['txtCorreo'];

    // $consultaP = "SELECT * FROM pacientes 
    //         WHERE emailPaciente = '$usuario'";
    
    // $pacienteU = mysqli_query($conectar, $consultaP);
    // $user = mysqli_fetch_array($pacienteU);
    // echo "<input type='text' name='usuario' value='".$user[1]."'>";

    // Inicio sesion
    session_start();

    if(isset($_SESSION['idUsuario']) && isset($_SESSION['nombreU']) && isset($_SESSION['nombreUsuario']) && isset($_SESSION['edadusuario']) && isset($_SESSION['usuario']) && isset($_SESSION ['celularusuario'])){


        $horaCita = $_POST['cmbhora'];
        $dia = $_POST['txtdia'];

        echo $_SESSION['idUsuario'];
        echo $horaCita;
        echo $dia;



    }


?>