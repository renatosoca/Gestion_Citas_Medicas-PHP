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
        <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarPaciente">
          <i class="fas fa-user-plus"> </i> Agregar Paciente
        </button>

      </div>

      <!-- TABLA DE PACIENTES -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>PACIENTE</th>
                  <th>SEXO</th>
                  <th>EDAD</th>
                  <th>HISTORIAL</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>DNI</th>
                  <th>PACIENTE</th>
                  <th>SEXO</th>
                  <th>EDAD</th>
                  <th>HISTORIAL</th>
                  <th>ACCIONES</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach ($pacientes as $row) { ?>
                <tr>
                <td><?php echo$row->Nr_Doc?></td>
                <td><?php echo$row->Nombre." ".$row->Ape_Paterno?></td>
                <td><?php echo$row->Genero?></td>
                <td><?php echo$row->Edad?></td>
                <td>
                    <button type='button' class='' data-bs-toggle='modal' data-bs-target='#verHistorial'>
                        <i class='fas fa-book-medical'></i> historial
                    </button>
                    </td>
                    <td>
                    <button type='button' class='' data-bs-toggle='modal' data-bs-target='#editarPaciente'>
                        <i class='fas fa-user-edit'> </i>editar
                    </button>
                    <form method="POST" action="/pacientes/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="medicos">

                        <button type="submit" name="Eliminar">
                          <i class="fas fa-trash-alt"> </i>eliminar
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