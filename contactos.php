<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
  </head>
<body class="container-fluid ">
            <header class="row">
                <div class="text-center" style="background-color: #AAE3E2;">
                    <div class="row">
                        <div class="col-2">
                          <img class="img-fluid" src="img/logo1.png" width="230" height="150">
                        </div>
                        <div class="col-8 text-center">
                            <h1 class="body">Clínica Dental Arce</h1>
                            <h4 class="body">Dra. Laura Arce Hernández</h4>
                        </div>
                    </div>
                </div>
            </header>
            <section class="row">
            <!-- <article class="col-12 col-sm-12"> -->
            <nav class="navbar navbar-expand-lg" style="background-color: #59C1BD;">
                <div class="container-fluid">
                  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="colorazul nav-link active" aria-current="page" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="colorazul nav-link" href="ubicacion.php">Ubicación</a>
                      </li>
                      <li class="nav-item">
                        <a class="colorazul nav-link" href="contactos.php">Contáctanos</a>
                      </li>
                      <li class="nav-item">
                        <a class="colorazul body nav-link" data-bs-toggle="modal" href="#inicioSesion">Iniciar sesión</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </section>
              <!-- </article> -->
              <section class="row">
              <article class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 pt-5 ps-5 pe-5">
                <h3 class="bodyTitle">Contactos</h3> <br>
                <h5 class="body">Especialidades:</h5>
                <ul>
                <li> Odontologia General </li>
                <li> Endodoncia </li>
                <li> Odontologia Estetica </li>
                <li> Ortodoncia </li>
                </ul>
                <h5 class="body">Telefono:</h5>
                <p class="body">55 79 06 60 24</p> <br>
                <h5 class="body">Correo Electronico:</h5>
                <p class="body">LauP2000@protgmail.com</p> <br>
            </article>
            <article class="text-center col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 p-5 pe-2">
              <img src="img/foto.png" class="img-fluid" width="330" height="250">
            </article>
            </section>
    </main>

    <div class="modal fade" id="inicioSesion" aria-hidden="true" aria-labelledby="inicioSesionLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="pt-5 ps-5 pe-5" action="prueb_inicio.php" method="post" >
                    <div class="mt-3 mb-3 input-group">
                        <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" required>
                    </div>  
                    <div class="mb-3 input-group">
                        <input type="password" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia" required>
                    </div>
                <br>
                    <button class="btn btn d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Iniciar Sesion</button>
                </form>
            </div>
            <div class="row modal-footer">
            <article class="text-center fs-5">
                <a class="color" href="contrasenia-res.php">Restablecer contraseña</a>
                <br>
                ¿Sin cuenta?
                <a class="color" href="crear-cuenta.php">Crea una</a>
                <br>
                <br>
            </article>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>