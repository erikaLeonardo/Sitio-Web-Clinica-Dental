<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <main class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <section class="row justify-content-center align-items-center">
        <form class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-5 mb-5 ps-5 pe-5" style="background-color: white;" action="" method="post" >
            <div class="col-12 bg-light mt-4">
                <a href="index.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>    
            <div class="mb-3 input-group">
                <input type="text" class="form-control fondoinput" placeholder="Nombres(s)" aria-label="Nombres(s)" aria-describedby="basic-addon1" name="txtNombre" pattern="[A-Za-z]{1,15}"> 
                <input type="text" hidden name="txtestatus" value="1">
            </div>
            <div class="mb-3 input-group input-group">
                <input type="text" class="form-control fondoinput" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" name="txtApellidoP">
                <input type="text" class="form-control fondoinput" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" name="txtApellidoM">
            </div>
            <div class="mb-3 input-group">
                <input type="number" class="form-control fondoinput" maxlength="10" minlength="10" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" name="txtTel1">
            </div>
            <div class="ms-2">
                <label class="fs-6">Fecha de Nacimiento:</label>
            </div>

            <div class="mb-3 input-group input-group">
                <input type="text" class="form-control fondoinput" placeholder="Año" aria-label="Año" aria-describedby="basic-addon1" name="txtAnio" pattern="[0-9]+">
                <input type="text" class="form-control fondoinput" placeholder="Mes" aria-label="Mes" aria-describedby="basic-addon1" name="txtMes" >
                <input type="text" class="form-control fondoinput" placeholder="Dia" aria-label="Dia" aria-describedby="basic-addon1" name="txtDia">
            </div>

            <div class="ms-2">
                <label class="fs-6">Sexo:</label>
            </div>

            <div class="mb-3 input-group form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" name="rbSexo" id="Mujer" value="Mujer">
                <label class="fs-6 form-check-label" for="Mujer">Mujer</label>
            </div>
            <div class="mb-3 input-group form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" name="rbSexo" id="Hombre" value="Hombre">
                <label class="fs-6 form-check-label" for="Hombre">Hombre</label>
            </div>
                    
            <div class="mb-3 input-group">
                <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo">
            </div>
                    
            <div class="mb-3 input-group">
                <input type="password" max="20" min="8" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia">
                <span id="aviso1" class="form-text">
                    Su contraseña debe tener entre 8 y 20 caracateres, no debe contener espacios, caracteres especiales, la letra Ñ-ñ, ni emoji.
                </span>
            </div>
                    
            <div class="mb-3 input-group">
                <input type="password" class="form-control fondoinput" placeholder="Confirmar Contraseña" aria-label="Confirmar Contraseña" aria-describedby="basic-addon1" name="txtConfirmacion">
            </div>        
            <br>
            <button class="btn btn d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Registrarse</button>
            <br>
        </form>
    </section>
    </main>
    <script>src="js/validaciones-input.js"</script>
    
</body>
</html>

<?php

include("conexion/conexion.php");

if(isset($_POST['txtNombre']) && isset($_POST['txtApellidoP']) && isset($_POST['txtApellidoM']) && 
isset($_POST['txtTel1']) && isset($_POST['txtAnio']) && isset($_POST['txtMes']) && isset($_POST['txtDia']) &&
isset($_POST['rbSexo']) && isset($_POST['txtCorreo']) && isset($_POST['txtContrasenia']) && isset($_POST['txtConfirmacion'])){


    //$usuario = $_GET['emailPaciente'];

    $nombres = $_POST['txtNombre'];
    $apeP = $_POST['txtApellidoP'];
    $apeM = $_POST['txtApellidoM'];
    $apellidos = $apeP . ' ' . $apeM;
    $telefono = $_POST['txtTel1'];
    $anio = $_POST['txtAnio'];
    $mes = $_POST['txtMes'];
    $dia = $_POST['txtDia'];
    $fechaNaci = $anio . '-' . $mes . '-' . $dia;
    $sexo = $_POST['rbSexo'];
    $correo = $_POST['txtCorreo'];
    $contrasenia = $_POST['txtContrasenia'];
    $confirmacion = $_POST['txtConfirmacion'];
    $estatus = $_POST['txtestatus'];


    if(empty($nombres) || empty($apeP) || empty($apeM) || empty($telefono) || empty($anio) || 
    empty($mes) || empty($dia) || empty($sexo) || empty($correo) || empty($contrasenia) || empty($confirmacion)){
    
        echo "<script> Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Todos los campos deben estar llenos!'
          }) </script>";

    }else{

        // $consultaVer = "SELECT pacientes.nombrePaciente FROM pacientes 
        // WHERE pacientes.telefonoPaciente = '$telefono'";
        // $telVer = mysqli_query($conectar, $consultaVer);
        // $regTel = mysqli_fetch_array($telVer);
    
        // $consultaVerEmail = "SELECT pacientes.emailPaciente FROM pacientes 
        // WHERE pacientes.emailPaciente = '$correo'";
        // $correoVer = mysqli_query($conectar, $consultaVerEmail);
        // $regemail = mysqli_fetch_array($correoVer);
    
        // echo $regTel[0];
        // echo $regemail[0];
        
        // if(empty($regTel[0]) || empty($regemail[0])){
            // mysqli_close($conectar);

            if($confirmacion == $contrasenia){
                // include("conexion/conexion.php");
                $consulta = "CALL insertarUsuarios(
                    '$nombres', 
                    '$apellidos', 
                    '$fechaNaci', 
                    '$telefono', 
                    '$correo', 
                    '$contrasenia', 
                    '$sexo',
                    '$estatus'
                    )";
    
                if(mysqli_query($conectar, $consulta)){
                    //header("location:crear-cuenta.php");
                    ?>
                    <script> Swal.fire('Muy bien!','Usuario registrado correctamente','success') </script>;
    <?php
                }else{
                    echo "<script> Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Problemas al registar, intentalo mas tarde'
                      }) </script>";
                }
                mysqli_close($conectar);


            }else{
                echo "<script> Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Las contraseñas no coinciden'
                  }) </script>";
            }


        // }else{

        //     echo "<script> Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'El correo o telefono ingresados ya estan registrados, verifica tus datos'
        //       }) </script>";
        // }


    }


}

// }elseif (strlen($telefono) > 10 || strlen($telefono < 10)) {
        
//     echo "<script> Swal.fire({
//         icon: 'error',
//         title: 'Oops...',
//         text: 'El telefono ingresado no coincide con el formato de 10 digitos'
//       }) </script>";

?>

