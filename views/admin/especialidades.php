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
        <h1 class="h3 mb-0 text-gray-800">Especialidades</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEsp">
          <i class="fas fa-user-plus"> </i> Agregar Especialidad
        </button>

      </div>

      <!-- TABLA DE EESPECIALIDADES -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>ESPECIALIDAD</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($especialidades as $row) { ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->Descripcion; ?></td>
                    <td>
                      <button type="button" class="" data-bs-toggle="modal" data-bs-target="#editarEsp">
                        <i class="fas fa-user-edit"> </i>editar
                      </button>
                      <form method="POST" action="/especialidades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="especialidades">

                        <button type="submit">
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

    <!-- MODALES USADOS -->
 <!-- AGREGAR ESPECIALIDAD (MODAL) -->
 <div class="modal fade" id="agregarEsp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">AGREGAR - ESPECIALIDAD MÉDICA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 

      <div class="modal-body">
            <div class="container" id="">

                <form action="">
                  <div class="row" style="padding: 10px;">
                    <input type="text"  class="col"  placeholder="Especialidad Médica" required > <br>
                    <input type="submit" class="btn btn-danger col-3" value="Agregar" >
                </div>
                </form>
            </div>
        </div>

      
      
    </div>
  </div>
</div>
<!-- FIN AGREGAR ESPECIALIDAD (MODAL) -->

 <!-- EDITAR ESPECIALIDAD (MODAL) -->
 <div class="modal fade" id="editarEsp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">EDITAR - ESPECIALIDAD MÉDICA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 

      <div class="modal-body">
            <div class="container" id="">

                <form action="">
                  <div class="row" style="padding: 10px;">
                    <input type="text"  class="col"  placeholder="Especialidad Médica" required > <br>
                    <input type="submit" class="btn btn-warning col-3" value="Editar" >
                </div>
                </form>
            </div>
        </div>

      
      
    </div>
  </div>
</div>
<!-- FIN EDITAR ESPECIALIDAD (MODAL) -->