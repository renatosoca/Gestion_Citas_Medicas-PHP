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
        <h1 class="h3 mb-0 text-gray-800">Médicos</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarMedico">
          <i class="fas fa-user-plus"> </i> Agregar Médicos
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
              <tbody>
                <?php foreach ($medicos as $row) { ?>
                  <tr>
                    <td><?php echo $row->Nro_Doc?></td>
                    <td><?php echo $row->Nombre ." ".$row->Ape_Paterno ?></td>
                    <td><?php echo $row->Genero ?></td>
                    <td><?php echo $row->ID_Especialidad ?></td>
                    <td>
                    <form method="POST" action="/medicos/horario">

                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                        <button type="submit">
                        <i class="fas fa-calendar-alt"></i> horario
                        </button>
                      </form>   
                    </td>
                    <td>
                      <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarMed" <?php echo "onclick='Editar(\"".implode(",",(array)$row)."\")'"?> >
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
        <form action="/medicos/agregar" class="" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >AGREGAR MÉDICO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container" id="">

              <div class="row">
                <input type="text" class="col" name="medico[Nombre]" id="" placeholder="Nombre" required/>          
              </div>

              <div class="row">
                <input type="text"  class="col" name="medico[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />
                <input type="text" class="col" name="medico[Ape_Materno]" id="" placeholder="Apellido Materno" required />
              </div>

              <div class="row">
                <select name="medico[ID_Especialidad]" class="col" id="" >
                      <option value="" disabled="" selected>Especialidad</option>
                      <?php foreach ($especialidades as $row) { ?>
                      <option <?php echo "value='".$row->id."'" ?>> <?php echo $row->Descripcion ?></option>
                      <?php } ?>
                  </select>
                  <select name="medico[Genero]" class="col" id="" >
                      <option value="" disabled="" selected>Seleccione su sexo</option>
                      <option value="Hombre">Hombre</option>
                      <option value="Mujer">Mujer</option>
                  </select>
              </div>
              <div class="row">
                <select  class="col"  name="medico[T_Doc]" id="" required >
                  <option selected>Tipo de documento</option>
                  <option value="DNI">DNI</option>
                  <option value="PASAPORTE">PASAPORTE</option>
                </select>
                <input type="number" class="col" name="medico[Nro_Doc]" id="" placeholder="Ingrese Nro documento" required />    
              </div>

              <div class="row">
                <input type="number" class="col" name="medico[Telefono]" id="" placeholder="Nro de telefono" required />
                <input type="email" class="col" name="usuario[email]" id="" placeholder="Correo Electrónico" required />
              </div>

              <div class="row">
                <input type="password" class="col" name="usuario[pass]" id="" placeholder="Contraseña" required />
              </div>

              <input type="hidden" class="col" name="usuario[tipo_usuario]" value="3" />
          </div>
        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5"  value="Agregar Médico">
                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar" >
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
      <form action="/medicos/actualizar" class="" method="POST">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" >EDITAR MÉDICO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="container" id="">

          <input type="hidden" name="id" id="id">
          <div class="row">
            <input type="text" class="col" name="medico[Nombre]" id="Nombre" placeholder="Nombre" required/>          
          </div>

          <div class="row">
            <input type="text"  class="col" name="medico[Ape_Paterno]" id="Ape_Paterno" placeholder="Apellido Paterno" required />
            <input type="text" class="col" name="medico[Ape_Materno]" id="Ape_Materno" placeholder="Apellido Materno" required />
          </div>

          <div class="row">
            <select name="medico[ID_Especialidad]" class="col" id="ID_Especialidad" >
                  <option value="" disabled="" selected>Especialidad</option>
                  <?php foreach ($especialidades as $row) { ?>
                  <option <?php echo "value='".$row->id."'" ?>> <?php echo $row->Descripcion ?></option>
                  <?php } ?>
              </select>
              <select name="medico[Genero]" class="col" id="Genero" >
                  <option value="" disabled="" selected>Seleccione su sexo</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
              </select>
          </div>
          <div class="row">
            <select  class="col"  name="medico[T_Doc]" id="T_Doc" required >
              <option selected>Tipo de documento</option>
              <option value="DNI">DNI</option>
              <option value="PASAPORTE">PASAPORTE</option>
            </select>
            <input type="number" class="col" name="medico[Nro_Doc]" id="Nro_Doc" placeholder="Ingrese Nro documento" required />    
          </div>

          <div class="row">
            <input type="number" class="col" name="medico[Telefono]" id="Telefono" placeholder="Nro de telefono" required />
            <input type="email" class="col" name="medico[Correo]" id="Correo" placeholder="Correo Electrónico" required />
          </div>

          <div class="row">
            <input type="text" class="col" name="medico[Usuario]" id="Usuario" placeholder="Usuario" required />
            <input type="password" class="col" name="medico[Contraseña]" id="Contraseña" placeholder="Contraseña" required />
          </div>
        </div>

      <div class="modal-footer">
          <div class="container">
          <div class="row">
              <div class="col-1"></div>
              <input type="submit" class="btn btn-primary col-5"  value="Actualizar Médico">
              <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar" >
              <div class="col-1"></div>
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
<<<<<<< HEAD
</div>
  <!-- FIN--EDITAR MEDICO (MODAL) -->

  <script>

    function Editar($medico){
      $datos=$medico.split(",");
      
      document.getElementById("id").value=$datos[0];
			document.getElementById("Nombre").value=$datos[2];
			document.getElementById("Ape_Paterno").value=$datos[3];
			document.getElementById("Ape_Materno").value=$datos[4];    
			document.querySelector('#Genero [value="' + $datos[5] + '"]').selected = true;
			document.querySelector('#T_Doc [value="' + $datos[6] + '"]').selected = true;
      document.getElementById("Nro_Doc").value=$datos[7];
			document.getElementById("Telefono").value=$datos[8];
      document.getElementById("Correo").value=$datos[9];
      document.getElementById("Usuario").value=$datos[10];
      document.getElementById("Contraseña").value=$datos[11];

      const text = $datos[1];
      const $select = document.querySelector('#ID_Especialidad');
      const $options = Array.from($select.options);
      const optionToSelect = $options.find(item => item.text ===text);
      optionToSelect.selected = true;

    }
  </script>
  <!-- FIN--EDITAR MEDICO (MODAL) -->
