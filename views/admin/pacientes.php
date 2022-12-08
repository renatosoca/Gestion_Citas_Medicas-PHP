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
                      <button type='submit' name="Editar" class='' data-bs-toggle='modal' data-bs-target='#editarPaciente' <?php echo "onclick='Editar(\"".implode(",",(array)$row)."\")'"?>>
                        <i class='fas fa-user-edit'> </i>editar
                      </button>               
                    <form method="POST" action="/pacientes/eliminar">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="hidden" name="tipo" value="pacientes">

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

  <!--CSS ADICIONAL-->
  <style>
        select,  input, .fichaa{
            margin: 8px;
            padding: 5px;
        }
        
    </style>

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
            <div class="container" id="">

                <div class="row">
                  <input type="text" class="col" name="paciente[Nombre]" id="" placeholder="Nombre"  required/>          
                </div>

                <div class="row">
                  <input type="text"  class="col" name="paciente[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />
                  <input type="text" class="col" name="paciente[Ape_Materno]" id="" placeholder="Apellido Materno" required />
                </div>

                <div class="row">
                  <input type="number" class="col" name="paciente[Edad]" id="" placeholder="Ingrese su Edad" min="1" max="120" required />
                  <select  class="col"  name="paciente[Genero]" required >
                    <option selected>Elija su genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                  </select>
                </div>

                <div class="row">
                  <select  class="col"  name="paciente[T_Doc]" required >
                    <option selected>Tipo de documento</option>
                    <option value="DNI">DNI</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                  </select>
                  <input type="number" class="col" name="paciente[Nr_Doc]" id="" placeholder="Ingrese Nro documento" required />    
                </div>

                <div class="row">
                    <label  class="col">Fecha de nacimiento:</label>
                    <input type="date" class="col" name="paciente[Fecha_Nacimiento]" id="" placeholder="Fecha de Nacimiento" required />
                </div>

                <div class="row">
                  <input type="number" class="col" name="paciente[Telefono]" id="" placeholder="Nro de telefono" required />
                  <input type="email" class="col" name="paciente[Correo]" id="" placeholder="Correo Electrónico" required />
                </div>

                <div class="row">
                  <input type="text" class="col" name="paciente[Usuario]" id="" placeholder="Usuario" required />
                  <input type="password" class="col" name="paciente[Contraseña]" id="" placeholder="Contraseña" required />
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5" name="Agregar"  value="Agregar Paciente">
                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar" >
                <div class="col-1"></div>
            </div>
             </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN--AGREGAR PACIENTE (MODAL) -->

  <!-- EDITAR PACIENTE (MODAL) -->
  <div class="modal fade" id="editarPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/pacientes/actualizar" class="" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >EDITAR PACIENTE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container" id="">
            <input type="hidden" name="id" id="id">
            <div class="row">
              <input type="text" class="col" name="paciente[Nombre]" id="Nombre" placeholder="Nombre" required/>          
            </div>

            <div class="row">
              <input type="text"  class="col" name="paciente[Ape_Paterno]" id="Ape_Paterno" placeholder="Apellido Paterno" required />
              <input type="text" class="col" name="paciente[Ape_Materno]" id="Ape_Materno" placeholder="Apellido Materno" required />
            </div>

            <div class="row">
              <input type="number" class="col" name="paciente[Edad]" id="Edad" placeholder="Ingrese su Edad" min="1" max="120" required />
              <select  class="col"  name="paciente[Genero]" id="Genero" required >
                <option selected>Elija su genero</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
            </div>

            <div class="row">
              <select  class="col"  name="paciente[T_Doc]" id="T_Doc" required >
                <option selected>Tipo de documento</option>
                <option value="DNI">DNI</option>
                <option value="PASAPORTE">PASAPORTE</option>
              </select>
              <input type="number" class="col" name="paciente[Nr_Doc]" id="Nr_Doc" placeholder="Ingrese Nro documento" required />    
            </div>

            <div class="row">
                <label  class="col">Fecha de nacimiento:</label>
                <input type="date" class="col" name="paciente[Fecha_Nacimiento]" id="Fecha_Nacimiento" placeholder="Fecha de Nacimiento" required />
            </div>

            <div class="row">
              <input type="number" class="col" name="paciente[Telefono]" id="Telefono" placeholder="Nro de telefono" required />
              <input type="email" class="col" name="paciente[Correo]" id="Correo" placeholder="Correo Electrónico" required />
            </div>

            <div class="row">
              <input type="text" class="col" name="paciente[Usuario]" id="Usuario" placeholder="Usuario" required />
              <input type="password" class="col" name="paciente[Contraseña]" id="Contraseña" placeholder="Contraseña" required />
            </div>

            </div>          
        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5 "   value="Actualizar Paciente">
                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar" >
                <div class="col-1"></div>
            </div>
             </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN--EDITAR PACIENTE (MODAL) -->


  <script>

    function Editar($paciente){
      $datos=$paciente.split(",");
      
      document.getElementById("id").value=$datos[0];
			document.getElementById("Nombre").value=$datos[1];
			document.getElementById("Ape_Paterno").value=$datos[2];
			document.getElementById("Ape_Materno").value=$datos[3];
			document.getElementById("Edad").value=$datos[4];
			document.querySelector('#Genero [value="' + $datos[5] + '"]').selected = true;
			document.querySelector('#T_Doc [value="' + $datos[6] + '"]').selected = true;
      document.getElementById("Nr_Doc").value=$datos[7];
			document.getElementById("Fecha_Nacimiento").value=$datos[8];
			document.getElementById("Telefono").value=$datos[9];
      document.getElementById("Correo").value=$datos[10];
      document.getElementById("Usuario").value=$datos[11];
      document.getElementById("Contraseña").value=$datos[12];

    }

  </script>