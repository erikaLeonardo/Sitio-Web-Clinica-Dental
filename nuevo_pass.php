
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
<?php
include("conexion/conexion.php");
//if(isset($_POST['txtAñoNaci']) && isset($_POST['txtusuario'])){

    $nacimiento = $_POST['txtAnioNaci'];
    $user = $_POST['txtusuario'];

    $conConfirmacion = "CALL anioNacimiento('$user')";
    $anio = mysqli_query($conectar, $conConfirmacion);
    $nac = mysqli_fetch_array($anio);

    if($nacimiento == $nac[0]){
        // header("location:nuevo_pass.php?user=$user");
    }else{
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Los datos no coinciden intentalo de nuevo'
          }) </script>";
    }
    mysqli_close($conectar);

?>
<?php
    include("conexion/conexion.php");

    // $idPacienteGET = $_GET['emailPaciente1'];

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

        $pas = mysqli_query($conectar, $consulta);
        $regBebidas = mysqli_fetch_array($pas);
 ?>

<body style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <main class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <section class="row justify-content-center align-items-center">
        <form class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6 col-xxl-6 mt-5 mb-5 ps-5 pe-5" style="background-color: white;" action="password-nuevo.php" method="post" >
            <div class="col-12 bg-light mt-4">
                <a href="index.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>
            <br>
                <div class="ps-5 pe-5">
                <h1 class="body text-center">Nueva Contraseña</h1>
                <?php
                    echo "<h4 class='body text-center' >Usuario: " . $user . "</h4>";
                ?>
                <h6 class="body text-center">Ingresa una nueva contraseña</h6>

                </div>
                <div class="mt-5 mb-3ps-5 pe-5 input-group-lg">

                <input type="text" hidden value="<?php echo $user?>" name="txtusu">
                <input type="text" hidden value="<?php echo $nacimiento?>" name="txtfecha">
                <input type="password" max="20" min="8" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtNuevoPass" required> 
                
                <?php
//}
                ?>

                <span>                       
                Su contraseña debe tener entre 8 y 20 caracateres, no debe contener espacios, caracteres especiales ni emoji.
                    </span>
                </div>  
                <br>
                <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Restablecer contraseña</button>
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
</html>

<?php

// include("conexion/conexion.php");

// if(isset($_POST['txtNuevoPass']) && isset($_POST['txtusu'])){

//     $usuarioE = $_POST['txtusu'];
//     $nuevoPassword = $_POST['txtNuevoPass'];

//     $consultaNew = "CALL restablecerPassword('$usuarioE', '$nuevoPassword')";
//     if(mysqli_query($conectar, $consultaNew)){
//         echo "<script>Swal.fire(
//             'Muy bien!',
//             'Contraseña restablecida correctamente',
//             'success'
//           ) </script>";
//     }else{
//         echo "<script> Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Problemas al restablecer contraseña, intentelo más tarde'
//           }) </script>";
//     }
//     mysqli_close($conectar);

// }
?>