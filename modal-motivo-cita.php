    <?php

      include("conexion/conexion.php");
    ?>



    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <a class="body nav-link" data-bs-toggle="modal" href="#motivo">Iniciar sesión</a>

    <div class="modal fade" id="motivo" aria-hidden="true" aria-labelledby="restablecerContraseñaLabel3" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="contrasenia-res.php" method="post">
                </div>
                    <div class="ms-5 me-5 ps-5 pe-5">
                        <h4 class="body text-center">Elige el motivo de tu cita</h4>
                    </div>
                    <div class="mt-2 mb-3 ms-3 me-3 ps-5 pe-5 input-group-lg">
                    <input type="text" name="fechaCita">
                    <input type="text" name="horaCita">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cmbMotivo" size="1">
                        <option value="No selecciono">--Seleccione--</option>
                        <?php
                        $consulta = "SELECT * FROM motivo";
                        $motivo = mysqli_query($conectar, $consulta);
                        while($regMotivo = mysqli_fetch_array($motivo)){
                            echo "<option value = '" . $regMotivo[0] . "'>" . $regMotivo[1] . "</option>";
                        }
                        mysqli_close($conectar);
                        ?>
                    </select><br><br><br><br><br><br><br><br><br><br><br>
                    <button class="btn float-end" style="background-color: #d3d3d3" type="summit">Agendar</button>
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
