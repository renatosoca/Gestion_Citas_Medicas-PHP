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
            <img class="img-profile rounded-circle" src="/build/images/undraw_profile.svg" />
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
                  <th>HORA</th>
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
                  <th>HORA</th>
                  <th>ACCIONES</th>
                </tr>
              </tfoot>
              <tbody>
              <?php 
                $horario=[];

                foreach ($horarios as $row) {   
                  $horario[]=$row->id;
                  $horario[]=$row->Fecha;
                  $horario[]=$row->Hora;
                  $horario[]=$row->ID_Medico;
              } ?>
              <?php 
              $medico=[];

              foreach ($medicos as $row) {   
                $medico[]=$row->id;
                $medico[]=$row->Nombre ." ".$row->Ape_Paterno;
              } ?>
              <?php 
              $paciente=[];

              foreach ($pacientes as $row) {   
                $paciente[]=$row->id;
                $paciente[]=$row->Nombre ." ".$row->Ape_Paterno;
                $paciente[]=$row->Nr_Doc;
              } ?>
              <?php foreach ($citaMostrar as $row) { ?>
                <tr>
                  <td><?php echo $row->id ?></td>
                  <td><?php echo $row->NombreMedico ?></td>
                  <td><?php echo $row->NombrePaciente ?></td>
                  <td><?php echo $row->Area ?></td>
                  <td><?php echo $row->Fecha_Cita ?></td>
                  <td><?php echo $row->Hora_Cita ?></td>
                  <td>
                    <button type="button" class=" " data-bs-toggle="modal" <?php echo "onclick='ReprogramarCita(\"".implode(",",(array)$row)."\",\"".implode(",",(array)$horario)."\")'"?> data-bs-target="#editarCita">
                      <i class="fas fa-user-edit"> </i>editar
                    </button>
                    <form action="/citas/eliminar" method="POST">
                      <input type="text" name="idEliminar" value=" <?php echo $row->id ?>" hidden>
                      <input type="text" name="idHorario" value=" <?php echo $row->ID_Horario ?>" hidden>
                      <button type="submit">
                        <i class="fas fa-trash-alt"></i> eliminar
                      </button>
                    </form>
                    
                  </td>
                </tr>
              <?php  } ?>
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
            &nbsp; DOC:<input id="Documento" type="text" class="col-3" placeholder="Del Paciente" <?php echo "onkeyup='VerificarDoc(\"".implode(",",(array)$paciente)."\")'"?> required>
           <input type="text" id="NombrePaciente" hidden>
           <input type="text" id="paciente" hidden>

              Especialidad:<select name="" class="col-4" id="Especialidad"<?php echo "onchange='Medico(value,\"".implode(",",(array)$medico)."\")'"?> required disabled>
                              <option value="0" disabled selected>Especialidad</option>
                              <?php foreach ($especialidades as $row) { ?>                                    
                                  <option <?php echo "value='".$row->id."'"?> > <?php echo $row->Descripcion?> </option>
                                  <?php } ?>
                            </select>
          </div>

          <div class="row">
      
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
            <form action="/citas/registrar" method="POST">

            <input type="text" id="idpaciente" name="cita[ID_Paciente]" hidden>
            <input type="text" id="idmedico" name="cita[ID_Medico]" hidden>
            <input type="text" id="idhorario" name="cita[ID_Horario]" hidden>
            <input type="text" id="especialidad" name="cita[Area]" hidden>
            <input type="text" id="idhora" name="ID_Horario" hidden>


            <div class="row">
              <div class="col-6"><input type="button" class="col btn btn-danger"  value="Retroceder"></div> 
              <div class="col-6"><input type="submit" class="col btn btn-primary" value="Confirmar Cita">  </div> 
            </div>

            </form>
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>

