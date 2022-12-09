<!-- Contenedor Principal-->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- BARRA DE ARRIBA -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - Información del Admin-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
          </a>
          <!-- Dropdown - Informacion del Admin -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Perfil
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Config
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Actividad
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Cerrar Sesión
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- FIN DE BARRA DE -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Citas</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarCita">
          <i class="fas fa-user-plus"> </i> Agregar Cita
        </button>

      </div>

      <!-- TABLA DE PACIENTES -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>MÉDICO</th>
                  <th>PACIENTE</th>
                  <th>ESPECIALIDAD</th>
                  <th>FECHA</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>CÓDIGO</th>
                  <th>MÉDICO</th>
                  <th>PACIENTE</th>
                  <th>ESPECIALIDAD</th>
                  <th>FECHA</th>
                  <th>ACCIONES</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>000001</td>
                  <td>Pedro Sanchez</td>
                  <td>Mario Bros</td>
                  <td>Cardiología</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                      <i class="fas fa-trash-alt"></i> eliminar
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>000002</td>
                  <td>Pedro Sanchez</td>
                  <td>Mario Bros</td>
                  <td>Cardiología</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                      <i class="fas fa-trash-alt"></i> eliminar
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>000003</td>
                  <td>Pedro Sanchez</td>
                  <td>Mario Bros</td>
                  <td>Cardiología</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                      <i class="fas fa-trash-alt"></i> eliminar
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>000004</td>
                  <td>Pedro Sanchez</td>
                  <td>Mario Bros</td>
                  <td>Cardiología</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                      <i class="fas fa-trash-alt"></i> eliminar
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>000005</td>
                  <td>Pedro Sanchez</td>
                  <td>Mario Bros</td>
                  <td>Cardiología</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                      <i class="fas fa-trash-alt"></i> eliminar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
  <!-- MODALES USADOS -->
 <!-- AGREGAR CITA (MODAL) -->
 <div class="modal fade" id="agregarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 

      <div class="modal-body">
        <form action="" method="post">
          <div class="row">
            
            &nbsp; DNI:<input type="text" class="col-3" placeholder="Del Paciente" required>

            <?php 
            $medico=[];

            foreach ($medicos as $row) {   
              $medico[]=$row->id;
              $medico[]=$row->Nombre ." ".$row->Ape_Paterno;
             } ?>

              Especialidad:<select name="" class="col-4" id="Especialidad"<?php echo "onchange='Medico(value,\"".implode(",",(array)$medico)."\")'"?> required>
                              <option value="0" disabled selected>Especialidad</option>
                              <?php foreach ($especialidades as $row) { ?>                                    
                                  <option <?php echo "value='".$row->id."'"?> > <?php echo $row->Descripcion?> </option>
                                  <?php } ?>
                            </select>
          </div>

          <div class="row">

          <?php 
            $horario=[];

            foreach ($horarios as $row) {   
              $horario[]=$row->id;
              $horario[]=$row->Fecha;
              $horario[]=$row->Hora_Inicio;
          } ?>
            
           &nbsp; Médico: <select name="" class="col-4" id="MedicoSelect" <?php echo "onchange='Horario(value,\"".implode(",",(array)$horario)."\")'"?>  required disabled>
                <option value="0" disabled="" selected>Seleccione Médico </option>              
            </select>

            &nbsp; Fechas: <select name="" class="col-4" id="HorarioSelect" <?php echo "onchange='Reservar(value,\"".implode(",",(array)$horario)."\")'"?> required disabled>
              <option value="0" disabled="" selected>Seleccione Fecha</option>
          </select>
          </div>

          <div class="row">
            
              <span>&nbsp;&nbsp;&nbsp;Use el Siguiente Calendario como guía (Opcional):</span>
            
            <div class="root">
              <div class="calendar" id="calendar">
      
              </div>
    
          </div>

          <div class="row">
              <div class="col-1"></div>
              <input type="submit" class="col btn btn-primary" value="Mostrar Resultados">
              <div class="col-1"></div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Horario</th>
                  <th scope="col">Medico</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Reservar</th>
                </tr>
              </thead>
              <tbody id="Reservar">
                <tr>
                  <td>08:00</td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                  <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                    <i class="fas fa-clock"></i>
                  </button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>
<!-- FIN AGREGAR CITA (MODAL) -->

<!-- CONFIRMAR CITA (MODAL) -->
<div class="modal fade" id="confirmCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                  <center id="ConfirmReserva">
                    
                  </center>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <div class="col-1"></div>
              <input type="submit" class="col btn btn-danger"  data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder">
              <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
              <div class="col-1"></div>

            
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>


<!-- REPROGRAMAR CITA (MODAL) -->
<div class="modal fade" id="editarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">
          <div class="row">
            <p> <span class="col-3">DNI: 43545353535</span><span class="col-3">   </span> <span class="col-4">Paciente: Mario Bros</span> </p>
            <p> <span class="col-3">Especialidad: Cardiología</span><span class="col-3">   </span> <span class="col-3">Doctor: Pedro Sanchez</span> </p>
          </div>

          <div class="row">


            &nbsp; &nbsp;&nbsp;&nbsp;Fechas: <select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Fecha</option>
              <option value="">11/12/22</option>
              <option value="">10/12/22</option>
          </select>
          </div>
          
          <div class="row">
            
              <span>&nbsp;&nbsp;&nbsp;Use el Siguiente Calendario como guía (Opcional):</span>
            
            <div class="root">
              <div class="calendar" id="calendar2">
      
              </div>
    
          </div>

          </div>

          <div class="row">
              <div class="col-1"></div>
              <input type="submit" class="col btn btn-primary" value="Mostrar Resultados">
              <div class="col-1"></div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Horario</th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Medico</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Reprogramar</th>
                </tr>
              </thead>
              <tbody >
                <tr>
                  <td>10:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>
                
              </tbody>
            </table>
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>
<!-- FIN AGREGAR CITA (MODAL) -->

