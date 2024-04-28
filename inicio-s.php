<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueb inicio sesion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    
    <section class="row justify-content-center align-items-center">
        <form class="col-6 mt-5" style="background-color: white;" action="" method="post" >
            <div class="col-12 bg-light mt-4">
                <a href="index.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>
            <div class="mt-5 mb-3 ms-5 me-5 input-group-lg">
                <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo">
            </div>  
            <div class="mb-3 ms-5 me-5 input-group-lg">
                <input type="password" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia">
            </div>
            <br>
            <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Iniciar Sesion</button>
            <br>
            <br>
            <article class="text-center fs-4">
                <!-- <a class="color" href="restablecer-contraseña.php">Restablecer Contraseña</a> -->
                  <a class="color" href="restablecer-contrasenia.php" data-bs-toggle="modal" data-bs-target="#ModalResCont" data-bs-whatever="@mdo">Restablecer contraseña</a>
                  <br>
                  ¿Sin cuenta?
                  <a class="color" data-bs-toggle="modal" aria-label="Close" data-bs-target="#crear-cuenta">Crea una</a>
                  <br>
                  <br>
              </article>
            <br>
            <br>
        </form>
    </section>  

    <div class="modal fade" id="crear-cuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
              <div class="mb-3 input-group-lg">
                  <!--<label>Nombre(s):</label>-->
                  <input type="text" class="form-control fondoinput" placeholder="Nombres(s)" aria-label="Nombres(s)" aria-describedby="basic-addon1" name="txtNombre" required> 
                  <input type="text" hidden name="txtestatus" value="1">
              </div>
                <div class="mb-3 input-group input-group-lg">
                  <input type="text" class="form-control fondoinput" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" name="txtApellidoP" required>
                  <input type="text" class="form-control fondoinput" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" name="txtApellidoM" required>
                </div>
                <div class="mb-3 input-group-lg">
                  <!--<label>Telefono:</label>-->
                  <input type="text" class="form-control fondoinput" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" name="txtTel1" required>
              </div>
              <div>
                  <label class="fs-4">Fecha de Nacimiento:</label>
              </div>
      
              <div class="mb-3 input-group input-group-lg">
                  <input type="text" class="form-control fondoinput" placeholder="Año" aria-label="Año" aria-describedby="basic-addon1" name="txtAnio" required>
                  <input type="text" class="form-control fondoinput" placeholder="Mes" aria-label="Mes" aria-describedby="basic-addon1" name="txtMes" required>
                  <input type="text" class="form-control fondoinput" placeholder="Dia" aria-label="Dia" aria-describedby="basic-addon1" name="txtDia" required>
              </div>
      
              <div>
                  <label class="fs-4">Sexo:</label>
              </div>
      
              <div class="mb-3 input-group-lg form-check form-check-inline text-center">
                  <input class="form-check-input" type="radio" name="rbSexo" id="Mujer" value="Mujer">
                  <label class="fs-5 form-check-label" for="Mujer">Mujer</label>
              </div>
              <div class="mb-3 input-group-lg form-check form-check-inline text-center">
                  <input class="form-check-input" type="radio" name="rbSexo" id="Hombre" value="Hombre">
                  <label class="fs-5 form-check-label" for="Hombre">Hombre</label>
              </div>
                      
              <div class="mb-3 input-group-lg">
                  <!--<label>Correo Electronico:</label>-->
                  <input type="text" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" required>
              </div>
                      
              <div class="mb-3 input-group-lg">
                  <!--<label>Contraseña:</label>-->
                  <input type="password" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia" required>
              </div>
                      
              <div class="mb-3 input-group-lg">
                  <!--<label>Confirmar Contraseña:</label>-->
                  <input type="password" class="form-control fondoinput" placeholder="Confirmar Contraseña" aria-label="Confirmar Contraseña" aria-describedby="basic-addon1" name="txtConfirmacion">
              </div>        
              <br>
              <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Registrarse</button>
              <br>
              </form>
            </div>
            <div class="modal-footer">
              <br>
            </div>
          </div>
        </div>
      </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
                    $_SESSION['nombreU'] = $sesion[1];
                    $_SESSION['nombreUsuario'] = $sesion[1] . " " . $sesion[2];
                    $_SESSION['edadusuario'] = $sesion[3];
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['celularusuario'] = $sesion[4];
                    header("location:pagina-admin.php");
        
            }else{
        
                session_start();
                    $_SESSION['nombreU'] = $sesion[1];
                    $_SESSION['nombreUsuario'] = $sesion[1] . " " . $sesion[2];
                    $_SESSION['edadusuario'] = $sesion[3];
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['celularusuario'] = $sesion[4];
                    header("location:pagina-usuario.php");
        
            }

        }else{
            echo "El usuario o contraseña son incorrectos";
        }

        mysqli_close($conectar);

    }


?>