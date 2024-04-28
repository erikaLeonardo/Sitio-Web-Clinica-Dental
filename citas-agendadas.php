<?php
    //iniio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Agendadas</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
</head>
<body class="container-fluid">
    <header class="row">
        <article class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="background-color: #AAE3E2">
        <img class="img-fluid" src="img/logo1.png" width="230" height="150">
        </article>
        <article class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-center" style="background-color: #AAE3E2">
            <h1 class="body">Clinica Dental Arce</h1>
            <h2 class="body">Dr. Laura Arce Hernandez</h2>
        </article>
        <article class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="background-color: #AAE3E2">

        </article>
    </header>

<?php
    if(isset($_SESSION['nombreU']) && isset($_SESSION['nombreUsuario']) && isset($_SESSION['edadusuario']) && isset($_SESSION['usuario']) && isset($_SESSION ['celularusuario'])){

        if($_SESSION['usuario'] == 'LauP2000@protgmail.com'){
            echo "<div class='row'>";
                echo "<nav class='navi pe-4 col-12 col-ms-12'>";
                    echo "<img src='img/user.png' class='me-2 user-pic' onclick='toggleMenu()'>";
    
                    echo "<div class='sub-menu-wrap' id='subMenu'>";
                        echo "<div class='sub-menu'>";
                            echo "<div class='user-info'>";
                                echo "<img src='img/user.png'>";
                                echo "<h6 class='body'>". $_SESSION['nombreU'] . "</h6>";
                            echo "</div>";
                            echo "<hr>";
    
                            echo "<a href='cerrar-sesion.php' class='sub-menu-link'>";
                                echo "<img src='img/log-out-regular.png'>";
                                echo "<p class='body'>Cerrar sesión</p>";
                            echo "<span></span>";
                            echo "</a>";
    
                        echo "</div>";
                    echo "</div>";
    
                echo "</nav>";
            echo "</div>";

        echo "<nav class='row pe-4'>";
            echo "<article class='col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10'>";
            echo "</article>";
            echo "<article class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-4'>";
            echo "<a href='pagina-admin.php'>";
                echo "<img class='float-end me-4' src='img/inicio.png' width='40' height='40'>";
            echo "</a>";
            echo "</article>";
        echo "</nav>";
        echo "<main class='row p-5'>";
            echo "<section class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12'>";
                echo "<article>";
                    echo "<h2 class='bodyTitle fs-2'>Citas Agendadas</h2>";
                echo "</article>";
            echo "</section>";
            echo "<script>";
                echo "let subMenu = document.getElementById('subMenu');";

                echo "function toggleMenu() {";
                    echo "subMenu.classList.toggle('open-menu');";
                echo "}";
            echo "</script>";

                include("conexion/conexion.php");

                $fecha = "Consulta";

                $consulta0 = "SELECT * FROM agendar WHERE estatus = '1'";
                $agendar = mysqli_query($conectar, $consulta0);
                $regEliminar = mysqli_fetch_array($agendar);

                // echo $regEliminar[0];

                


                $consulta = "CALL citasAgendads('$fecha')";
                
                $citasAgendadas = mysqli_query($conectar, $consulta);

                while($regCitasA = mysqli_fetch_array($citasAgendadas)){
                    
                    echo "<h4 class='body'>" . $regCitasA[1] . "</h4>";
                    echo "<h6 class='body'>" . $regCitasA[2] . "</h6>"; 
                    echo "<table class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12' border='1'>
                        <tr>
                            <th class='body' style='background-color: #d3d3d3'>Nombre</th>
                            <th class='body' style='background-color: #d3d3d3'>Telefono</th>
                            <th style='background-color: #d3d3d3'></th>
                        </tr>";
                    echo "<tr>" .

                            "<td class='body'>" .  $regCitasA[3] . "</td>" .
                            "<td class='body'>" .  $regCitasA[4] . "</td>" .
                            "<td><a href='eliminar-citasAgendadas.php?idCita=".$regCitasA[0]."'><img src= 'img/eliminar.png' width= '25' height= '25'></td>" .
                        "</tr>
                    </table><br><br>";
                }
            
        echo "</main>";

        }else{
            echo "<script> Swal.fire({
                icon: 'error',
                title: 'Acceso Denegado',
                text: 'Este usuario no es administrador'
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


