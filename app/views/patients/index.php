<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Citas Pendientes:</h1>

    <a class="btn btn-primary" data-bs-toggle="modal" href="#agregarCita" role="button">
      <i class="fas fa-user-plus"></i>
      Agregar Cita
    </a>
  </div>
</div>
<!--Fin Page Heading -->

<!-- TODAS LAS CITAS PENDIENTES-->
<?php
$schedule = [];

foreach ($schedules as $row) {
  $horario[] = $row->id;
  $horario[] = $row->Fecha;
  $horario[] = $row->Hora;
  $horario[] = $row->ID_Medico;
}
$doctor = [];

foreach ($doctors as $row) {
  $medico[] = $row->id;
  $medico[] = $row->Nombre . " " . $row->Ape_Paterno;
}
?>
<!-- CONTENEDOR DE UNA CITA PENDIENTE-->
<div class="container">
  <?php
  foreach ($appointments as $row) { ?>
    <div class="container cita-pendiente">
      <div class="row">
        <div class="col-sm-12">
          <h5 style="color: darkred; font-weight: bolder; font-size: 22px;">
            Código Cita: <?php echo '000000'.$row->id ?>
          </h5>
        </div>
      </div>

      <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-5">
          <p>Especialidad: <?php echo $row->Area ?> </p>
        </div>

        <div class="col-sm-5">
          <p>Fecha: <?php echo $row->Fecha_Cita ?> </p>
        </div>

        <div class="col-sm-2">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reprogramarCita" <?php echo "onclick='ReprogramarCita(\"" . implode(",", (array)$row) . "\",\"" . implode(",", (array)$horario) . "\")'" ?>>
            Reprogramar
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5">
          <p>Médico: <?php echo $row->NombreMedico ?> </p>
        </div>

        <div class="col-sm-5">
          <p>Hora:<?php echo $row->Hora_Cita ?> </p>
        </div>

        <div class="col-sm-2">
          <form action="/paciente/eliminarcita" method="POST">
            <input type="text" name="idEliminar" value=" <?php echo $row->id ?>" hidden>
            <input type="text" name="idHorario" value=" <?php echo $row->ID_Horario ?>" hidden>

            <button type="submit" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->

<!-- T0DOS LOS MODALES UTILIZADOS -->
<?php include 'reprogramarCita.php'; ?>

<?php include 'confirReproCita.php'; ?>

<?php include 'agregarCita.php'; ?>

<?php include 'confirmarCita.php'; ?>

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

  .span {
    margin: 0 10px;
  }
</style>

<script>
  function Medico(value, $medico) {

    var trs = document.getElementById("Reservar").getElementsByTagName("tr");
    while (trs.length > 0) trs[0].parentNode.removeChild(trs[0])

    document.querySelector('#MedicoSelect [value="0"]').selected = true;
    document.querySelector('#HorarioSelect [value="0"]').selected = true;
    $datos = $medico.split(",");
    $MedicoSelect = document.getElementById("MedicoSelect");
    $MedicoSelect.disabled = false;
    for (let i = $MedicoSelect.options.length; i >= 1; i--) {
      $MedicoSelect.remove(i);
    }
    $HorarioSelect = document.getElementById("HorarioSelect");
    $HorarioSelect.disabled = true;
    for (let i = $HorarioSelect.options.length; i >= 1; i--) {
      $HorarioSelect.remove(i);
    }

    <?php foreach ($medicos as $row) {  ?>
      if (value == <?php echo $row->ID_Especialidad ?>) {

        for (let j = 0; j < $datos.length; j = j + 2) {

          if ($datos[j] == <?php echo $row->id ?>) {

            var option = document.createElement('option');
            option.value = $datos[j];
            option.text = $datos[j + 1];

            $MedicoSelect.appendChild(option);
          }
        }
      }
    <?php } ?>
  }

  function Horario(value, $horario) {
    var trs = document.getElementById("Reservar").getElementsByTagName("tr");
    while (trs.length > 0) trs[0].parentNode.removeChild(trs[0])

    document.querySelector('#HorarioSelect [value="0"]').selected = true;

    $datos = $horario.split(",");

    $HorarioSelect = document.getElementById("HorarioSelect");
    $HorarioSelect.disabled = false;

    for (let i = $HorarioSelect.options.length; i >= 1; i--) {
      $HorarioSelect.remove(i);
    }

    dia = "";
    <?php foreach ($horarios as $row) {  ?>
      if (value == <?php echo $row->ID_Medico ?>) {

        for (let j = 0; j < $datos.length; j = j + 4) {

          if ($datos[j] == <?php echo $row->id ?>) {

            if (dia != $datos[j + 1]) {
              var option = document.createElement('option');
              option.value = $datos[j];
              option.text = $datos[j + 1];

              $HorarioSelect.appendChild(option);
              dia = $datos[j + 1];
            }
          }
        }
      }
    <?php } ?>
  }

  function Reservar(value, $horario) {

    $Fecha = document.querySelector('#HorarioSelect [value="' + value + '"]').text;

    $MedicoValor = document.getElementById("MedicoSelect").value;

    document.getElementById("idmedico").value = $MedicoValor;

    $Medico = document.querySelector('#MedicoSelect [value="' + $MedicoValor + '"]').text;

    $EspecialidadValor = document.getElementById("Especialidad").value;

    $Especialidad = document.querySelector('#Especialidad [value="' + $EspecialidadValor + '"]').text;

    document.getElementById("especialidad").value = $Especialidad;

    $Nombre = document.getElementById("NombrePaciente").value;

    $datos = $horario.split(",");

    var trs = document.getElementById("Reservar").getElementsByTagName("tr");
    while (trs.length > 0) trs[0].parentNode.removeChild(trs[0])

    for (let j = 0; j < $datos.length; j = j + 4) {

      if ($datos[j + 1] == $Fecha) {

        var tr = document.createElement("tr");

        var td = document.createElement("td");
        var txt = document.createTextNode($datos[j + 2]);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var txt = document.createTextNode($Medico);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var txt = document.createTextNode($Fecha);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var btn = document.createElement("button");
        btn.type = "button";
        btn.setAttribute("data-bs-toggle", "modal");
        btn.setAttribute("onclick", "ConfirmarReserve('" + $Especialidad + "','" + $Medico + "','" + $Fecha + "','" + $datos[j + 2] + "','" + $Nombre + "','" + $datos[j] + "')");
        btn.setAttribute("data-bs-target", "#confirmCita");
        var i = document.createElement("i");
        i.className = "fas fa-clock";
        btn.appendChild(i);
        td.appendChild(btn);
        tr.appendChild(td);

        document.getElementById("Reservar").appendChild(tr);
      }
    }
  }

  function ConfirmarReserve($Especialidad, $Medico, $Fecha, $Hora, $Nombre, $idhora) {

    document.getElementById("idhorario").value = $idhora;
    document.getElementById("idhora").value = $idhora;

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Especialidad : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($Especialidad);
    h4.appendChild(txt);

    document.getElementById("ConfirmReserva").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Paciente     : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($Nombre);
    h4.appendChild(txt);

    document.getElementById("ConfirmReserva").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Médico       : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($Medico);
    h4.appendChild(txt);

    document.getElementById("ConfirmReserva").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Fecha        : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($Fecha);
    h4.appendChild(txt);

    document.getElementById("ConfirmReserva").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Horario      : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($Hora);
    h4.appendChild(txt);

    document.getElementById("ConfirmReserva").appendChild(h4);
  }

  function ReprogramarCita($citas, $horarios) {

    var trs = document.getElementById("ElegirReprogramacion").getElementsByTagName("tr");
    while (trs.length > 0) trs[0].parentNode.removeChild(trs[0])

    document.querySelector('#FechaReprogramar [value="' + 0 + '"]').selected = true;

    var p = document.getElementById("Reprogramar").getElementsByTagName("p");
    while (p.length > 1) p[1].parentNode.removeChild(p[1])

    $cita = $citas.split(",");
    $horario = $horarios.split(",");

    var p = document.createElement("p");
    var b = document.createElement("b");
    b.className = "span";
    var txt = document.createTextNode("Especialidad: " + $cita[4]);
    b.appendChild(txt);
    p.appendChild(b)
    var b = document.createElement("b");
    b.className = "span";
    var txt = document.createTextNode("Doctor: " + $cita[11]);
    b.appendChild(txt);
    p.appendChild(b);
    document.getElementById("Reprogramar").appendChild(p);

    $FechaReprogramar = document.getElementById("FechaReprogramar");
    for (let i = $FechaReprogramar.options.length; i >= 1; i--) {
      $FechaReprogramar.remove(i);
    }
    dia = "";

    for (let j = 0; j < $horario.length; j = j + 4) {

      if ($horario[j + 3] == $cita[2]) {

        if (dia != $horario[j + 1]) {
          var option = document.createElement('option');
          option.value = $horario[j];
          option.text = $horario[j + 1];

          $FechaReprogramar.appendChild(option);
          dia = $horario[j + 1];
        }
      }
    }

    document.getElementById("FechaReprogramar").setAttribute("onchange", "ReprogramarHorario('" + $citas + "','" + $horarios + "')")
  }

  function ReprogramarHorario($citas, $horarios) {

    $horario = $horarios.split(",");
    $cita = $citas.split(",");

    document.getElementById("idcita").value = $cita[0];
    document.getElementById("idpacienteRepro").value = $cita[1];
    document.getElementById("idmedicoRepro").value = $cita[2];
    document.getElementById("especialidadRepro").value = $cita[4];
    document.getElementById("idhoraActiva").value = $cita[3];

    for (let j = 0; j < $horario.length; j = j + 4) {

      if ($horario[j + 3] == $cita[2]) {

        var tr = document.createElement("tr");

        var td = document.createElement("td");
        var txt = document.createTextNode($horario[j + 2]);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var txt = document.createTextNode($cita[11]);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var txt = document.createTextNode($horario[j + 1]);
        td.appendChild(txt);
        tr.appendChild(td);

        var td = document.createElement("td");
        var btn = document.createElement("button");
        btn.type = "button";
        btn.setAttribute("data-bs-toggle", "modal");
        btn.setAttribute("onclick", "ConfirmarReprog('" + $cita[4] + "','" + $cita[11] + "','" + $cita[9] + "','" + $horario[j + 1] + "','" + $horario[j + 2] + "','" + $horario[j] + "')");
        btn.setAttribute("data-bs-target", "#confirmRepro");
        var i = document.createElement("i");
        i.className = "fas fa-clock";
        btn.appendChild(i);
        td.appendChild(btn);
        tr.appendChild(td);

        document.getElementById("ElegirReprogramacion").appendChild(tr);
      }
    }
  }

  function ConfirmarReprog($especialidad, $medico, $paciente, $fecha, $horario, $idhorario) {

    document.getElementById("idhorarioRepro").value = $idhorario;
    document.getElementById("idhoraRepro").value = $idhorario;

    var h4 = document.getElementById("DetalleRepro").getElementsByTagName("h4");
    while (h4.length > 0) h4[0].parentNode.removeChild(h4[0])

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Especialidad : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($especialidad);
    h4.appendChild(txt);

    document.getElementById("DetalleRepro").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Paciente     : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($paciente);
    h4.appendChild(txt);

    document.getElementById("DetalleRepro").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Médico       : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($medico);
    h4.appendChild(txt);

    document.getElementById("DetalleRepro").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Fecha        : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($fecha);
    h4.appendChild(txt);

    document.getElementById("DetalleRepro").appendChild(h4);

    var h4 = document.createElement("h4");
    var b = document.createElement("b");
    var txt = document.createTextNode("Horario      : ");
    b.appendChild(txt);
    h4.appendChild(b);
    var txt = document.createTextNode($horario);
    h4.appendChild(txt);

    document.getElementById("DetalleRepro").appendChild(h4);
  }
</script>