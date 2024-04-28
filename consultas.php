<?php
    // Inicio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar citas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid">
        <section>
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
    <div class="row">

    <?php
    if(isset($_SESSION['nombreU']) && isset($_SESSION['nombreUsuario']) && isset($_SESSION['edadusuario']) && isset($_SESSION['usuario']) && isset($_SESSION ['celularusuario'])){
        echo "<nav class='navi pe-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12'>";
            echo "<img src='img/user.png' class='me-2 user-pic' onclick='toggleMenu()'>";

            echo "<div class='sub-menu-wrap' id='subMenu'>";
                echo "<div class='sub-menu'>";
                    echo "<div class='user-info'>";
                        echo "<img src='img/user.png'>";
                        echo "<h6 class='body f1'>" . $_SESSION['nombreU'] . "</h6>";
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

    ?>
    <main class="container-fluid">
<section class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 pt-5 pb-3">
            <h5 class="body">Elige un dia y una hora para agendar tu cita</h5>
        <?php
include("conexion/conexion.php");

$consu = "CALL mostrarHorarios('ver')";

$horarios = mysqli_query($conectar, $consu);
echo "<table class='col-md-3 mt-5 table'>
<thead>
  <tr>
    <th class='table-secondary' scope='col'>Fechas</th>
    <th class='table-secondary' scope='col'>HORAS</th>
  </tr>
</thead>
<tbody>";
while($ver = mysqli_fetch_array($horarios)){
  echo "<tr>
  <th scope='row' style='background-color: rgb(0, 255, 4);'>".$ver[0]."</th>
  <th scope='row' style='background-color: rgb(0, 255, 4);'>".$ver[1]."</th>
</tr>";
}
mysqli_close($conectar);
echo "</tbody>
</table>";
?>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <form class="row" action="consultas2.php" method="post">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 pt-4">
                <!-- <input type="date" class="form-control fondoinput" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1" name="txtDia" required> -->
                <select class='form-select form-select mb-3' aria-label='form-select-lg example' name='txtDia' size='1' required>";
                    <option value="" selected>Dia</option>
                    <?php
                    include("conexion/conexion.php");
                    $consu = "SELECT horarios.fecha FROM horarios WHERE horarios.estatush = 1 AND horarios.fecha >= (SELECT DATE(NOW()))";
                    $hora = mysqli_query($conectar, $consu);
                    while($regHora = mysqli_fetch_array($hora)){
                        echo "<option value = '" . $regHora[1] . "'>" . $regHora[1] . "</option>";
                    }
                        mysqli_close($conectar);
                    ?>
                </select>
                <br>
                <button type="submit" class="btn" style='background-color: #e9e9e9'>Ver horas Disponibles</button>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 pt-4">
            <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="cmbMotivo" size="1">
                <option value="No selecciono">--Hora--</option>
            </select>
            </div>
            <br><br><br><br><br><br><br>
        <div class="float-end">
        <a class="btn float-end" style="background-color: #d3d3d3" href="pagina-usuario.php" role="button">Cancelar</a>
        <button class="btn float-end me-2" style="background-color: #d3d3d3"disabled >Agendar</button>
        </div>
        
        <form>
        </div>

        </section>
</main>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
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
