<?php

include("conexion/conexion.php");

$consultaS = "CALL verHorarios('ver')";
$horarios = mysqli_query($conectar, $consultaS);
// echo "<th class='body' style='background-color: #d3d3d3'>FECHAS</th>";
echo "<div class='col-6 col-sm-6 col-md-6'>";
while($regH = mysqli_fetch_array($horarios)){
    
    echo "<table border='1'>";
    echo "<tr>";
    
    // echo "<th class='body' style='background-color: #d3d3d3'>HORAS</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class='body'>" .  $regH[0] . "</td>";
    echo "<td class='body'>" .  $regH[1] . "</td>";
    echo "</tr>";
    echo "</table>";
}
echo "</div>";

?>
<form action="pruev.php" method="post">
<input type="date" class="form-control fondoinput" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1" name="txtDia">
<br>

<button type="submit">VER</button>

<br>

<?php
if(isset($_POST['txtDia'])){

    $fecha = $_POST['txtDia'];
echo $fecha;

}
?>

<?php
include("conexion/conexion.php");
$con = "SELECT * FROM horarios WHERE fecha = '2023-06-18'";
$f = mysqli_query($conectar, $f);
$si = mysqli_fetch_array($f);
echo "<a href='pruev.php?iCita='" . $si[1] . "'>Ver Fecha</a>";
?>

<!-- <form action="pruev.php" method="post"> -->

<select class="form-select form-select-lg" style="background-color: #d3d3d3" aria-label=".form-select-lg example" name="cmbhora" id="hora">
                    <option value="No selecciono">--Seleccione--</option>
                    <?php
                    include("conexion/conexion.php");

                        $consu = "CALL verhoras('$fecha')";
                        $hora = mysqli_query($conectar, $consu);
                        while($regHora = mysqli_fetch_array($hora)){
                            echo "<option value = '" . $regHora[0] . "'>" . $regHora[1] . "</option>";
                        }
                        mysqli_close($conectar);

                        
                        ?>
                    </select>
                    <button type="submit">ENVIAR</button>
                    </form>

<!-- </form> -->

<?php
$mifecha = $_GET['iCita'];
if(isset($_POST['cmbhora'])){
    $hora = $_POST['cmbhora'];
$fecha = $_POST['txtDia'];
echo $hora;
echo $mifecha;
echo $fecha;
}
?>