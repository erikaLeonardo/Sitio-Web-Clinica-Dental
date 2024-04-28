<?php
    //iniio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
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
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario'] == 'LauP2000@protgmail.com'){
?>

    <main class="row">
        <!-- <div class='row'> -->
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
            <h3 class="bodyTitle text-center">Reportes</h3>
        </section>
        <section class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center pt-5 pb-5">
                <h5 class="bodyTitle text-center">Reporte General</h5>
                <img class="img-fluid rounded mx-auto d-block" src="img/reporte1.png">
                <a class="btn btn-outline-secondary" style="background-color: lightgray;" href="reporte.php" role="button">Generar reporte</a>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-5">
                <h5 class="bodyTitle text-center">Reporte por año</h5>
                <img class="img-fluid rounded mx-auto d-block" src="img/reporte1.png">
                <form class="text-center ps-5 pe-5 pb-5" action="reporte-anio.php" method="post">
                    <label class="body">Ingrese año:</label>
                    <input type="number" class="form-control" placeholder="Año" name="txtanio1">
                    <br>
                    <button type="summit" class="btn btn-outline-secondary" style="background-color: lightgray;">Generar Reporte</button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-5">
                <h5 class="bodyTitle text-center">Reporte por mes</h5>
                <img class="img-fluid rounded mx-auto d-block" src="img/reporte1.png">
                <form class="text-center ps-5 pe-5 pb-5" action="reporte-mes.php" method="post">
                    <label class="body">Ingrese año:</label>
                    <input type="number" class="form-control" placeholder="Año" name="txtanio2">
                    <label class="body">Ingrese mes:</label>
                    <select class="form-select" aria-label="" name="cmbMes">
                        <option selected>Mes</option>
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
                    <br>
                    <button type="summit" class="btn btn-outline-secondary" style="background-color: lightgray;">Generar Reporte</button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-5">
                <h5 class="bodyTitle text-center">Reporte por dia</h5>
                <img class="img-fluid rounded mx-auto d-block" src="img/reporte1.png">
                <form class="text-center ps-5 pe-5 pb-5" action="reporte-dia.php" method="post">
                    <label class="body">Ingrese año:</label>
                    <input type="number" class="form-control" placeholder="Año" name="txtanio3">
                    <label class="body">Ingrese mes:</label>
                    <select class="form-select" aria-label="" name="cmbMes2">
                        <option selected>Mes</option>
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
                    <input type="number" class="form-control" placeholder="Dia" name="txtdia">
                    <br>
                    <button type="summit" class="btn btn-outline-secondary" style="background-color: lightgray;">Generar Reporte</button>
                </form>
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