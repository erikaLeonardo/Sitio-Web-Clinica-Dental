<?php
    
    session_start();

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid">

        <header class="row">
            <article class="col-3" style="background-color: #AAE3E2">
            <img class="img-fluid" src="img/logo1.png" width="230" height="150">
            </article>
            <article class="col-6 text-center" style="background-color: #AAE3E2">
                <h1 class="body">Clinica Dental Arce</h1>
                <h2 class="body">Dr. Laura Arce Hernandez</h2>
            </article>
            <article class="col-3" style="background-color: #AAE3E2">

            </article>
        </header>

<?php
if(isset($_SESSION['nombreUsuario']) && isset($_SESSION['usuario']) && isset($_SESSION ['celularusuario'])){
?>
<div class="row">
        <nav class='navi pe-4 col-12 col-ms-12'>
                <img src='img/user.png' class='me-2 user-pic' onclick='toggleMenu()'>
    
                <div class='sub-menu-wrap' id='subMenu'>
                    <div class='sub-menu'>
                        <div class='user-info'>
                            <img src='img/user.png'>
                            <?php
                            echo "<h6 class='body'>". $_SESSION['nombreU'] . "</h6>";
                            ?>
                        </div>
                        <hr>
    
                        <a href='cerrar-sesion.php' class='sub-menu-link'>
                            <img src='img/log-out-regular.png'>
                            <p class='body'>Cerrar sesión</p>
                            <span></span>
                        </a>
    
                    </div>
                </div>
    
            </nav> 
        </div>
        <?php


                include("conexion/conexion.php");
                if(isset($_POST['cmbMotivo'])){
                $motivoC = $_POST['cmbMotivo'];
                $consulDatos = "SELECT 
                date_format(horarios.fecha, '%e de %M %Y'),
                horas.hora
                FROM
                consulta
                INNER JOIN
                horarios
                ON
                consulta.id_horarios = horarios.id_horarios
                INNER JOIN
                horas
                ON
                horarios.id_hora = horas.id_hora
                WHERE estatusC = 1
                ORDER BY numeroConsulta DESC LIMIT 1";
                
                
                $datos = mysqli_query($conectar, $consulDatos);
                $mostrar = mysqli_fetch_array($datos);
                mysqli_close($conectar);

                
?>
        <!-- <section class="row"> -->
            <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"><h1 hidden>Hola</h1></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"><h1 hidden>Hola</h1></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"><h1 hidden>Hola</h1></div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"><h1 hidden>Hola</h1></div>

            <div class='col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6' style="background-color: lightgray">
                <h5 style="background-color: grey">Datos de la cita</h5> -->
<?php

                include ("conexion/conexion.php");
                $nombreM = "SELECT * FROM motivo WHERE idMotivo = $motivoC";
                $name = mysqli_query($conectar, $nombreM);
                $nameM = mysqli_fetch_array($name);
                mysqli_close($conectar);

                echo "Dia: ". $mostrar[0]."";
                echo "<br>";
                echo "Hora: ". $mostrar[1]."";
                echo "<br>";
                echo "Dia: ". $nameM[1]."";
                echo "<br>";
                echo "Paciente: ". $_SESSION['nombreUsuario']."";
                echo "<br>";
                echo "Telefono: ". $_SESSION['celularusuario']."";
                }

              ?>
              <!-- </div> -->

              

              <?php
              if(isset($_POST['paciente']) && isset($_POST['motivoEnviar'])){
                $paciente = $_POST['paciente'];
                $motivo = $_POST['motivoEnviar'];
                include("conexion/conexion.php");
  
                $consul20 = "CALL citaAgendada('$paciente', '$motivo', '1')";
                if($agendada = mysqli_query($conectar, $consul20)){
                    echo "<script>Swal.fire(
                        '¡Cita Agendada con exito!',
                        'En caso de cancelar cita comunicarse con la doctora, via telefonica, con un dia de anticipacion',
                        'success'
                      ) </script>";

                }else{
                    echo "Problemas al agendar cita";
                }
                mysqli_close($conectar);
              }
            
              
              ?>

<section class="row align-items-center">
            <div class="col align-self-center">
                <a href="pagina-usuario.php">
                    <img class="img-fluid rounded mx-auto d-block" src="img/aceptar.png">
                </a>
            </div>
        </section>

    </main>
    <script>
            let subMenu = document.getElementById('subMenu');
            function toggleMenu() {
                subMenu.classList.toggle('open-menu');
            }
        </script>
    <?php

}else{
    echo "<script> Swal.fire({
        icon: 'error',
        title: 'Acceso Denegado',
        text: 'Para consultar debes iniciar sesion'
      }) </script>";
      ?>
        <section class="row align-items-center">
            <div class="col align-self-center">
                <a href="cerrar-sesion.php">
                    <img class="img-fluid rounded mx-auto d-block" src="img/iniciarsesion.png">
                </a>
            </div>
        </section>
      <?php
}

?>
</body>
</html>

