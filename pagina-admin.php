<?php
    //iniio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container-fluid">
        <header class="row">
            <article class="col-3" style="background-color: #AAE3E2">
            <img class="img-fluid" src="img/logo1.png" width="230" height="150">
            </article>
            <article class="col-6 text-center" style="background-color: #AAE3E2">
                <h1 class="body">Clinica Dental Arce</h1>
                <h2 class="body">Dr. Laura Arce Hernandez</h2>
            </article>
            <article class="col-3" style="background-color: #AAE3E2">

            </article>
        </header>

<?php
    if(isset($_SESSION['nombreU'])){

        if($_SESSION['usuario'] == 'LauP2000@protgmail.com'){
            echo "<div class='row'>";
            echo "<nav class='navi pe-4 col-12 col-ms-12'>";
                echo "<img src='img/user.png' class='me-2 user-pic' onclick='toggleMenu()'>";
    
                echo "<div class='sub-menu-wrap' id='subMenu'>";
                    echo "<div class='sub-menu'>";
                        echo "<div class='user-info'>";
                            echo "<img src='img/user.png'>";
                            echo "<h6 class='body'>". $_SESSION['nombreU'] . "</h6>";
                        echo "</div>";
                        echo "<hr>";
    
                        echo "<a href='cerrar-sesion.php' class='sub-menu-link'>";
                            echo "<img src='img/log-out-regular.png'>";
                            echo "<p class='body'>Cerrar sesión</p>";
                            echo "<span></span>";
                        echo "</a>";
    
                    echo "</div>";
                echo "</div>";
    
            echo "</nav>";
        echo "</div>";
            echo "<main class='row'>";
                echo "<section class='col-md-6 col-sm-12'>";
                    echo "<article class='text-start pt-5 ps-5 pe-5'>";
                        echo "<h3 class='bodyTitle fs-2' style='color: #001a57'>Hola, Bienvenido de nuevo</h3>";
                        echo "<p class='fs-5'></p>";
                        echo "<p class='body fs-4 pt-3' style='bg-dark'>" . $_SESSION['nombreUsuario'] . "</p>";
                    echo "</article>";

                    echo "<div class='p-5'>";
                    echo "<img class='img-fluid rounded mx-auto d-block' src='img/foto.png'>";
                echo "</div>";
            echo "</section>";
            echo "<section class='col-md-6 col-sm-12'>";
            echo "<section class='row'>";
                echo "<article class='col-md-6 mt-5'>";
                    echo "<a href='citas-agendadas.php'>";
                        echo "<img class='img-fluid rounded mx-auto d-block mt-5 pt-3' src='img/citasAgendadas.png'>";
                    echo "</a>";
                echo "</article>";
                echo "<article class='col-md-6 mt-5'>";
                    echo "<a href='pagina-anuncios.php'>";
                        echo "<img class='img-fluid rounded mx-auto d-block mt-5 pt-3' src='img/avisos.png'>";
                    echo "</a>";
                echo "</article>";
                echo "<article class='col-md-6 mt-5'>";
                    echo "<a href='paginareportes.php'>";
                        echo "<img class='img-fluid rounded mx-auto d-block mt-5 pt-3' src='img/btnreportes.png'>";
                    echo "</a>";
                echo "</article>";
                echo "<article class='col-md-6 mt-5'>";
                    echo "<a href='pagina-horarios-admin.php'>";
                        echo "<img class='img-fluid rounded mx-auto d-block mt-5 pt-3' src='img/btnHorarios.png'>";
                    echo "</a>";
                echo "</article>";
                echo "</section>";
            echo "</section>";
        echo "</main>";
        echo "<script>";
            echo "let subMenu = document.getElementById('subMenu');";

            echo "function toggleMenu() {";
                echo "subMenu.classList.toggle('open-menu');";
            echo "}";
        echo "</script>";
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
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>