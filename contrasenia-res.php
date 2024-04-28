<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña R</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <main class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <section class="row justify-content-center align-items-center">
        <form class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6 col-xxl-6 mt-5 mb-5 ps-5 pe-5" style="background-color: white;" action="restablecer-contrasenia.php" method="post" >
            <div class="col-12 bg-light mt-4">
                <a href="index.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>
            <br>
                <div class="ms-5 me-5 ps-5 pe-5">
                    <h1 class="body text-center">Ingresa tu correo electronico para restablecer tu contraseña</h1>
                </div>
                <div class="mt-5 mb-3 input-group-lg">
                    <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" required>
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