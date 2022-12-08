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
        <h1 class="h3 mb-0 text-gray-800">Médicos</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarMedico">
          <i class="fas fa-user-plus"> </i> Agregar Médicos
        </button>

        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#especialidad">
          <i class="fas fa-clinic-medical"></i> Especialidades
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
                  <th>MÉDICO</th>
                  <th>SEXO</th>
                  <th>ESPECIALIDAD</th>
                  <th>HORARIO</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>DNI</th>
                  <th>MÉDICO</th>
                  <th>SEXO</th>
                  <th>ESPECIALIDAD</th>
                  <th>HORARIO</th>
                  <th>ACCIONES</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($medicos as $row) { ?>
                  <tr>
                    <td><?php echo $row->T_Doc ?></td>
                    <td><?php echo $row->Nombre . " " . $row->Ape_Paterno ?></td>
                    <td><?php echo $row->Genero ?></td>
                    <td><?php echo $row->ID_Especialidad ?></td>
                    <td>
                      <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHorario">
                        <i class="fas fa-calendar-alt"></i> horario
                      </button>
                    </td>
                    <td>
                      <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarMed">
                        <i class="fas fa-user-edit"> </i> editar
                      </button>
                      <form method="POST" action="/medicos/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="medicos">

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
  <!-- CCS ADICIONAL -->
  <style>
    select,
    input {
      margin: 8px;
      padding: 5px;
    }
  </style>

  <!-- MODALES USADOS -->
  <!-- AGREGAR MEDICO (MODAL) -->
  <div class="modal fade" id="agregarMedico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" class="" method="">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR MÉDICO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container" id="">

              <div class="row">
                <input type="text" class="col" placeholder="Nombre Completo" required>

              </div>

              <div class="row">
                <input type="text" class="col" placeholder="Apellido Mat." required>
                <input type="text" class="col" placeholder="Apellido Pat." required>
              </div>

              <div class="row">
                <input type="date" class="col" name="" id="" placeholder="Fec. Nacimiento" required>
                <select name="" class="col" id="">
                  <option value="" disabled="">Seleccione su sexo</option>
                  <option value="">Masculino</option>
                  <option value="">Femenino</option>
                </select>
              </div>
              <div class="row">
                <input type="number" class="col" name="" id="" placeholder="Documento" required>
                <select name="" class="col" id="">
                  <option value="" disabled="">Seleccione la especialidad</option>
                  <option value="">Cardiología</option>
                  <option value="">Pediatría</option>
                  <option value="">Cirugía</option>
                  <option value="">Traumatología</option>
                </select>
                <input type="numer" class="col" name="" id="" placeholder="Celular" required>
              </div>

              <div class="row">
                <input type="email" class="col" name="" id="" placeholder="Correo E." required>

                <input type="password" class="col" name="" id="" placeholder="Contraseña" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="container">
              <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5" value="Agregar Médico">
                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                <div class="col-1"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN--AGREGAR MEDICO (MODAL) -->


  <!-- EDITAR MÉDICO (MODAL) -->
  <div class="modal fade" id="editarMed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" class="" method="">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MÉDICO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container" id="">

              <div class="row">
                <input type="text" class="col" placeholder="Nombre Completo" required>

              </div>

              <div class="row">
                <input type="text" class="col" placeholder="Apellido Mat." required>
                <input type="text" class="col" placeholder="Apellido Pat." required>
              </div>

              <div class="row">
                <input type="date" class="col" name="" id="" placeholder="Fec. Nacimiento" required>
                <select name="" class="col" id="">
                  <option value="" disabled="">Seleccione su sexo</option>
                  <option value="">Masculino</option>
                  <option value="">Femenino</option>
                </select>
              </div>
              <div class="row">
                <input type="number" class="col" name="" id="" placeholder="Documento" required>
                <select name="" class="col" id="">
                  <option value="" disabled="">Seleccione la especialidad</option>
                  <option value="">Cardiología</option>
                  <option value="">Pediatría</option>
                  <option value="">Cirugía</option>
                  <option value="">Traumatología</option>
                </select>
                <input type="numer" class="col" name="" id="" placeholder="Celular" required>
              </div>

              <div class="row">
                <input type="email" class="col" name="" id="" placeholder="Correo E." required>

                <input type="password" class="col" name="" id="" placeholder="Contraseña" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="container">
              <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5" value="Editar Médico">
                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                <div class="col-1"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN--EDITAR MEDICO (MODAL) -->