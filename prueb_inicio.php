<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
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
</body>
</html>
<?php
    include("conexion/conexion.php");

    if(isset($_POST['txtCorreo']) && isset($_POST['txtContrasenia'])){
        $usuario = $_POST['txtCorreo'];
        $contrasenia = $_POST['txtContrasenia'];

        $consul = "CALL iniciarSesion('$usuario')";
        $inicio = mysqli_query($conectar, $consul);
        $sesion = mysqli_fetch_array($inicio);

        if($contrasenia == $sesion[6]){
            
            if($usuario == 'LauP2000@protgmail.com'){

                session_start();
                    $_SESSION['id'] = $sesion[0];
                    $_SESSION['nombreU'] = $sesion[1];
                    $_SESSION['nombreUsuario'] = $sesion[1] . " " . $sesion[2];
                    $_SESSION['edadusuario'] = $sesion[3];
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['celularusuario'] = $sesion[4];
                    header("location:pagina-admin.php");
        
            }else{
        
                session_start();
                    $_SESSION['id'] = $sesion[0];
                    $_SESSION['nombreU'] = $sesion[1];
                    $_SESSION['nombreUsuario'] = $sesion[1] . " " . $sesion[2];
                    $_SESSION['edadusuario'] = $sesion[3];
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['celularusuario'] = $sesion[4];
                    header("location:pagina-usuario.php");
        
            }

        }else{
            echo "<script> Swal.fire({
                icon: 'error',
                title: 'Acceso Denegado',
                text: 'Usuario o Contraseña incorrectos, vuelve a intentarlo'
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

        mysqli_close($conectar);

    }


?>