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
        </li>
      </ul>
    </nav>
    <!-- FIN DE BARRA DE -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Médicos</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarMedico">
          <i class="fas fa-user-plus"></i>
          Agregar Médicos
        </button>
      </div>

      <!-- TABLA DE MÉDICOS -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Médico</th>
                  <th>Género</th>
                  <th>Especialidad</th>
                  <th>Horario</th>
                  <th>Acciones</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($medicos as $row) { ?>
                  <tr>
                    <td><?php echo $row->Nro_Doc ?></td>
                    <td><?php echo $row->Nombre . " " . $row->Ape_Paterno ?></td>
                    <td><?php echo $row->Genero ?></td>
                    <td><?php echo $row->ID_Especialidad ?></td>
                    <td>
                      <form method="POST" action="/medicos/horario">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                        <button type="submit">
                          <i class="fas fa-calendar-alt"></i>
                          Asignar
                        </button>
                      </form>
                    </td>

                    <td class="flex-btns">
                      <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarMed" 
                      <?php echo "onclick='Editar(\"" . implode(",", (array)$row) . "\")'" ?>>
                        <i class="fas fa-user-edit"></i>
                      </button>

                      <form method="POST" action="/medicos/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="medicos">

                        <button type="submit">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
</div>

<!-- CCS ADICIONAL -->
<style>
  select,
  input {
    margin: 8px;
    padding: 5px;
  }
</style>

<!-- MODALES USADOS -->

<?php include 'agregarMedico.php'; ?>

<?php include 'editarMedico.php'; ?>

<script>
  function Editar($medico) {
    $datos = $medico.split(",");

    document.getElementById("id").value = $datos[0];
    document.getElementById("Nombre").value = $datos[2];
    document.getElementById("Ape_Paterno").value = $datos[3];
    document.getElementById("Ape_Materno").value = $datos[4];
    document.querySelector('#Genero [value="' + $datos[5] + '"]').selected = true;
    document.querySelector('#T_Doc [value="' + $datos[6] + '"]').selected = true;
    document.getElementById("Nro_Doc").value = $datos[7];
    document.getElementById("Telefono").value = $datos[8];
    document.getElementById("id_login").value = $datos[11];

    const text = $datos[1];
    const $select = document.querySelector('#ID_Especialidad');
    const $options = Array.from($select.options);
    const optionToSelect = $options.find(item => item.text === text);
    optionToSelect.selected = true;

  }
</script>