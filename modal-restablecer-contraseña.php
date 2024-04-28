<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<a class="body nav-link" data-bs-toggle="modal" href="#restablecer-Contrasenia">Iniciar sesión</a>

<div class="modal fade" id="restablecer-Contrasenia" aria-hidden="true" aria-labelledby="restablecerContraseniaLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="col-8 mt-7" action="contraseniar.php" method="post" >
            </div>
                <div class="ms-5 me-5 ps-5 pe-5">
                    <h2 class="body text-center">Ingresa tu correo electronico para restablecer tu contraseña</h2>
                </div>
                <div class="mt-2 mb-3 ms-3 me-3 ps-5 pe-5 input-group-lg">
                    <input type="email" class="form-control fondoinput" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="basic-addon1" name="txtCorreo" require>
                </div>  
                <br>
                <button class="btn btn-lg d-grid gap-2 col-6 mx-auto" style="background-color: #59C1BD" type="summit">Restablecer contraseña</button>
                <br>
                <article class="text-center fs-4">
                    <!-- <a class="body color" data-bs-target="#inicioSesion" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar</a> -->
                    <br>
                </article>
                <br>
                <br>
            </form>
      </div>
      <div class="row modal-footer">
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

<?php

include("conexion/conexion.php");
include("modal-verificacion-usuario.php");




?>