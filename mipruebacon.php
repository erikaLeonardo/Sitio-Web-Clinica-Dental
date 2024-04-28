<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<main class="container bg-light">
        <section class="row">
            <article class="col-12 bg-light">
                <a href="iniciar-sesion.php">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </article>

            <article class="col-12 bg-light">
                <h1>Ingresa tu correo electronico para restablecer tu contraseña</h1>
            </artcle>

            <article class="col-2 bg-light">
                <h1 hidden>erika</h1>
            </article>
        
            <form class="col-8 mt-7" action="restablecer-contrasenia.php" method="post" >

                <div class="input-group-lg">
                    <!--<label>Correo Electronico:</label>-->
                    <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" required>
                </div>                
                <br>
                <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Restablecer contraseña</button>
                <br>
            </form>
            <article class="col-2 bg-light input-group-lg">
                <h1 hidden>Erika</h1>
            </article>
        </section>
    </main>
</body>
</html>