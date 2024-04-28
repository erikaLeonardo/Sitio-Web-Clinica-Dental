<?php
    // Inicio sesion
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
</head>

<body class="container-fluid" style='background-color: #e9e9e9'>
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
    if(isset($_SESSION['nombreU']) && isset($_SESSION['nombreUsuario']) && isset($_SESSION['edadusuario']) && isset($_SESSION['usuario']) && isset($_SESSION ['celularusuario']) && isset($_SESSION['id'])){
    ?>
    <div class="row">
        <nav class="navi pe-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <img src="img/user.png" class=" me-2 user-pic" onclick="toggleMenu()">

<?php

            echo "<div class='sub-menu-wrap' id='subMenu'>";
                echo "<div class='sub-menu'>";
                    echo "<div class='user-info'>";
                        echo "<img src='img/user.png'>";
                        echo "<h6 class='body f1'>" . $_SESSION['nombreU'] . "</h6>";
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
    echo "<main class='row' style='background-color: #e9e9e9'>";
        echo "<section class='col-12 col-sm-12 col-md-5' col-lg-5 col-xl-5 col-xxl-5>";
            echo "<article class='text-start mt-5 me-5 pt-3 ms-5 me-5 ps-4'>";
                
                        
                        echo "<h3 class='bodyTitle fs-2' style='color: #001a57'> Hola, bienvenido de nuevo</h3>";
                        echo "<p class='fs-5'></p>";
                        echo "<p class='body fs-5 pt-3'>" . $_SESSION['nombreUsuario'] . "</p>";
                        echo "<p class='body fs-5'>" . $_SESSION['edadusuario'] . " años</p>";
                        echo "<p class='body fs-5'>" . $_SESSION['usuario'] . "</p>";
                        echo "<p class='body fs-5'>" . $_SESSION['celularusuario'] . "</p>";

    
?>
            </article>
        </section>
        <section class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="mt-5">
                <img class="mt-5 rounded-circle rounded mx-auto d-block img-fluid" src="img/usersicon.jpg">
            </div>
        </section>
        <section class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <artcle class="mt-5">
                <a href="consultas.php">
                    <img class="rounded mx-auto d-block mt-5 pt-3 img-fluid" src="img/calendario.png" width="330" height="300">
                </a>
                </article>
        </section>
    </main>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <?php
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
</body>

</html>
