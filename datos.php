<!-- <link rel="stylesheet" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

<?php
// if(isset($_POST['txtDia'])){
//     $fecha = $_POST['txtDia'];


// echo "<form action='validar.php' method='post'>";
// echo "<input type='date' class='form-control fondoinput' value='$fecha' placeholder='Fecha' aria-label='Fecha' aria-describedby='basic-addon1' name='diaElegido'>";
// echo "<br>";

// echo "<select class='form-select form-select-lg' style='background-color: #d3d3d3' aria-label='form-select-lg example' name='cmbhora' id='hora'>";
//     echo "<option value='No selecciono'>--Seleccione--</option>";

//     include("conexion/conexion.php");
//     $consu = "CALL verhoras('$fecha')";
//     $hora = mysqli_query($conectar, $consu);
//     while($regHora = mysqli_fetch_array($hora)){
//         echo "<option value = '" . $regHora[1] . "'>" . $regHora[1] . "</option>";
//     }
//         mysqli_close($conectar);
// echo "</select>";
//         echo "<button type='submit'>ENVIAR</button>";
// echo "</form>";


//  }

?>
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

    if(isset($_POST['txtDia'])){
        $fecha = $_POST['txtDia'];

    
            echo "</div>";
            echo "<div class='col-md-6'>";
            echo "<form class='row' form action='validar.php' method='post'>";
                echo "<div class='col-md-5 mt-5 pt-4'>";
                    echo "<input type='date' class='form-control fondoinput' placeholder='Fecha' aria-label='Fecha' aria-describedby='basic-addon1' value='$fecha' name='diaElegido'>";
                    echo "<br>";
                    echo "<button type='submit' class='btn' style='background-color: #e9e9e9'>Ver horas Disponibles</button>";
                echo "</div>";
                echo "<div class='col-md-5 mt-5 pt-4'>";
                echo "<select class='form-select form-select-lg mb-3' aria-label='form-select-lg example' name='cmbhora' size='1'>";
                    echo "<option value='No selecciono'>--Hora--</option>";
                    
                    include("conexion/conexion.php");
                    $consu = "CALL verhoras('$fecha')";
                    $hora = mysqli_query($conectar, $consu);
                    while($regHora = mysqli_fetch_array($hora)){
                        echo "<option value = '" . $regHora[1] . "'>" . $regHora[1] . "</option>";
                    }
                        mysqli_close($conectar);
                    ?>
                </select>
                </div>
                <br><br><br><br><br><br><br>
            <div class="float-end">
            <button class="btn float-end me-3" style="background-color: #d3d3d3" href='pagina-usuario.php'>Cancelar</button>
            <button class="btn float-end me-3" style="background-color: #d3d3d3" type="summit" >Agendar</button>
            </div>
            
            <form>
            </div>
            <?php
    }
            ?>
    
            </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>
    
    