<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<main class="container-fluid">
<section class="row">
        <div class="col-md-6">
            <h5 class="body">Elige un dia y una hora para agendar tu cita</h5>
        <?php
include("conexion/conexion.php");

$consu = "CALL mostrarHorarios('ver')";

$horarios = mysqli_query($conectar, $consu);
echo "<table class='col-md-3 mt-5 p-3 table'>
<thead>
  <tr>
    <th class='table-secondary' scope='col'>Fechas</th>
    <th class='table-secondary' scope='col'>HORAS</th>
  </tr>
</thead>
<tbody>";
while($ver = mysqli_fetch_array($horarios)){
  echo "<tr>
  <th scope='row' style='background-color: rgb(0, 255, 4);'>".$ver[0]."</th>
  <th scope='row' style='background-color: rgb(0, 255, 4);'>".$ver[1]."</th>
</tr>";
}
mysqli_close($conectar);
echo "</tbody>
</table>";
?>
        </div>
        <div class="col-md-6">
        <form class="row" action="datos.php" method="post">
            <div class="col-md-6 mt-5 pt-4">
                <input type="date" class="form-control fondoinput" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1" name="txtDia">
                <br>
                <button type="submit" class="btn" style='background-color: #e9e9e9'>Ver horas Disponibles</button>
            </div>
            <div class="col-md-6 mt-5 pt-4">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cmbMotivo" size="1">
                <option value="No selecciono">--Hora--</option>
            </select>
            </div>
            <br><br><br><br><br><br><br>
        <div class="float-end">
        <button class="btn float-end me-3" style="background-color: #d3d3d3" href='pagina-usuario.php'>Cancelar</button>
        <button class="btn float-end me-3" style="background-color: #d3d3d3"disabled >Agendar</button>
        </div>
        
        <form>
        </div>

        </section>
</main>
    
</body>
</html>

