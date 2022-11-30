<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hospital San Jose</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Barra de Izquierda -->
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <img src="./img/Logo_hospital_San_José_del_Callao.svg.png" width="50px" alt="">
           
          </div>
          <div class="sidebar-brand-text mx-3">HOSPITAL SAN JOSÉ</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interfaces</div>

        <!-- Nav Item - Pacientes -->
        <li class="nav-item">
          <a class="nav-link" href="./pacientes.html">
            <i class="fas fa-user-injured"></i>
            <span>Pacientes</span></a
          >
        </li>

         <!-- Nav Item - Doctores -->
         <li class="nav-item">
            <a class="nav-link" href="./medicos.html">
              <i class="fas fa-user-md"></i>
              <span>Médicos</span></a
            >
          </li>

        <!-- Nav Item - Citas -->
        <li class="nav-item">
          <a class="nav-link" href="./citas.html">
            <i class="fas fa-calendar-check"></i>
            <span>Citas</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->
      <!-- Fin Barra de Izquierda -->

      <!-- Contenedor Principal-->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- BARRA DE ARRIBA -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - Información del Admin-->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Douglas McGee</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - Informacion del Admin -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
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
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
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
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>
              
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarPaciente">
                <i class="fas fa-user-plus"> </i> Agregar Paciente
              </button>

            </div>

            <!-- TABLA DE PACIENTES -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable1"
                    width="100%"
                    cellspacing="0"
                  >
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
                      <tr>
                        <td>76675656</td>
                        <td>Pedro Sanchez</td>
                        <td>M</td>
                        <td>44</td>
                        <td>
                             <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHistorial">
                                <i class="fas fa-book-medical"></i> historial
                             </button>
                        </td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarPaciente">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>77565666</td>
                        <td>Donna Snider</td>
                        <td>F</td>
                        <td>22</td>
                        <td>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHistorial">
                               <i class="fas fa-book-medical"></i> historial
                            </button>
                       </td>
                       <td> 
                           <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarPaciente">
                                <i class="fas fa-user-edit"> </i>editar
                           </button>
                       </td>
                      </tr>
                      <tr>
                        <td>99999999</td>
                        <td>Shad Decker</td>
                        <td>M</td>
                        <td>20</td>
                        <td>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHistorial">
                               <i class="fas fa-book-medical"></i> historial
                            </button>
                       </td>
                       <td> 
                           <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarPaciente">
                                <i class="fas fa-user-edit"> </i>editar
                           </button>
                       </td>
                      </tr>
                      <tr>
                        <td>88888888</td>
                        <td>Paul Sanchez</td>
                        <td>M</td>
                        <td>15</td>
                        <td>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHistorial">
                               <i class="fas fa-book-medical"></i> historial
                            </button>
                       </td>
                       <td> 
                           <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarPaciente">
                                <i class="fas fa-user-edit"> </i>editar
                           </button>
                       </td>
                      </tr>
                      <tr>
                        <td>55555555</td>
                        <td>Jonas Alexander</td>
                        <td>M</td>
                        <td>44</td>
                        <td>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#verHistorial">
                               <i class="fas fa-book-medical"></i> historial
                            </button>
                       </td>
                       <td> 
                           <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarPaciente">
                                <i class="fas fa-user-edit"> </i>editar
                           </button>
                       </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span
                >Copyright &copy; Todos los Derechos Reservados al Grupo 3</span
              >
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Cerrar Sesion(Modal)-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              ¿Listo para salir?
            </h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Seleccione "Cerrar sesión" a continuación si está listo para
            finalizar su sesión actual.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancelar
            </button>
            <a class="btn btn-primary" href="login.html">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>

    <style>
        select,  input, .fichaa{
            margin: 8px;
            padding: 5px;
        }
        
    </style>
  
  <!-- AGREGAR PACIENTE (MODAL) -->
  <div class="modal fade" id="agregarPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" class="" method="">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >AGREGAR PACIENTE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container" id="">

                <div class="row">
                     <input type="text"  class="col"  placeholder="Nombre Completo" required >
                     
                </div>

                <div class="row">
                    <input type="text"  class="col"  placeholder="Apellido Mat." required >
                     <input type="text"  class="col"  placeholder="Apellido Pat."  required>
                </div>

                <div class="row">
                    <input type="date" class="col" name="" id="" placeholder="Fec. Nacimiento" required>
                    <select name="" class="col" id="" >
                        <option value="" disabled="">Seleccione su sexo</option>
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                    </select>
                </div>
                <div class="row">
                    <input type="number" class="col" name="" id="" placeholder="Documento" required>
                    <input type="email" class="col" name="" id="" placeholder="Correo E." required>

                </div>

                <div class="row">
                    <input type="numer" class="col" name="" id="" placeholder="Celular" required>
                    <input type="password" class="col" name="" id="" placeholder="Contraseña" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5"  value="Agregar Paciente">
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
        <form action="" class="" method="">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >EDITAR PACIENTE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container" id="">

                <div class="row">
                     <input type="text"  class="col"  placeholder="Nombre Completo" required >
                     
                </div>

                <div class="row">
                    <input type="text"  class="col"  placeholder="Apellido Mat." required >
                     <input type="text"  class="col"  placeholder="Apellido Pat."  required>
                </div>

                <div class="row">
                    <input type="date" class="col" name="" id="" placeholder="Fec. Nacimiento" required>
                    <select name="" class="col" id="" >
                        <option value="" disabled="">Seleccione su sexo</option>
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                    </select>
                </div>
                <div class="row">
                    <input type="number" class="col" name="" id="" placeholder="Documento" required>
                    <input type="email" class="col" name="" id="" placeholder="Correo E." required>

                </div>

                <div class="row">
                    <input type="numer" class="col" name="" id="" placeholder="Celular" required>
                    <input type="password" class="col" name="" id="" placeholder="Contraseña" required>
                </div>
                
                


            </div>
          

        </div>
        <div class="modal-footer">
            <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <input type="submit" class="btn btn-primary col-5"  value="Editar Paciente">
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

  
  <!-- MOSTRAR HISTORIAL MEDICO (MODAL) -->
  <div class="modal fade" id="verHistorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" >HISTORIAL MÉDICO - 2022</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container" id="">
              <div class="row">
                PACIENTE: Jonas Alexander
              </div>

              <div class="row fichaaa">
                <br>
                  <div class="col-12  btn-secondary fichaa" >
                    <h6 style="text-align:center ;">Ficha Medica #1</h6>
                    <span>Día de la Cita: 20/10/22</span> <br>
                    <span>Hora: 08:30</span> <br>
                    <span>Especialidad: Cardiología</span> <br>
                    <span>Médico: John Rojas</span> <br> <br>
                    <span>Detalle Médico: Se observó que el paciente tiene problemas cardiacos en el corazon, necesario atención urgente.</span> <br><br>
                    <span>Diagnóstico: Hipertensión Cardiaca</span>

                  </div>
                  <div class="col-12 btn-secondary fichaa" >
                    <h6 style="text-align:center ;">Ficha Medica #2</h6>
                    <span>Día de la Cita: 22/10/22</span> <br>
                    <span>Hora: 10:00</span> <br>
                    <span>Especialidad: Odontología</span> <br>
                    <span>Médico: John Rojas</span> <br> <br>
                    <span>Detalle Médico: Se observó que el paciente tiene problemas cardiacos en el corazon, necesario atención urgente.</span> <br><br>
                    <span>Diagnóstico: Caries Leve</span>



                  </div>
                  <div class="col-12 btn-secondary fichaa" >
                    
                    <h6 style="text-align:center ;">Ficha Medica #3</h6>
                    <span>Día de la Cita: 24/10/22</span> <br>
                    <span>Hora: 12:30</span> <br>
                    <span>Especialidad: Neurología</span> <br>
                    <span>Médico: John Rojas</span> <br> <br>
                    <span>Detalle Médico: Se observó que el paciente tiene problemas cardiacos en el corazon, necesario atención urgente.</span> <br><br>
                    <span>Diagnóstico: Derraame Cerebral</span>



                  </div>

              </div>
              
          
            </div>
          

        </div>
      </div>
    </div>
  </div>
  <!-- FIN--EDITAR PACIENTE (MODAL) -->


    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
    
    
  </body>
</html>
