<?php
date_default_timezone_set("America/Lima");
$hoy = date("Y-m-d");

if ($fecha) {
  $hoy = $fecha;
}
?>

<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
  <!-- Page Heading -->
  <form action="/doctor" method="post">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">CITAS:</h1>

      <input type="date" name="fecha" id="" value="<?php echo $hoy ?>">
      <button type="submit" class="btn btn-primary"> FILTRAR</button>
  </form>

</div>

<div class="mb-3 row">
  <div class="col-2 text-end">
    <label class="col-form-label">Buscar DNI:</label>
  </div>
  <div class="col-2">
    <input class="form-control" type="text" placeholder="DNI" id="myInput" onkeyup="BuscarDNI()">
  </div>
</div>
<!--Fin Page Heading -->

<div style="padding: 10px; width: 70rem;" class="container table-responsive">
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>DNI</th>
        <th>NOMBRE PACIENTE</th>
        <th>EDAD</th>
        <th>HORA</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($citas as $row) {

        if ($row->Fecha_Cita == $hoy) {
      ?>
          <tr>
            <td><?php echo $row->DNIPaciente ?></td>
            <td><?php echo $row->NombrePaciente ?></td>
            <td><?php echo $row->Edad ?></td>
            <td><?php echo $row->Hora_Cita ?></td>
            <td>
              <form action="/doctor/entrarcita" method="post">
                <input type="text" name="id" value="<?php echo $row->id ?>" hidden>
                <button type="submit" class="btn btn-success">Entrar a cita</button>
              </form>

            </td>
          </tr>
        <?php
        } else {
        ?>

          <td colspan="5" class="text-center">No tiene citas el dia de hoy</td>

      <?php
          break;
        }
      } ?>
    </tbody>
  </table>

</div>

</div>
<style>
  .contenedor-principal {
    padding: 65px;
  }
</style>


<!-- -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
  function BuscarDNI() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>