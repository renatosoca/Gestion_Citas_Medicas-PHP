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

      <!-- MODALES-->
   <!-- AGREGAR PACIENTE (MODAL) -->
   <div class="modal fade" id="agregarPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/pacientes/registrar" class="formulario" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >AGREGAR PACIENTE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div id="fondoregist">
            <div class="contenedor">

            <?php foreach ($mensaje as $error) { ?>
              <p class="alerta error"><?php echo $error; ?></p>
            <?php } ?>
            
              <div class=" m-1">
                <input type="text" class="form-control" name="paciente[Nombre]" id="" placeholder="Nombre"  required/>
              </div>

              <div class=" m-1">
                <input type="text" class="form-control" name="paciente[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />
              </div>

              <div class=" m-1">
                <input type="text" class="form-control" name="paciente[Ape_Materno]" id="" placeholder="Apellido Materno" required />
              </div>

              <div class=" m-1">
                <input type="number"  class="form-control"name="paciente[Edad]" id="" placeholder="Ingrese su Edad" min="1" max="120" required />
              </div>

              <div class=" m-1">
                <select  class="form-select"  name="paciente[Genero]" required >
                  <option selected>Elija su genero</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
                </select>
              </div>

              <div class=" m-1">
                <select  class="form-select"  name="paciente[T_Doc]" required >
                  <option selected>Tipo de documento</option>
                  <option value="DNI">DNI</option>
                  <option value="PASAPORTE">PASAPORTE</option>
                </select>
              </div>

              <div class=" m-1">
                <input type="number"  class="form-control" name="paciente[Nr_Doc]" id="" placeholder="Ingrese el numero de documento" required />
              </div>

              <div class=" m-1">
                  <label  class="form-label">Ingrese su fecha de nacimiento:</label>
                  <input type="date" class="form-control" name="paciente[Fecha_Nacimiento]" id="" placeholder="Fecha de Nacimiento" required />
              </div>

              <div class=" m-1">
                <input type="number" class="form-control" name="paciente[Telefono]" id="" placeholder="Ingrese su numero de telefono" required />
              </div>

              <div class=" m-1">
                <input type="email" class="form-control" name="paciente[Correo]" id="" placeholder="Correo Electrónico" required />
              </div>

              <div class=" m-1">
                <input type="text"  class="form-control"name="paciente[Usuario]" id="" placeholder="Usuario" required />
              </div>

              <div class=" m-1">
                <input type="password" class="form-control" name="paciente[Contraseña]" id="" placeholder="Contraseña" required />
              </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row ">
                <div class="col-6 text-center"><input type="submit" name="Agregar" class="btn btn-primary"  value="Agregar Paciente"></div>
                <div class="col-6 text-center"><input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="Cancelar" ></div>
            </div>
             </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN--AGREGAR PACIENTE (MODAL) -->