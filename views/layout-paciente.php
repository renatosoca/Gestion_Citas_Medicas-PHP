<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACIENTE</title>
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
    <script src="./calendar.js"></script>
      <link rel="stylesheet" href="./calendar.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    


     
   
        <!-- INICIO DEL HEADER-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">SAN JOSÉ</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                  </li>

                
                  
                  <li class="nav-item dropdown d-flex">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      USUARIO
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">CERRAR SESIÓN</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
         <!-- FIN DEL HEADER-->   


         <?php echo $contenido; ?>

         <style>
      body{
        background-color: #e4ebf0;
      }
      .contenedor-principal{
        padding: 35px;
      }
        .cita-pendiente{
            background-color: #8ab3cf;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
        }

        .cita-pasada{
            background-color:lightcoral;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
        }
        select,  input, .fichaa{
            margin: 8px;
            padding: 5px;
        }
    </style>
   

  

  </script>
  <!-- CALENDARIO-->
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
  <script  type="text/javascript" src="./js/calendar.js"></script>
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