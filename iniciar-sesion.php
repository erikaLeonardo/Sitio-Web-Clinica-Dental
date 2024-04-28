
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<main class="container bg-light">
        <section class="row">
            <article class="col-12 bg-light">
                <a href="index.html">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </article>

            <article class="col-2 bg-light">
                <h1 hidden>erika</h1>
            </article>
        
            <form class="col-8" action="" method="post" >
                
                <div class="input-group-lg">
                    <!--<label>Correo Electronico:</label>-->
                    <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo">
                </div>
                
                <div class="input-group-lg">
                    <!--<label>Contraseña:</label>-->
                    <input type="password" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia">
                </div>
                
                <br>
                <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Iniciar Sesion</button>
                <br>
                <br>
            </form>
                <article class="text-center fs-4">
                    <!-- <a class="color" href="restablecer-contraseña.php">Restablecer Contraseña</a> -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                    <a class="color" href="restablecer-contraseña.php" data-bs-toggle="modal" data-bs-target="#ModalResCont" data-bs-whatever="@mdo">Restablecer contraseña</a>
                    <!-- <button style="background-color: #AAE3E2" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalResCont" data-bs-whatever="@mdo">Restablecer contraseña</button> -->
                </article>
                
<div class="modal fade" id="ModalResCont" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ingresa tu correo electronico para recuperar tu contraeña</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo Electronico</label>
            <input type="text" class="form-control" name="correoRecuperacion" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-pcolor btn-lg">Restablecer contraseña</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
                <article class="text-center input-group-lg fs-4">¿Sin cuenta?
                    <a class="color" href="crear-cuenta.php">Crea una</a>
                </article>
            </form>
            <article class="col-2 bg-light input-group">
                <h1 hidden>Erika</h1>
            </article>
        </section>
    </main>
</body>
</html>

<?php
    include("conexion/conexion.php");

    if(isset($_POST['txtCorreo']) && isset($_POST['txtContrasenia'])){
        $usuario = $_POST['txtCorreo'];
        $contrasenia = $_POST['txtContrasenia'];
        //$contraseña2 = $_POST['contrasenia'];

        $consul = "CALL iniciarSesion('$usuario')";

        $inicio = mysqli_query($conectar, $consul);
        $sesion = mysqli_fetch_array($inicio);

        // $user = mysqli_query($conectar, $consultaU);
        // $nombre = mysqli_fetch_array("user");

        echo $sesion[6];
        echo $contrasenia;

        if($contrasenia == $sesion[6]){
            //header("location:pagina-usuario.php");
            // echo "Hola si eres";
            session_start();
            $_SESSION['usuario'] = $usuario;
            // header('location:pagina-usuario.php');
            //header("location:pagina-usuario.php");
            // echo "<a href='pagina-usuario.php'></a>";
        }else{
            echo "El usuario o contraseña son incorrectos";
        }

        mysqli_close($conectar);


        // $consultaU = "SELECT * FROM pacientes";
        // $ingreso = mysqli_query($conectar, $consultaU);
        // $sesioIn = mysqli_fetch_array($ingreso);

        // echo sesionIn[]

        //echo "$contraseña2";
    }

?>