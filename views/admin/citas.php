

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
              <h1 class="h3 mb-0 text-gray-800">Citas</h1>
              
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarCita">
                <i class="fas fa-user-plus"> </i> Agregar Cita
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
                        <th>CÓDIGO</th>
                        <th>MÉDICO</th>
                        <th>PACIENTE</th>
                        <th>ESPECIALIDAD</th>
                        <th>FECHA</th>
                        <th>ACCIONES</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>CÓDIGO</th>
                        <th>MÉDICO</th>
                        <th>PACIENTE</th>
                        <th>ESPECIALIDAD</th>
                        <th>FECHA</th>
                        <th>ACCIONES</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>000001</td>
                        <td>Pedro Sanchez</td>
                        <td>Mario Bros</td>
                        <td>Cardiología</td>
                        <td>11/12/22</td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                              <i class="fas fa-trash-alt"></i> eliminar
                         </button>    
                        </td>
                      </tr>
                      <tr>
                        <td>000002</td>
                        <td>Pedro Sanchez</td>
                        <td>Mario Bros</td>
                        <td>Cardiología</td>
                        <td>11/12/22</td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                              <i class="fas fa-trash-alt"></i> eliminar
                         </button>    
                        </td>
                      </tr>
                      <tr>
                        <td>000003</td>
                        <td>Pedro Sanchez</td>
                        <td>Mario Bros</td>
                        <td>Cardiología</td>
                        <td>11/12/22</td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                              <i class="fas fa-trash-alt"></i> eliminar
                         </button>    
                        </td>
                      </tr>
                      <tr>
                        <td>000004</td>
                        <td>Pedro Sanchez</td>
                        <td>Mario Bros</td>
                        <td>Cardiología</td>
                        <td>11/12/22</td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                              <i class="fas fa-trash-alt"></i> eliminar
                         </button>    
                        </td>
                      </tr>
                      <tr>
                        <td>000005</td>
                        <td>Pedro Sanchez</td>
                        <td>Mario Bros</td>
                        <td>Cardiología</td>
                        <td>11/12/22</td>
                        <td> 
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#editarCita">
                                 <i class="fas fa-user-edit"> </i>editar
                            </button>
                            <button type="button" class=" " data-bs-toggle="modal" data-bs-target="#elimMed">
                              <i class="fas fa-trash-alt"></i> eliminar
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
        select,  input{
            margin: 8px;
            padding: 5px;
        }
        
    </style>

<!-- AGREGAR CITA (MODAL) -->
<div class="modal fade" id="agregarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">
          <div class="row">
            
            &nbsp; DNI:<input type="text" class="col-3" placeholder="Del Paciente" required>

              Especialidad:<select name="" class="col-4" id="" required>
                              <option value="" disabled="">Seleccione Especialidad </option>
                              <option value="">Cardiología</option>
                              <option value="">Neurología</option>
                            </select>
          </div>

          <div class="row">
           &nbsp; Médico: <select name="" class="col-4" id="" required >
                <option value="" disabled="">Seleccione Médico </option>
                <option value="">Carlos Mendoza</option>
                <option value="">Maria Oracle</option>
            </select>

            &nbsp; Fechas: <select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Fecha</option>
              <option value="">11/12/22</option>
              <option value="">10/12/22</option>
          </select>
          </div>

          <div class="row">
            
              <span>&nbsp;&nbsp;&nbsp;Use el Siguiente Calendario como guía (Opcional):</span>
            
            <div class="root">
              <div class="calendar" id="calendar">
      
              </div>
    
          </div>

          <div class="row">
              <div class="col-1"></div>
              <input type="submit" class="col btn btn-primary" value="Mostrar Resultados">
              <div class="col-1"></div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Horario</th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Medico</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Reservar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>08:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                      <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                        <i class="fas fa-clock"></i>
                      </button>
                  </td>
                </tr>

                <tr>
                  <td>08:30</td>
                  <td>Pepe Solar</td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>

                <tr>
                  <td>09:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>

                <tr>
                  <td>10:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>
                
              </tbody>
            </table>
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>
<!-- FIN AGREGAR CITA (MODAL) -->

