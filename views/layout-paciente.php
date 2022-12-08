<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
    <script src="/build/js/calendar.js"></script>
    <link rel="stylesheet" href="/build/css/calendar.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- INICIO DEL HEADER-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/paciente">SAN JOSÉ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/paciente">INICIO</a>
                    </li>

                    <li class="nav-item dropdown d-flex">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            USUARIO
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Editar Cuenta</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">CERRAR SESIÓN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIN DEL HEADER-->

    <!-- INICIO DEL CONTENEDO PRINCIPAL-->
    <div class="container-fluid contenedor-principal">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">CONTROL DE CITAS:</h1>

            <a href="/paciente/agregarcita" style="background-color: #4180ab;" class="btn btn-primary">
                <i class="fas fa-user-plus"> </i> Agregar Cita
            </a>

        </div>

        <div class="container">
            <!-- BOTONES DEL CITAS PENDIENTES Y CITAS PASADAS-->
            <p>
                <a class="btn btn-success" data-bs-toggle="collapse" href="/paciente" role="button" aria-expanded="false" aria-controls="collapseExample">
                    CITAS PENDIENTES
                </a>
                <a class="btn btn-info" data-bs-toggle="collapse" href="/paciente/citaspendientes" role="button" aria-expanded="false" aria-controls="collapseExample">
                    CITAS PASADAS
                </a>
            </p>
        </div>
    </div>

    <?php echo $contenido ?>

    

    <!-- CONFIRMAR CITA (MODAL) -->
    <div class="modal fade" id="confirmCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Cita Médica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <center>
                        <h4> <b> Especialidad : </b> Cardiología</h4>
                        <h4> <b> Médico : </b> Jon Armando</h4>
                        <h4> <b> Paciente : </b> Sancho Perezz</h4>
                        <h4> <b> Fecha : </b> 11/12/22</h4>
                        <h4> <b> Horario : </b> 08:00</h4>

                    </center>
                </div>

                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <input type="submit" class="col btn btn-danger" data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder">
                            <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- CALENDARIO-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script type="text/javascript" src="/build/js/calendar.js"></script>
    <script type="text/javascript">
        let calendar = new Calendar('calendar');
        calendar.getElement().addEventListener('change', e => {
            console.log(calendar.value().format('LLL'));
        });

        let calendar2 = new Calendar('calendar2');
        calendar2.getElement().addEventListener('change', e => {
            console.log(calendar2.value().format('LLL'));
        });
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>