<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmReprog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Reprogramación de Cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                  <center id="DetalleRepro">

                  </center>
      </div>

      <div class="modal-footer">
        <div class="container">
        <form action="/citas/reprogramar" method="POST">

          <input type="text" id="idpacienteRepro" name="cita[ID_Paciente]" hidden >
          <input type="text" id="idmedicoRepro" name="cita[ID_Medico]" hidden>
          <input type="text" id="idhorarioRepro" name="cita[ID_Horario]" hidden>
          <input type="text" id="especialidadRepro" name="cita[Area]" hidden>
          <input type="text" id="idcita" name="idcita" hidden>
          <input type="text" id="idhoraRepro" name="idhoraRepro" hidden>
          <input type="text" id="idhoraActiva" name="idhoraActiva" hidden >


          <div class="row">
            <div class="col-6"><input type="button" class="col btn btn-danger"  value="Retroceder"></div> 
            <div class="col-6"><input type="submit" class="col btn btn-primary" value="Confirmar Cita">  </div> 
          </div>

        </form>
  
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

      <div class="modal-body" >

          <div class="row" >
            <div id="Reprogramar">

            </div>
          <div>


          <div class="row">


           <span class="col-2" >Fechas:</span><select name="" class="col-4" id="FechaReprogramar" required>
              <option value="0" disabled="" selected>Seleccione Fecha</option>
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
                  <th scope="col">Reprogramar</th>
                </tr>
              </thead>
              <tbody id="ElegirReprogramacion">

                
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


  
  <style>
        select,  input{
            margin: 8px;
            padding: 5px;
        }
        
    </style>

  

  <script>
    function Medico(value,$medico){

      var trs = document.getElementById("Reservar").getElementsByTagName("tr");
      while(trs.length>0) trs[0].parentNode.removeChild(trs[0])
      
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


      var trs = document.getElementById("Reservar").getElementsByTagName("tr");
      while(trs.length>0) trs[0].parentNode.removeChild(trs[0])

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

            for(let j=0; j<$datos.length;j=j+4){  

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

    function VerificarDoc($paciente){

      $documento=document.getElementById("Documento").value;
      $datos=$paciente.split(",");

      for(let j=0; j<$datos.length;j=j+3){  
        if($documento==$datos[j+2]){

          $Especialidad=document.getElementById("Especialidad");
          $Especialidad.disabled=false;
          document.getElementById("NombrePaciente").value=$datos[j+1];
          document.getElementById("paciente").value=$datos[j];
          document.getElementById("Documento").style.backgroundColor="rgb(255,255,255)";
          break;

        }else{

          $Especialidad=document.getElementById("Especialidad");
          $Especialidad.disabled=true;
          document.getElementById("Documento").style.backgroundColor="rgb(236,12,12)";

        }

      }


    }

    function Reservar(value,$horario){

      $Fecha=document.querySelector('#HorarioSelect [value="' + value + '"]').text;
      
      $MedicoValor=document.getElementById("MedicoSelect").value;

      document.getElementById("idmedico").value=$MedicoValor;
      
      $Medico=document.querySelector('#MedicoSelect [value="' + $MedicoValor + '"]').text;
      
      $EspecialidadValor=document.getElementById("Especialidad").value;

      $Especialidad=document.querySelector('#Especialidad [value="' + $EspecialidadValor + '"]').text;
      
      document.getElementById("especialidad").value=$Especialidad;
      
      $Nombre=document.getElementById("NombrePaciente").value;
      
      $datos=$horario.split(",");
            
      var trs = document.getElementById("Reservar").getElementsByTagName("tr");
      while(trs.length>0) trs[0].parentNode.removeChild(trs[0])
      
      for(let j=0; j<$datos.length;j=j+4){  

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
          btn.setAttribute("onclick","ConfirmarReserve('"+$Especialidad+"','"+$Medico +"','"+$Fecha +"','"+$datos[j+2] +"','"+$Nombre +"','"+$datos[j] +"')");
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

    function ConfirmarReserve($Especialidad,$Medico,$Fecha,$Hora,$Nombre,$idhora){

      document.getElementById("idpaciente").value=document.getElementById("paciente").value;
      document.getElementById("idhorario").value=$idhora;
      document.getElementById("idhora").value=$idhora;

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
      var txt=document.createTextNode("Paciente     : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($Nombre);
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

    function ReprogramarCita($citas,$horarios){



      var trs = document.getElementById("ElegirReprogramacion").getElementsByTagName("tr");
      while(trs.length>0) trs[0].parentNode.removeChild(trs[0])
      
      document.querySelector('#FechaReprogramar [value="' + 0 + '"]').selected = true;
      
      var p = document.getElementById("Reprogramar").getElementsByTagName("p");
      while(p.length>0) p[0].parentNode.removeChild(p[0])

      $cita=$citas.split(",");
      $horario=$horarios.split(",");

      var p=document.createElement("p");
      var span=document.createElement("span");
      span.className="col-6";
      var txt=document.createTextNode("DNI: " + $cita[10]);
      span.appendChild(txt);
      p.appendChild(span)
      var span=document.createElement("span");
      span.className="col-6";
      var txt=document.createTextNode("Paciente: " + $cita[9]);
      span.appendChild(txt);
      p.appendChild(span);
      document.getElementById("Reprogramar").appendChild(p);

      var p=document.createElement("p");
      var span=document.createElement("span");
      span.className="col-6";
      var txt=document.createTextNode("Especialidad: " + $cita[4]);
      span.appendChild(txt);
      p.appendChild(span)
      var span=document.createElement("span");
      span.className="col-6";
      var txt=document.createTextNode("Doctor: " + $cita[11]);
      span.appendChild(txt);
      p.appendChild(span);
      document.getElementById("Reprogramar").appendChild(p);

      $FechaReprogramar=document.getElementById("FechaReprogramar");
      for (let i = $FechaReprogramar.options.length; i >= 1; i--) {
        $FechaReprogramar.remove(i);
      }
      dia=""; 
      
      for(let j=0; j<$horario.length;j=j+4){  
        
        if ($horario[j+3]==$cita[2]) {

          if(dia!=$horario[j+1]){
            var option = document.createElement('option');
            option.value=$horario[j];
            option.text=$horario[j+1];
            
            $FechaReprogramar.appendChild(option);
            dia=$horario[j+1];

          }


        }

      }

      document.getElementById("FechaReprogramar").setAttribute("onchange","ReprogramarHorario('"+$citas+"','"+$horarios +"')")

    }

    function ReprogramarHorario($citas,$horarios){

      $horario=$horarios.split(",");
      $cita=$citas.split(",");

      document.getElementById("idcita").value=$cita[0];
      document.getElementById("idpacienteRepro").value=$cita[1];
      document.getElementById("idmedicoRepro").value=$cita[2];
      document.getElementById("especialidadRepro").value=$cita[4];
      document.getElementById("idhoraActiva").value=$cita[3];
      
      for(let j=0; j<$horario.length;j=j+4){  

        if ( $horario[j+3]==$cita[2]) {
         
          var tr=document.createElement("tr");

          var td=document.createElement("td");
          var txt = document.createTextNode($horario[j+2]);
          td.appendChild(txt);
          tr.appendChild(td);
          
          var td=document.createElement("td");
          var txt = document.createTextNode($cita[11]);
          td.appendChild(txt);
          tr.appendChild(td);

          var td=document.createElement("td");
          var txt = document.createTextNode($horario[j+1]);
          td.appendChild(txt);
          tr.appendChild(td);

          var td=document.createElement("td");
          var btn = document.createElement("button");
          btn.type="button";
          btn.setAttribute("data-bs-toggle","modal");
          btn.setAttribute("onclick","ConfirmarReprog('"+$cita[4]+"','"+$cita[11] +"','"+$cita[9] +"','"+$horario[j+1] +"','"+$horario[j+2]+"','"+$horario[j]+"')");
          btn.setAttribute("data-bs-target","#confirmReprog");
          var i=document.createElement("i");
          i.className="fas fa-clock";
          btn.appendChild(i);
          td.appendChild(btn);
          tr.appendChild(td);
          
          document.getElementById("ElegirReprogramacion").appendChild(tr);
          
        }

      }


    }

    function ConfirmarReprog($especialidad,$medico,$paciente,$fecha,$horario,$idhorario){

      document.getElementById("idhorarioRepro").value=$idhorario;
      document.getElementById("idhoraRepro").value=$idhorario;

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Especialidad : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($especialidad);
      h4.appendChild(txt);

      document.getElementById("DetalleRepro").appendChild(h4);

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Paciente     : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($paciente);
      h4.appendChild(txt);

      document.getElementById("DetalleRepro").appendChild(h4);
      
      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Médico       : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($medico);
      h4.appendChild(txt);

      document.getElementById("DetalleRepro").appendChild(h4);

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Fecha        : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($fecha);
      h4.appendChild(txt);

      document.getElementById("DetalleRepro").appendChild(h4);

      var h4=document.createElement("h4");
      var b=document.createElement("b");
      var txt=document.createTextNode("Horario      : ");
      b.appendChild(txt);
      h4.appendChild(b);
      var txt = document.createTextNode($horario);
      h4.appendChild(txt);

      document.getElementById("DetalleRepro").appendChild(h4);

    }


  </script>

  