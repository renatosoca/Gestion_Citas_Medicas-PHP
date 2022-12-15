<!-- Contenedor Principal-->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- BARRA DE ARRIBA -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - Información del Admin-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
              Douglas McGee
            </span>

            <img class="img-profile rounded-circle" src="/build/images/undraw_profile.svg" />
          </a>
        </li>
      </ul>
    </nav>
    <!-- FIN DE BARRA DE -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Especialidades</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEsp">
          <i class="fas fa-user-plus"></i>
          Agregar Especialidad
        </button>
      </div>

      <!-- TABLA DE EESPECIALIDADES -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Especialidad</th>
                  <th>Acciones</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($especialidades as $row) { ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->Descripcion; ?></td>
                    <td class="flex-btns">
                      <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarEsp" <?php echo "onclick='Editar(\"" . implode(",", (array)$row) . "\")'" ?>>
                        <i class="fas fa-user-edit"></i>
                      </button>

                      <form method="POST" action="/especialidades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="especialidades">

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
</div>
<!-- End of Main Content -->

<!-- MODALES USADOS -->

<?php include 'agregarEspecialidad.php'; ?>

<?php include 'editarEspecialidad.php'; ?>

<script>
  function Editar($especialidades) {
    $datos = $especialidades.split(",");

    document.getElementById("id").value = $datos[0];
    document.getElementById("Descripcion").value = $datos[1];
  }
</script>