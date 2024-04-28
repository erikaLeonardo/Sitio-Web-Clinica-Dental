       
<?php

include("conexion/conexion.php");

// if(isset($_POST['txtCorreo'])){

    $correoUsuario = $_POST['txtCorreo'];

    $conusulta = "SELECT * FROM pacientes WHERE emailPaciente = '$correoUsuario'";
    $pacientes = mysqli_query($conectar, $conusulta);
    $elegir = mysqli_fetch_array($pacientes);

    // echo "<a title='Editar' href='intento2.php?emailPaciente1=".$elegir[5]."'>Restablecer Contraseña</a>";

    if($correoUsuario == $elegir[5]){
        echo "<script>Swal.fire(
            'Muy bien!',
            'Usuario encontrado ',
            'success'
          ) </script>";
    }else{
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El usuario no existe en el sistemas'
          }) </script>";
    }

// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
</head>
<body>

    <?php
    include("conexion/conexion.php");
    // //Cuando se envian datos por get no es necesario un formulario

    // $correoEnviado = $_GET['usercorreo'];
    // echo $correoEnviado;

    // $idPacienteGET = $_GET['user'];
        //echo $idBebidaGET . " SI FUNCIONA :)";
        $user = $elegir[5];
        $consulta = "SELECT
        pacientes.nombrePaciente,
        pacientes.apellidosPaciente,
        pacientes.fechaNac,
        pacientes.telefonoPaciente,
        pacientes.emailPaciente,
        pacientes.contrasenia,
        pacientes.sexoPaciente,
        pacientes.estatusP
        FROM
        pacientes
        WHERE
        pacientes.emailPaciente = '$user'";

        $bebida = mysqli_query($conectar, $consulta);
        $regBebidas = mysqli_fetch_array($bebida);
 ?>

<body style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <main class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <section class="row justify-content-center align-items-center">
        <form class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6 col-xxl-6 mt-5 mb-5 ps-5 pe-5" style="background-color: white;" action="nuevo_pass.php" method="post" >
            <div class="col-12 bg-light mt-4">
                <a href="index.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>
            <br>
                <div class="ps-5 pe-5">
                <h1 class="body text-center">Verificación de usuario</h1>
                <?php
                    echo "<h4 class='body text-center' >Usuario: " . $user . "</h4>";
                ?>
                <h6 class="body text-center">Para confirmar que eres tu, ingresa tu año de nacimiento</h6>

                </div>
                <div class="mt-5 mb-3 ps-5 pe-5 input-group-lg">
                    <input type="number" class="form-control" placeholder="Año de nacimiento" aria-label="Año de nacimiento" aria-describedby="basic-addon1" name="txtAnioNaci" required> 
                    <input type="text" hidden name="txtusuario" value="<?php echo $user; ?>">
                </div>  
                <br>
                <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Verificar usuario</button>
                <br>
                <article class="text-center fs-4">
                    <a class="body color" href="index.php">Cancelar</a>
                    <br>
                </article>
            <br>
            <br>
        </form>
    </section>
    </main>
</body>