<!-- CONFIRMAR CITA (MODAL) -->
<div class="modal fade" id="confirmCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                  <center>
                    <h4> <b> Especialidad : </b>  Cardiología</h4>
                    <h4> <b> Médico       : </b> Jon Armando</h4>
                    <h4> <b> Paciente     : </b> Sancho Perezz</h4>
                    <h4> <b> Fecha        : </b> 11/12/22</h4>
                    <h4> <b> Horario      : </b> 08:00</h4>

                  </center>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <div class="col-1"></div>
              <input type="submit" class="col btn btn-danger"  data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder">
              <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
              <div class="col-1"></div>

            
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>

<!-- REPROGRAMAR CITA (MODAL) -->
<div class="modal fade" id="editarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">
          <div class="row">
            <p> <span class="col-3">DNI: 43545353535</span><span class="col-3">   </span> <span class="col-4">Paciente: Mario Bros</span> </p>
            <p> <span class="col-3">Especialidad: Cardiología</span><span class="col-3">   </span> <span class="col-3">Doctor: Pedro Sanchez</span> </p>
          </div>

          <div class="row">


            &nbsp; &nbsp;&nbsp;&nbsp;Fechas: <select name="" class="col-4" id="" required>
              <option value="" disabled="">Seleccione Fecha</option>
              <option value="">11/12/22</option>
              <option value="">10/12/22</option>
          </select>
          </div>
          
          <div class="row">
            
              <span>&nbsp;&nbsp;&nbsp;Use el Siguiente Calendario como guía (Opcional):</span>
            
            <div class="root">
              <div class="calendar" id="calendar2">
      
              </div>
    
          </div>

          </div>

          <div class="row">
              <div class="col-1"></div>
              <input type="submit" class="col btn btn-primary" value="Mostrar Resultados">
              <div class="col-1"></div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Horario</th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Medico</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Reprogramar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>08:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                      <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
                        <i class="fas fa-clock"></i>
                      </button>
                  </td>
                </tr>

                <tr>
                  <td>08:30</td>
                  <td>Pepe Solar</td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>

                <tr>
                  <td>09:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>

                <tr>
                  <td>10:00</td>
                  <td>      </td>
                  <td>Jon Armando</td>
                  <td>11/12/22</td>
                  <td>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
                      <i class="fas fa-clock"></i>
                    </button>
                </td>
                </tr>
                
              </tbody>
            </table>
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
</div>
<!-- FIN AGREGAR CITA (MODAL) -->

<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmReprog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Reprogramación de Cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                  <center>
                    <h4> <b> Especialidad : </b>  Cardiología</h4>
                    <h4> <b> Médico       : </b> Jon Armando</h4>
                    <h4> <b> Paciente     : </b> Sancho Perezz</h4>
                    <h4> <b> Fecha        : </b> 11/12/22</h4>
                    <h4> <b> Horario      : </b> 08:00</h4>

                  </center>
      </div>

      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <div class="col-1"></div>
              <input type="submit" class="col btn btn-danger"  data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder">
              <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
              <div class="col-1"></div>

            
          </div>
      
      
      
          </div>
      
         </div>
    </div>
      
    </div>
  </div>
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
    <!-- Iniciar TableDate-->
    <script>
        $(document).ready(function() {
    $('#dataTable1').DataTable( {
        language: {
            url:"./vendor/datatables/es-ES.json"
        }
    } );
} );
    </script>
    <!-- CALENDARIO-->
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script  type="text/javascript" src="./js/calendar.js"></script>
    <script type="text/javascript">
        let calendar = new Calendar('calendar');
        calendar.getElement().addEventListener('change', e => {
            console.log(calendar.value().format('LLL'));
        });

        let calendar2 = new Calendar('calendar2');
        calendar2.getElement().addEventListener('change', e => {
            console.log(calendar2.value().format('LLL'));
        });

      
    </script>    
  </body>
</html>
