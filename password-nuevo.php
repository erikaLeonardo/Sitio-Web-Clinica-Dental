

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva contraseña</title>
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

include("conexion/conexion.php");

if(isset($_POST['txtNuevoPass']) && isset($_POST['txtusu'])){

    $usuarioE = $_POST['txtusu'];
    $nuevoPassword = $_POST['txtNuevoPass'];

    $consultaNew = "CALL restablecerPassword('$usuarioE', '$nuevoPassword')";
    if(mysqli_query($conectar, $consultaNew)){
        echo "<script>Swal.fire(
            'Muy bien!',
            'Contraseña restablecida correctamente',
            'success'
          ) </script>";
          ?>
          <section class="row align-items-center">
              <div class="col align-self-center">
                  <a href="cerrar-sesion.php">
                      <img class="img-fluid rounded mx-auto d-block" src="img/aceptar.png">
                  </a>
              </div>
          </section>
        <?php
    }else{
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Problemas al restablecer contraseña, intentelo más tarde'
          }) </script>";
          ?>
          <section class="row align-items-center">
              <div class="col align-self-center">
                  <a href="cerrar-sesion.php">
                      <img class="img-fluid rounded mx-auto d-block" src="img/aceptar.png">
                  </a>
              </div>
          </section>
        <?php
    }
    mysqli_close($conectar);

}
?>
</body>
</html>