<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmReprog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Reprogramación de Cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                  <center>
                    <h4> <b> Especialidad : </b>  Cardiología</h4>
                    <h4> <b> Médico       : </b> Jon Armando</h4>
                    <h4> <b> Paciente     : </b> Sancho Perezz</h4>
                    <h4> <b> Fecha        : </b> 11/12/22</h4>
                    <h4> <b> Horario      : </b> 08:00</h4>

                  </center>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <div class="col-1"></div>
              <input type="submit" class="col btn btn-danger"  data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder">
              <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
              <div class="col-1"></div>

            
          </div>
             
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
  
  <style>
        select,  input{
            margin: 8px;
            padding: 5px;
        }
        
    </style>

  

  <script>
    function Medico(value,$medico){
      document.querySelector('#MedicoSelect [value="0"]').selected = true;
      document.querySelector('#HorarioSelect [value="0"]').selected = true;
      $datos=$medico.split(",");
      $MedicoSelect=document.getElementById("MedicoSelect");
      $MedicoSelect.disabled=false;
      for (let i = $MedicoSelect.options.length; i >= 1; i--) {
        $MedicoSelect.remove(i);
      }
      $HorarioSelect=document.getElementById("HorarioSelect");
      $HorarioSelect.disabled=true;
      for (let i = $HorarioSelect.options.length; i >= 1; i--) {
        $HorarioSelect.remove(i);
      }

      <?php foreach ($medicos as $row) {  ?>
          if(value==<?php echo $row->ID_Especialidad ?>){

            for(let j=0; j<$datos.length;j=j+2){

              if ($datos[j]==<?php echo $row->id ?>) {

                var option = document.createElement('option');
                option.value=$datos[j];
                option.text=$datos[j+1];

                $MedicoSelect.appendChild(option);
                
              }

            }
  
          }
            
      <?php } ?>

    }

    function Horario(value,$horario){

      document.querySelector('#HorarioSelect [value="0"]').selected = true;
      
      $datos=$horario.split(",");

      $HorarioSelect=document.getElementById("HorarioSelect");
      $HorarioSelect.disabled=false;
      for (let i = $HorarioSelect.options.length; i >= 1; i--) {
        $HorarioSelect.remove(i);
      }
      dia="";
      <?php foreach ($horarios as $row) {  ?>
          if(value==<?php echo $row->ID_Medico ?>){

            for(let j=0; j<$datos.length;j=j+3){  

              if ( $datos[j]==<?php echo $row->id ?>) {

                if(dia!=$datos[j+1]){
                  var option = document.createElement('option');
                  option.value=$datos[j];
                  option.text=$datos[j+1];

                  $HorarioSelect.appendChild(option);
                  dia=$datos[j+1];

                }

              }

            }
  
          }
            
      <?php } ?>

    }

    function Reservar(value,$horario){

      $Fecha=document.querySelector('#HorarioSelect [value="' + value + '"]').text;

      $MedicoValor=document.getElementById("MedicoSelect").value;

      $Medico=document.querySelector('#MedicoSelect [value="' + $MedicoValor + '"]').text;

      $EspecialidadValor=document.getElementById("Especialidad").value;

      $Especialidad=document.querySelector('#Especialidad [value="' + $MedicoValor + '"]').text;
      
      $datos=$horario.split(",");

      for(let j=0; j<$datos.length;j=j+3){  

        if ( $datos[j+1]==$Fecha) {

          var tr=document.createElement("tr");

          var td=document.createElement("td");
          var txt = document.createTextNode($datos[j+2]);
          td.appendChild(txt);
          tr.appendChild(td);

          var td=document.createElement("td");
          var txt = document.createTextNode($Medico);
          td.appendChild(txt);
          tr.appendChild(td);

          var td=document.createElement("td");
          var txt = document.createTextNode($Fecha);
          td.appendChild(txt);
          tr.appendChild(td);

          var td=document.createElement("td");
          var btn = document.createElement("button");
          btn.type="button";
          btn.setAttribute("data-bs-toggle","modal");
          btn.setAttribute("onclick","ConfirmarReserve('"+$Especialidad+"','"+$Medico +"','"+$Fecha +"','"+$datos[j+2] +"')");
          btn.setAttribute("data-bs-target","#confirmCita");
          var i=document.createElement("i");
          i.className="fas fa-clock";
          btn.appendChild(i);
          td.appendChild(btn);
          tr.appendChild(td);
          
          document.getElementById("Reservar").appendChild(tr);

        }

      }
    }

    function ConfirmarReserve($Especialidad,$Medico,$Fecha,$Hora){
      
      
      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Especialidad : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($Especialidad);
      h4.appendChild(txt);

      document.getElementById("ConfirmReserva").appendChild(h4);
      
      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Médico       : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($Medico);
      h4.appendChild(txt);

      document.getElementById("ConfirmReserva").appendChild(h4);

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Fecha        : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($Fecha);
      h4.appendChild(txt);

      document.getElementById("ConfirmReserva").appendChild(h4);

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Horario      : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($Hora);
      h4.appendChild(txt);

      document.getElementById("ConfirmReserva").appendChild(h4);

    }
  </script>

  