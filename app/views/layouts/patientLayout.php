<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
  <script src="/build/js/calendar.js"></script>
  <link rel="stylesheet" href="/build/css/calendar.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <!-- INICIO DEL HEADER-->
  <header class="navbar navbar-expand-lg bg-dark navbar-dark ">
    <nav class="container-fluid">
      <a style="color: aqua; font-weight: 600;" class="navbar-brand" href="/patient">
        Hospital San José
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ml-auto">
            <a class="nav-link active" aria-current="page" href="/patient">Citas Pendientes</a>
          </li>

          <li class="nav-item ml-auto">
            <a class="nav-link " aria-current="page" href="/patient/last-appointment">Citas Pasadas</a>
          </li>
        </ul>

        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown d-flex ">
            <a style="float: right;" class="nav-link dropdown-toggle" href="/patient/create-appointment" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user"></i>
              Usuario
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- FIN DEL HEADER-->

  <?php echo $content ?>

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