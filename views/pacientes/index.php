                 <!-- INICIO DEL CONTENIDO PRINCIPAL-->
                 <div class="container-fluid contenedor-principal">
                    <!-- Page Heading -->
                    <div
                      class="d-sm-flex align-items-center justify-content-between mb-4"
                    >
                      <h1 class="h3 mb-0 text-gray-800">CITAS PENDIENTES:</h1>
                    
                      <a
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            href="#agregarCita"
                            role="button"
                            ><i class="fas fa-user-plus"> </i> Agregar Cita
                     </a>
        
                    </div>
                    <!--Fin Page Heading -->
        
        
                    <!-- TODAS LAS CITAS PENDIENTES-->
        
                    <div class="container">
        
                        <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
                      <div class="container cita-pendiente">
        
                            <div class="row" >
                              <div class="col-sm-12">
                                <h5 style="color: darkred; font-weight: bolder; font-size: 22px;" >CITA: #12</h5>
                              </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-sm-5">
                                    <p>ESPECIALIDAD: Cardiología </p> 
                                    
                                </div>
                                <div class="col-sm-5">
                                  <p>FECHA: 12 / 12 / 12</p>
                              
                                </div>
                                <div  class="col-sm-2">
                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reprogramarCita">
                                    REPROGRAMAR
                                  </button>
                                
                                </div>
                            
                          </div>
        
                          <div class="row">
                                  <div class="col-sm-5">
                                    <p>MÉDICO: Pepe Sanchez </p> 
                                      
                                  </div>
                                  <div class="col-sm-5">
                                        <p>HORA: 08:30</p>
                                
                                  </div>
                                <div  class="col-sm-2">
                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editarCita">
                                    ELIMINAR
                                  </button>
                                  
                                </div>
                          </div>
                      
                      </div>
                    
                        <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
                        <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
                      <div class="container cita-pendiente">
        
                        <div class="row" >
                          <div class="col-sm-12">
                            <h5 style="color: darkred; font-weight: bolder; font-size: 22px;" >CITA: #13</h5>
                          </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-sm-5">
                                <p>ESPECIALIDAD: Cardiología </p> 
                                
                            </div>
                            <div class="col-sm-5">
                              <p>FECHA: 12 / 12 / 12</p>
                          
                            </div>
                            <div  class="col-sm-2">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reprogramarCita">
                                REPROGRAMAR
                              </button>
                            </div>
                        
                      </div>
        
                      <div class="row">
                              <div class="col-sm-5">
                                <p>MÉDICO: Pepe Sanchez </p> 
                                  
                              </div>
                              <div class="col-sm-5">
                                    <p>HORA: 08:30</p>
                            
                              </div>
                            <div  class="col-sm-2">
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editarCita">
                                ELIMINAR
                              </button>
                              
                            </div>
                      </div>
                  
                  </div>
                
                    <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
                    
                      </div>
                    <!--  FIN TODAS LAS CITAS PENDIENTES-->
        
                 </div>
                
                 <!-- FIN DEL CONTENIDO PRINCIPAL-->
        
            <!-- T0DOS LOS MODALES UTILIZADOS -->

<!--AGREGAR CITA-->
<div
class="modal fade"
id="agregarCita"
data-bs-backdrop="static" data-bs-keyboard="false"
aria-hidden="true"
aria-labelledby="exampleModalToggleLabel2"
tabindex="-1"
>
<div class="modal-dialog modal-dialog-centered">
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
<!-- FIN AGREGAR CITA-->


<!-- CONFIRMAR CITA (MODAL) -->
<div
      class="modal fade"
      id="confirmCita"
      data-bs-backdrop="static" data-bs-keyboard="false"
      aria-hidden="true"
      aria-labelledby="exampleModalToggleLabel2"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
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
<!-- FIN CONFIRMAR CITA (MODAL) -->


<!----------------------------------------->
<!--REPROGRAMAR CITA-->
<div
class="modal fade"
id="reprogramarCita"
data-bs-backdrop="static" data-bs-keyboard="false"
aria-hidden="true"
aria-labelledby="exampleModalToggleLabel2"
tabindex="-1"
>
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>
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
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmRepro">
                        <i class="fas fa-clock"></i>
                       
                    </td>
                  </tr>
    
    
                  <tr>
                    <td>10:00</td>
                    <td>      </td>
                    <td>Jon Armando</td>
                    <td>11/12/22</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmCita">
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
<!-- FIN REPROGRAMAR CITA-->


<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div
      class="modal fade"
      id="confirmRepro"
      data-bs-backdrop="static" data-bs-keyboard="false"
      aria-hidden="true"
      aria-labelledby="exampleModalToggleLabel2"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
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
                  <input type="submit" class="col btn btn-danger"  data-bs-toggle="modal" data-bs-target="#reprogramarCita" value="Retroceder">
                  <input type="submit" class="col btn btn-primary" value="Confirmar Cita">
                  <div class="col-1"></div>
    
                
              </div>
          
              </div>
          </div>
        </div>
      </div>
    </div>

<!-- FIN CONFIRMAR REPROGRAMACION (MODAL) -->

<style>
    body{
      background-color: #e4ebf0;
    }
    .contenedor-principal{
      padding: 35px;
    }
      .cita-pendiente{
          background-color: #4180ab;
          border-radius: 10px;
          padding: 30px;
          margin: 40px;
          font-weight: 500;
          color:blanchedalmond;
          font-size: 18px;
      }

      .cita-pasada{
          background-color:lightcoral;
          border-radius: 10px;
          padding: 10px;
          margin: 10px;
      }
      select,  input, .fichaa{
          margin: 8px;
          padding: 5px;
      }
  </style>
 