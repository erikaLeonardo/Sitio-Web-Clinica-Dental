<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <main>
    <header>
            <h1>Consultorio Dental Arce</h1>
            <h2>Dr. Laura Arce Hernandez</h2>
        </header>
        <form action="" method="post">
            <div>
                <label>Fecha:</label>
                <input type="text" name="txtAñoCita">
                <input type="text" name="txtMesCita">
                <input type="text" name="txtDiaCita">
            </div>

            <div>
                <label>Hora:</label>
                    <select name="cmbHora" size="1">
                        <option value="No Selecciono">--SELECCIONA--</option>
                        <option value="8:00">8:00</option>
                        <option value="10:00">10:00</option>
                        <option value="12:00">12:00</option>
                        <option value="2:00">2:00</option>
                        <option value="4:00">4:00</option>
                        <option value="6:00">6:00</option>   
                    </select>
            </div>
            <div>
                <label>Motivo:</label>
                <select name="cmbMotivo" size="1">
                    <option value="No Selecciono">--SELECCIONA--</option>
                    <option value="Revision">Revision</option>
                    <option value="Estraccion">Estraccion</option>
                    <option value="Blanqueamiento">Blanqueamiento</option>
                    <option value="Cambio de Ligas">Cambio de Ligas</option>
                    <option value="Dolor de muela">Dolor de muela</option>
                    <option value="Cirujia">Cirujia</option>
                    <option value="Limpieza">Limpieza</option>    
                </select>
            </div>
            <button type="summit">Agendar</button>
        </form>
        <input type="text" name="paciente">
        <input type="text" name="consulta">
    </main>
</body>
</html>

<?php

    include("conexion/conexion.php");

    $paciente = $_POST['txtCorreo'];
    $consulta = $_POST['consulta'];
    $añoCita = $_POST['txtAñoCita'];
    $mesCita = $_POST['txtMesCita'];
    $diaCita = $_POST['txtDiaCita'];
    $fecha = $añoCita . '-' . $mesCita . '-' . $diaCita;
    $hora = $_POST['cmbHora'];
    $motivo = $_POST['cmbMotivo'];

    $consul = "SELECT * FROM "
    $consulta = "CALL consultas('$fecha', '$hora')";
    $consulta2 = "CALL agendarCita('1', '1', '$motivo')";

    echo "$fecha - $hora - $motivo";


?>