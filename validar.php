<?php

    // Inicio sesion
    session_start();

if(isset($_POST['cmbhora'])){
$horaparacita = $_POST['cmbhora'];
$diaSe = $_POST['diaElegido'];
// echo $horaparacita;
// echo "<br>";
// echo $diaSe;
include("conexion/conexion.php");
$consulta12 = "CALL revisarHorarios('$diaSe', '$horaparacita')";
$horariosR = mysqli_query($conectar, $consulta12);
$hor = mysqli_fetch_array($horariosR);
mysqli_close($conectar);

include("conexion/conexion.php");
$conInsert = "CALL consultasA('$hor[0]', 1)";
if($consulta = mysqli_query($conectar, $conInsert)){
    // echo "<script>Swal.fire(
    //     'Muy bien!',
    //     'Anuncio Publicado',
    //     'success'
    //   ) </script>";
}else{
    echo "<script> Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Problemas al agendar la cita, intentelo mas tarde'
      }) </script>";

}
mysqli_close($conectar);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Citas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
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
            <h1 class="body text-responsive">Clinica Dental Arce</h1>
            <h2 class="body text-responsive">Dr. Laura Arce Hernandez</h2>
        </article>
        <article class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="background-color: #AAE3E2">

        </article>
    </header>

<?php

    if(isset($_SESSION['usuario']) && isset($_SESSION['nombreU'])){
?>
<section class="row">
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
    </section>
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
    echo "</div>";
    ?>


<?php

echo "<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6'>";
echo "<form class='row' action='validar.php' method='post'>";
echo "<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 pt-4'>";
echo "<input type='date' class='form-control fondoinput' value='$diaSe' placeholder='Fecha' aria-label='Fecha' aria-describedby='basic-addon1' name='diaElegido'>";
echo "<br>";
echo "<button type='submit' class='btn' style='background-color: #e9e9e9' disabled>Ver horas Disponibles</button>";
echo "</div>";
echo "<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 pt-4'>";
echo "<select class='form-select form-select' aria-label='form-select-lg example' name='cmbhora' id='hora' disabled>";
    echo "<option value='No selecciono'>--Seleccione--</option>";

    include("conexion/conexion.php");
    $consu = "CALL horaUltima('mostrar')";
    $hora = mysqli_query($conectar, $consu);
    while($regHora = mysqli_fetch_array($hora)){
        echo "<option selected = >" . $regHora[0] . "</option>";
    }
        mysqli_close($conectar);
echo "</select>";
echo "</div>";
echo "<div class='float-end'>";
echo "</form>";
echo "<a class='btn float-end' style='background-color: #d3d3d3' href='pagina-usuario.php'>Cancelar</a>";
echo "<a class='btn float-end me-2' style='background-color: #d3d3d3' data-bs-target='#motivo' data-bs-toggle='modal' data-bs-dismiss='modal'' >Agendar</a>";
echo "</div>";




include("conexion/conexion.php");
?>
<div class="modal fade" id="motivo" aria-hidden="true" aria-labelledby="motivoLabel3" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="agendarla.php" method="post">
                </div>
                    <div class="ms-5 me-5 ps-5 pe-5">
                        <h4 class="body text-center">Elige el motivo de tu cita</h4>
                    </div>
                    <div class="mt-2 mb-3 ms-3 me-3 ps-5 pe-5 input-group-lg">
                    <input type="text" hidden name="fechaCita">
                    <input type="text" hidden name="horaCita">
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="cmbMotivo" size="1">
                        <option value="No selecciono">--Seleccione--</option>
                        <?php
                        $consulta = "SELECT * FROM motivo";
                        $motivo = mysqli_query($conectar, $consulta);
                        while($regMotivo = mysqli_fetch_array($motivo)){
                            echo "<option value = '" . $regMotivo[0] . "'>" . $regMotivo[1] . "</option>";
                        }
                        mysqli_close($conectar);
                        ?>
                    </select><br><br><br><br><br><br><br><br><br><br><br>
                    <button class='btn btn-secondary' type="summit">Agendar</button>
                    <a class='btn float-end me-3 btn-secondary' href='pagina-usuario.php'>Cancelar</a>
                    </div>  
                    <br>
                    <br>
                </form>
          </div>
          <div class="row modal-footer">
          </div>
        </div>
      </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    