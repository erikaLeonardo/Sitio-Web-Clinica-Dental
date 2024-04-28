<?php
include("conexion/conexion.php");

$hora = $_POST['cmbHora'];

$consu34 = "CALL masHoras('$hora', '1')";
if(mysqli_query($conectar, $consu34)){
    echo "<script>Swal.fire(
        'Muy bien!',
        'La hora se agrego correctamente',
        'success'
      ) </script>";
}else{
    echo "<script> Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Problemas al agregar la hora, intentelo mas tarde'
      }) </script>";
}
mysqli_close($conectar);

?>