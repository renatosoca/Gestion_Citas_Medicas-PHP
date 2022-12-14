<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">CITAS PENDIENTES:</h1>

    <a class="btn btn-primary" data-bs-toggle="modal" href="#agregarCita" role="button"><i class="fas fa-user-plus"> </i> Agregar Cita
    </a>

  </div>
  <!--Fin Page Heading -->


  <!-- TODAS LAS CITAS PENDIENTES-->
  <?php 
  $horario=[];

  foreach ($horarios as $row) {   
    $horario[]=$row->id;
    $horario[]=$row->Fecha;
    $horario[]=$row->Hora;
    $horario[]=$row->ID_Medico;
  } ?>

  <div class="container">

    <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
    <?php $i=1; foreach ($citas as $row) {?>
    <div class="container cita-pendiente">

      <div class="row">
        <div class="col-sm-12">
          <h5 style="color: darkred; font-weight: bolder; font-size: 22px;">CITA: #<?php echo $i++?></h5>
        </div>
      </div>
      <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-5">
          <p>ESPECIALIDAD: <?php echo $row->Area?> </p>

        </div>
        <div class="col-sm-5">
          <p>FECHA: <?php echo $row->Fecha_Cita?> </p>

        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reprogramarCita"<?php echo "onclick='ReprogramarCita(\"".implode(",",(array)$row)."\",\"".implode(",",(array)$horario)."\")'"?> >
            REPROGRAMAR
          </button>

        </div>

      </div>

      <div class="row">
        <div class="col-sm-5">
          <p>MÉDICO: <?php echo $row->NombreMedico?>  </p>

        </div>
        <div class="col-sm-5">
          <p>HORA:<?php echo $row->Hora_Cita?> </p>

        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editarCita">
            ELIMINAR
          </button>

        </div>
      </div>

    </div>
    <?php }?>
    <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
    <!-- CONTENEDOR DE UNA CITA PENDIENTE-->

    <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->

  </div>
  <!--  FIN TODAS LAS CITAS PENDIENTES-->

</div>

<!-- FIN DEL CONTENIDO PRINCIPAL-->

<!-- T0DOS LOS MODALES UTILIZADOS -->

<!--AGREGAR CITA-->
<div class="modal fade" id="agregarCita" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">
          <div class="row">

            &nbsp; DNI:<input type="text" class="col-3" placeholder="Del Paciente" required>

            Especialidad:<select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Especialidad </option>
              <option value="">Cardiología</option>
              <option value="">Neurología</option>
            </select>
          </div>

          <div class="row">
            &nbsp; Médico: <select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Médico </option>
              <option value="">Carlos Mendoza</option>
              <option value="">Maria Oracle</option>
            </select>

            &nbsp; Fechas: <select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Fecha</option>
              <option value="">11/12/22</option>
              <option value="">10/12/22</option>
            </select>
          </div>

          <div class="row">

            <span>&nbsp;&nbsp;&nbsp;Use el Siguiente Calendario como guía (Opcional):</span>

            <div class="root">
              <div class="calendar" id="calendar">

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
                  <th scope="col">Reservar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>08:00</td>
                  <td> </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                      <i class="fas fa-clock"></i>
                    </button>

                  </td>
                </tr>


                <tr>
                  <td>10:00</td>
                  <td> </td>
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
<!-- FIN AGREGAR CITA-->


<!-- CONFIRMAR CITA (MODAL) -->
<div class="modal fade" id="confirmCita" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
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
<!-- FIN CONFIRMAR CITA (MODAL) -->
<!----------------------------------------->
<!--REPROGRAMAR CITA-->
<div class="modal fade" id="reprogramarCita" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" >

            <div class="row" >
              <div id="Reprogramar">

              <p><span class="col-6">DNI: <?php echo $paciente->Nr_Doc ?></span><span class="col-6">Paciente: <?php echo $paciente->Nombre ?></span></p>

              </div>
            <div>


            <div class="row">


            <span class="col-2" >Fechas:</span><select name="" class="col-4" id="FechaReprogramar" required>
                <option value="0" disabled="" selected>Seleccione Fecha</option>
              </select>
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
</div>
<!-- FIN REPROGRAMAR CITA-->
<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmRepro" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Reprogramación de Cita</h1>
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
            <input type="submit" class="col btn btn-danger" data-bs-toggle="modal" data-bs-target="#reprogramarCita" value="Retroceder">
            <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
            <div class="col-1"></div>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN CONFIRMAR REPROGRAMACION (MODAL) -->
<style>
  body {
    background-color: #e4ebf0;
  }

  .contenedor-principal {
    padding: 35px;
  }

  .cita-pendiente {
    background-color: #4180ab;
    border-radius: 10px;
    padding: 30px;
    margin: 40px;
    font-weight: 500;
    color: blanchedalmond;
    font-size: 18px;
  }

  .cita-pasada {
    background-color: lightcoral;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
  }

  select,
  input,
  .fichaa {
    margin: 8px;
    padding: 5px;
  }

  span{
    margin:0 10px;
  }
</style>

<script>
  function ReprogramarCita($citas,$horarios){

    var trs = document.getElementById("ElegirReprogramacion").getElementsByTagName("tr");
    while(trs.length>0) trs[0].parentNode.removeChild(trs[0])

    document.querySelector('#FechaReprogramar [value="' + 0 + '"]').selected = true;

    var p = document.getElementById("Reprogramar").getElementsByTagName("p");
    while(p.length>1) p[1].parentNode.removeChild(p[1])

    $cita=$citas.split(",");
    $horario=$horarios.split(",");

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
</script>