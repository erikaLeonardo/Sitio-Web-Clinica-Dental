<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Agendar cita</title>
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui.theme.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
    <script type="text/javascript">
                $(function(){
                    $('#txtfecha').datepicker({
                        dateFormat: 'dd/mm/yy',
                        firstDay: 0,
                        dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
                        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                        monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                        minDate: 0
                    });
                });
            
    <script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid">
        <header class="row">
            <article class="col-3 col-sm-3 col-md-3 col-lg-3 col-x1-3 col-xx1-3" style="background-color: #AAE3E2">
                <form>
                    <input type="text" id="txtfecha">
                </form>
            </article>
            <article class="col-6 col-sm-6 col-md-6 col-lg-6 col-x1-6 col-xx1-6 text-center" style="background-color: #AAE3E2">
                <h1 class="text-wrap">Consultorio Dental Arce</h1>
                <h2>Dr. Laura Arce Hernandez</h2>
            </article>
            <article class="col-3 col-sm-3 col-md-3 col-lg-3 col-x1-3 col-xx1-3" style="background-color: #AAE3E2">
    
            </article>
        </header>
        <nav class="row">
            <article class="col-10 col-sm-10 col-md-10 col-lg-10 col-x1-10 col-xx1-10" style="background-color: #59C1BD">

            </article>
            <article class="col-2 col-sm-2 col-md-2 col-lg-2 col-x1-2 col-xx1-2" style="background-color: #59C1BD">
                <img class="float-end" src="img/user.png" width="40" height="40">
            </article>
        </nav>
        <section class="row">
            <article class="col-sm-12 col-md-7 col-lg-7 col-x1-7 col-xx1-7">
                <h5 class="m-5">Elige día y hora para agendar tu cita.</h5>
                <img class="img-fluid ps-3 pe-3" src="img/Cita.png">
              </article>
              <article class="col-sm-12 col-md-5 col-lg-5 col-x1-5 col-xx1-5"><br><br>
                <form class="p-5">
                    <select class="form-select form-select-lg" style="background-color: #d3d3d3" aria-label=".form-select-lg example">
                        <option style="background-color: white" value="">--Hora--</option>
                        <option style="background-color: white" value="">09:00am</option>
                        <option style="background-color: white" value="">10:00am</option>
                        <option style="background-color: white" value="">12:00pm</option>
                        <option style="background-color: white" value="">14:00pm</option>
                        <option style="background-color: white" value="">15:00pm</option>
                        <option style="background-color: white" value="">17:00pm</option>
                    </select> <br><br><br><br><br><br><br><br><br><br><br><br>
                    <button class="btn float-end" style="background-color: #d3d3d3">Agendar</button>
                    <button class="btn float-end me-3" style="background-color: #d3d3d3">Cancelar</button>
                  
                </form>
              </article>
        </section>
    </main>
</body>
</html>