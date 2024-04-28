<?php
    //iniio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container-fluid" >
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
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario'] == 'LauP2000@protgmail.com'){
?>

    <main class="row">
    <nav class='navi pe-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12'>
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
        <nav class='row'>
            <article class='col-10'>
            </article>
            <article class='col-2 mt-4'>
                <a href='pagina-admin.php'>
                    <img class='float-end me-4' src='img/inicio.png' width='40' height='40'>
                </a>
            </article>
        </nav>
        <section class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <h3 class="bodyTitle text-center">Horarios</h3>
        </section>
        <section class="row">
            <div class="border border-2 col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 pt-3 pb-3">
                <h5 class="body text-center"><strong>Horas</strong></h5>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <h6 class="body text-center">Horas Establecidas</h6>
                        <table class='p-5 table' border="2">
                            <thead>
                                <tr>
                                    <th class='table-secondary text-center' scope='col'>Horas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("conexion/conexion.php");
                                $consulta0 = "SELECT * FROM horas WHERE estatusHoras = 1 ORDER BY hora ASC";
                                $horas = mysqli_query($conectar, $consulta0);
                                while($regHoras = mysqli_fetch_array($horas)){
                                echo "<tr class='text-center'>
                                    <td scope='row text-center'>".$regHoras[1]."</td>
                                </tr>";
                                }
                                mysqli_close($conectar);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <h6 class="body text-center">Agregar Horas</h6>
                        <form class="text-center ps-5 pe-5 pb-5" action="pagina-horarios-admin.php" method="post">
                            <label class="body">Ingrese hora:</label>
                            <select class="fondo form-select" aria-label="" name="cmbHora" required>
                                <option value="" selected>Hora</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                              </select>
                            <br>
                            <button type="summit" class="btn btn-outline-secondary" style="background-color: lightgray;">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="border border-2 col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 pt-3 pb-3">
                <h5 class="body text-center"><strong>Horarios</strong></h5>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <h6 class="body text-center">Horarios Establecidos</h6>
                        <table class='p-5 table' border="2">
                            <thead>
                                <tr>
                                    <th class='table-secondary text-center' scope='col'>Fecha</th>
                                    <th class='table-secondary text-center' scope='col'>Hora</th>
                                    <th class='table-secondary text-center' scope='col'></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("conexion/conexion.php");
                                $consulta1 = "CALL verHorariosAdmin('ver')";
                                $horariosAdmin = mysqli_query($conectar, $consulta1);
                                while($regHorarios = mysqli_fetch_array($horariosAdmin)){
                                echo "<tr>
                                    <td scope='row text-center'>".$regHorarios[1]."</td>
                                    <td scope='row text-center'>".$regHorarios[2]."</td>
                                    <td scope='row text-center'>
                                        <a title='Eliminar' href='pagina-horarios-admin.php?idHorario=".$regHorarios[0]."'>
                                            <img class='rounded mx-auto d-block' src='img/eliminar.png' width='25' height='20'>
                                        </a>
                                    </td>
                                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <h6 class="body text-center">Agregar Horarios</h6>
                        <form class="row text-center ps-5 pe-5 pb-5" action="pagina-horarios-admin.php" method="post">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <label class="body">Ingrese año:</label>
                                <input type="number" class="form-control" placeholder="Año" name="txtAnioH" required>
                                <label class="body">Ingrese mes:</label>
                                <select class="form-select" aria-label="" name="cmbMesH" required>
                                    <option value="" selected>Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                                <label class="body">Ingrese dia:</label>
                                <input type="number" class="form-control" placeholder="Dia" name="txtDiaH" required>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 pt-5">
                                <select class="form-select" aria-label="" name="cmbHorasH" required>
                                    <option value="" selected>Hora</option>
                                <?php
                                include("conexion/conexion.php");
                                $consu = "SELECT * FROM horas WHERE estatusHoras = 1 ORDER BY hora ASC";
                                $verHoras = mysqli_query($conectar, $consu);
                                while($regVer = mysqli_fetch_array($verHoras)){
                                    echo "<option value='".$regVer[0]."'>" . $regVer[1] . "</option>";
                                }
                                mysqli_close($conectar);
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pt-3">
                                <button type="summit" class="btn btn-outline-secondary" style="background-color: lightgray;">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
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






<?php
include("conexion/conexion.php");

if(isset($_POST['cmbHora'])){

$hora = $_POST['cmbHora'];

$consu34 = "CALL masHoras('$hora', '1')";
if(mysqli_query($conectar, $consu34)){
    echo "<script>Swal.fire(
        'Muy bien!',
        'La hora se agrego correctamente',
        'success'
      ) </script>";
}else{
    echo "<script> Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Problemas al agregar la hora, intentelo mas tarde'
      }) </script>";
}
mysqli_close($conectar);
}

?>

<?php
include("conexion/conexion.php");

if(isset($_POST['txtAnioH']) && isset($_POST['cmbMesH']) && isset($_POST['txtDiaH']) && isset($_POST['cmbHorasH'])){
    $anio = $_POST['txtAnioH'];
    $mes = $_POST['cmbMesH'];
    $dia = $_POST['txtDiaH'];

    $fecha = $anio . '-' . $mes . '-' . $dia;
    $horaHorario = $_POST['cmbHorasH'];

    $cons90 = "CALL insertarHorarios('$fecha', '$horaHorario', 1)";
    if(mysqli_query($conectar, $cons90)){
        echo "<script>Swal.fire(
            'Muy bien!',
            'Se ha agregado el horario correctamente',
            'success'
          ) </script>";
    }else{
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Problemas al agregar el horario, intentelo mas tarde'
          }) </script>";
    }
    mysqli_close($conectar);
}

?>

<?php
include("conexion/conexion.php");

if(isset($_GET['idHorario'])){

    $horarioE = $_GET['idHorario'];

    $consEliminar = "CALL eliminarHorario('$horarioE')";
    if(mysqli_query($conectar, $consEliminar)){
        echo "<script>Swal.fire(
            'Muy bien!',
            'Se elimino horario correctamente',
            'success'
          ) </script>";
    }else{
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Problemas al elimina horario, intentelo mas tarde'
          }) </script>";
    }

}
?>

