<?php
    // Inicio sesion
    session_start();


include("conexion/conexion.php");

if(isset($_SESSION['nombreUsuario']) && isset($_SESSION ['celularusuario'])){



$consulDatos = "SELECT 
date_format(fechaConsulta, '%e de %M %Y'),
horaConsulta
FROM
consulta
WHERE estatusC = 1
ORDER BY numeroConsulta DESC LIMIT 1";

// $motivoC = $_POST['cmbMotivo'];

$datos = mysqli_query($conectar, $consulDatos);
$mostrar = mysqli_fetch_array($datos);
mysqli_close($conectar);
?>



<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<a class="body nav-link" data-bs-toggle="modal" href="#motivo">Iniciar sesión</a>

<div class="modal fade" id="motivo" aria-hidden="true" aria-labelledby="restablecerContraseñaLabel3" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="" style="background-color: #d3d3d3">
      <h4 class="body gris text-center">Datos de la cita</h4>
    </div>
    <div class="modal-body">
      <form action="contrasenia-res.php" method="post">
          </div> 
              <table>
                <tr><?$$mostrar[0]?></tr>
                <tr><?php$mostrar[1]?></tr>
                <tr>ERika</tr>
                <tr><?php $_SESSION['nombreUsuario']?></tr>
                <tr><?php$_SESSION['celularusuario']?></tr>
              </table>
              
              </select><br><br><br><br><br><br><br><br><br><br><br>
              <button class="btn float-end" style="background-color: #d3d3d3" type="summit"readonly>Agendar</button>
              <button class="btn float-end me-3" style="background-color: #d3d3d3">Cancelar</button>
              </div>  
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

<?php
}

?>
