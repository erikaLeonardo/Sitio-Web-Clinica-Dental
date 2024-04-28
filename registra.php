<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <main class="container-fluid" style="background-image: url(img/1234.jpg); background-position: center; background-repeat: no-repeat; background-size:cover;">
    <section class="row justify-content-center align-items-center">
        <form class="col-6 mt-5 mb-5" style="background-color: white;" action="" method="post" >
            <!-- <div class="col-12 bg-light mt-4">
                <a href="index.html">
                    <img class="rounded float-end" src="img/cancelar.png" width="30" height="30">
                </a>
            </div>     -->
            <div class="mt-5 mb-3 ms-5 me-5 input-group-lg">
                <input type="text" class="form-control fondoinput" placeholder="Nombres(s)" aria-label="Nombres(s)" aria-describedby="basic-addon1" name="txtNombre" required> 
                <input type="text" hidden name="txtestatus" value="1">
            </div>
            <div class="mb-3 ps-5 pe-5 input-group input-group-lg">
                <input type="text" class="form-control fondoinput" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" name="txtApellidoP" required>
                <input type="text" class="form-control fondoinput" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" name="txtApellidoM" required>
            </div>
            <div class="mb-3 ms-5 me-5 input-group-lg">
                <input type="text" class="form-control fondoinput" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" name="txtTel1" required>
            </div>
            <div class="ms-5 me-5">
                <label class="fs-4">Fecha de Nacimiento:</label>
            </div>

            <div class="mb-3 ps-5 pe-5 input-group input-group-lg">
                <input type="text" class="form-control fondoinput" placeholder="Año" aria-label="Año" aria-describedby="basic-addon1" name="txtAnio" required>
                <input type="text" class="form-control fondoinput" placeholder="Mes" aria-label="Mes" aria-describedby="basic-addon1" name="txtMes" required>
                <input type="text" class="form-control fondoinput" placeholder="Dia" aria-label="Dia" aria-describedby="basic-addon1" name="txtDia" required>
            </div>

            <div class="ms-5 me-5">
                <label class="fs-4">Sexo:</label>
            </div>

            <div class="mb-3 ms-5 me-5 input-group-lg form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" name="rbSexo" id="Mujer" value="Mujer">
                <label class="fs-5 form-check-label" for="Mujer">Mujer</label>
            </div>
            <div class="mb-3 ms-5 me-5 input-group-lg form-check form-check-inline text-center">
                <input class="form-check-input" type="radio" name="rbSexo" id="Hombre" value="Hombre">
                <label class="fs-5 form-check-label" for="Hombre">Hombre</label>
            </div>
                    
            <div class="mb-3 ms-5 me-5 input-group-lg">
                <input type="text" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" required>
            </div>
                    
            <div class="mb-3 ms-5 me-5 input-group-lg">
                <input type="password" class="form-control fondoinput" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="txtContrasenia" required>
            </div>
                    
            <div class="mb-3 ms-5 me-5 input-group-lg">
                <input type="password" class="form-control fondoinput" placeholder="Confirmar Contraseña" aria-label="Confirmar Contraseña" aria-describedby="basic-addon1" name="txtConfirmacion">
            </div>        
            <br>
            <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Registrarse</button>
            <br>
        </form>
    </section>
    </main>
</body>
</html>