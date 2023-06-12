<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Citas Pasadas:</h1>
  </div>
  <!--Fin Page Heading -->

  <!-- TODAS LAS CITAS PENDIENTES-->
  <div class="container">
    <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
    <div class="mb-3 row">
            <div class="col-2 text-end">
            <label  class="col-form-label">Buscar Area:</label>
            </div>
            <div class="col-2">
            <input class="form-control" type="text" placeholder="Area" id="myInput" onkeyup="BuscarArea()" >
            </div>
          </div>

    <div class="container cita-pendiente">    
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">Especialidad</th>
            <th scope="col">Doctor</th>
            <th scope="col">Diagnóstico</th>
            <th scope="col">Día</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($citas as $row) { ?>
            <tr>
              <td><?php echo $row->Area ?></td>
              <td><?php echo $row->NombreMedico ?></td>
              <td><?php echo $row->Diagnostico ?></td>
              <td><?php echo $row->Fecha_Cita ?></td>
              <td>
                <form action="/paciente/detallemedico" method="post">
                  <input type="text" name="IDCita" value="<?php echo $row->id ?>" hidden>
                  <button type="submit" class="btn btn-primary">
                    Ficha Médica
                  </button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
  </div>
  <!--  FIN TODAS LAS CITAS PENDIENTES-->
</div>
<!-- FIN DEL CONTENIDO PRINCIPAL-->

<style>
  body {
    background-color: #e4ebf0;
  }

  .contenedor-principal {
    padding: 35px;
  }

  .cita-pendiente {
    border-radius: 10px;
    padding: 30px;
    margin: 40px;
    font-weight: 500;
    color: white;
    font-size: 18px;
  }

  select,
  input,
  .fichaa {
    margin: 8px;
    padding: 5px;
  }

  .sd {
    margin: 10px;
  }
</style>

<script>
  function BuscarArea() {
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