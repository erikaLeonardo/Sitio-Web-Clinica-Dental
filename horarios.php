<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horarios</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="img/diente.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid" style="background-color: blue;">
        <section class="row">
            <div class="col-md-3" style="background-color: aqua;">
                    <table class="col-md-3 table">
                        <thead>
                          <tr>
                            <th class="table-secondary" scope="col">Fechas</th>
                            <th class="table-secondary" scope="col">HORAS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">1</th>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">1</th>
                          </tr>
                          <tr>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">2</th>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">1</th>
                          </tr>
                          <tr>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">3</th>
                            <th scope="row" style="background-color: rgb(0, 255, 4);">1</th>
                          </tr>
                        </tbody>
                      </table>
            </div>
            <div class="col-md-3" style="background-color: aqua;">
                <table class="col-md-3 table">
                    <thead>
                      <tr>
                        <th class="table-secondary" scope="col">Fechas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th style="background-color: rgb(0, 255, 4);" scope="row">1</th>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                      </tr>
                    </tbody>
                  </table>
        </div>
        <div class="col-md-6">
        <?php
include("conexion/conexion.php");

$consu = "CALL mostrarHorarios('ver')";

$horarios = mysqli_query($conectar, $consu);
echo "<table class='col-md-3 p-2 table'>
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

        </section>

    </main>
</body>
</html>

