<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Dental Arce</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
          <main class="row">
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
          </main>
              <article class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5 ps-5 pe-5">
                <h3 class="bodyTitle">Nuestras Instalaciones</h3>
              </article>
              <div class="row row-cols-1 row-cols-md-3 g-4 p-5">
        <div class="col">
          <div class="card h-100">
            <img src="img/cons2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Consultorio dental Arce, se encuentra sobre la avenida vista hermosa, camino hacía Canalejas. 
                Puedes visitarnos cuando gustes y te atenderemos con gusto.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/cons4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Contamos con un segundo consultorio en la comunidad del Xhitey, para que puedas asistir con base
                a tu mayor comodidad.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/cons1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nuestras instalaciones son las mejores en el área, 
                además contamos con el mejor servicio dental y con los mejores precios.</p>
            </div>
          </div>
        </div>
      </div>

            <center>  
            <div id="carouselExampleInterval" class="carousel slide col-12 col-sm-12 col-md-12 h-50 w-75" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                  <img src="img/cons1.jpg" class="d-block w-75 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                  <img src="img/cons10.jpg" class="d-block w-75 h-50" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/cons3.jpg" class="d-block w-75 h-50" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/cons8.jpg" class="d-block w-75 h-50" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/cons5.jpg" class="d-block w-75 h-50" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/cons9.jpg" class="d-block w-75 h-50" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> <br>
          </center>
            <article class="">
                <h3 class="bodyTitle">Tratamientos</h3>

                <article class="row p-2">
                  <article class="col-12 col-ms-12 col-md-3 pt-3">
                    <img class="img-fluid" src="img/empaste.jpeg" height="250" width="250">
                  </article>
                  <article class=" body col-12 col-ms-12 col-md-9">
                    <p class="body fs-6">Empaste <br><br>
                    Todos hemos pasado por alguna caries, y tratarlas a tiempo con un empaste permite evitar males mayores, además de recuperar el bienestar en nuestra sonrisa y nuestra salud bucodental. 
                    </p>
                  </article>
                </article>

                <br>

                <article class="row p-2">
                  <article class=" body col-12 col-ms-12 col-md-9">
                    <p class="body fs-6">Endodoncia<br><br>
                    Cuando una caries no se trata a tiempo puede dar lugar a que la pulpa dental se vea dañada, y sea entonces absolutamente necesaria una endodoncia como último recurso para salvar el diente.
                    En este tratamiento se desinfecta la pulpa, se limpia todo rastro de infección en la zona, se rellena y se reconstruye el diente. 
                    </p>
                  </article>
                  <article class="col-12 col-ms-12 col-md-3 pt-3">
                    <img class="img-fluid" src="img/onodoncia.jpeg" height="250" width="250">
                  </article>
                </article>
                <br>

                <article class="row p-2">
                  <article class="col-12 col-ms-12 col-md-3 pt-3">
                    <img class="img-fluid" src="img/estraccion.jpg" height="250" width="250">
                  </article>
                  <article class=" body col-12 col-ms-12 col-md-9">
                    <p class="body fs-6">Extraccion Dental <br><br>
                    Bien sea por necesidad en un tratamiento de ortodoncia o porque el diente está tan infectado que no se puede salvar y se opta por prevenir la propagación a los dientes colindantes. También es muy habitual el tratamiento de extracciones dentales cuando se trata de mueles del juicio y complicaciones en su erupción. 
                    </p>
                  </article>
                </article>
                <br>

                <article class="row p-2">
                  <article class=" body col-12 col-ms-12 col-md-9">
                    <p class="body fs-6">Blanqueamiento<br><br>
                    El blanqueamiento dental es un tratamiento cuyo objetivo es aclarar el color de los dientes, eliminando las manchas y la decoloración. 
                    Es el más popular de los tratamientos dentales estéticos.
                    El blanqueamiento es más efectivo sobre las manchas extrínsecas o superficiales. 
                    Para mantener el color más brillante, el tratamiento debe de repetirse eventualmente, ya que no es un tratamiento que se realice una única vez.
                    </p>
                  </article>
                  <article class="col-12 col-ms-12 col-md-3 pt-3">
                    <img class="img-fluid" src="img/blanqueamiento.jpeg" height="250" width="250">
                  </article>
                </article>

                <br>

                <article class="row p-2">
                  <article class="col-12 col-ms-12 col-md-3 pt-3">
                    <img class="img-fluid" src="img/ortodoncia.jpg" height="250" width="250">
                  </article>
                  <article class=" body col-12 col-ms-12 col-md-9">
                    <p class="body fs-6">Ortodoncia <br><br>
                    Especialmente en la infancia, la corrección por medio de ortodoncia de situaciones de maloclusión es uno de los tratamientos 
                    más comunes en Odontología. La ortodoncia, ya sea en su modalidad convencional o mediante la revolucionaria ortodoncia invisible, 
                    es una de las mayores herramientas de prevención de problemas bucodentales graves a largo plazo. 
                    </p> <br>
                  </article>
                </article>

            </article>
            <article class="center col-12 col-sm-1 bg-white">
            </article>


            <article class="ms-5">
                <h3 class="bodyTitle">Resultados</h3><br>
            </article>
            <center>
            <div id="carouselExampleFade" class="carousel slide carousel-fade col-12 col-sm-12 col-md-12 h-50 w-50">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/res1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/res2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/res3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> <br><br><br>
          </center>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

            <footer class="row">
              <div class="col-12"  style="background-color: #AAE3E2;">
                <h3 class="ps-5 bodyTitle">Avisos</h3><br>
              </div>
                <?php
                include("conexion/conexion.php");
                $consulta = "SELECT * FROM anuncios where estatusAnuncios = 1";
                $anuncios = mysqli_query($conectar, $consulta);
                while($actual = mysqli_fetch_array($anuncios)){
                    echo "<table class='col-11>";
                    echo "<tr>";
                    echo "<td class='body'>&nbsp; &nbsp; &nbsp" .  $actual[1] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                    // echo "<textarea class='body form-control' name='txtAnuncio' style='background-color: #d3d3d3' id='anuncioA' rows='3' value ='" . $actual['escribeAnuncio'] . "'></textarea>";
                }
                
                echo "<br>";
                echo "<br>";
                ?>
            </footer>


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