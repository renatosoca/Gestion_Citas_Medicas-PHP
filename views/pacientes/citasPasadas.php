        
                 <!-- INICIO DEL CONTENIDO PRINCIPAL-->
                 <div class="container-fluid contenedor-principal">
                    <!-- Page Heading -->
                    <div
                      class="d-sm-flex align-items-center justify-content-between mb-4"
                    >
                      <h1 class="h3 mb-0 text-gray-800">CITAS PASADAS:</h1>
                    
                    </div>
                    <!--Fin Page Heading -->
        
        
                    <!-- TODAS LAS CITAS PENDIENTES-->
        
                    <div class="container">
        
                        <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
                      <div class="container cita-pendiente">
        
                            <div class="row" >
                              <div class="col-sm-12">
                                <h5 style="color: darkred; font-weight: bolder; font-size: 22px;" >CITA: #11</h5>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fichaMedica">
                                        FICHA 
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
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#recetaMedica">
                                        RECETA 
                                      </button>
                                  
                                </div>
                          </div>
                      
                      </div>
                    
                        <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
                        <!-- CONTENEDOR DE UNA CITA PENDIENTE-->
                      <div class="container cita-pendiente">
        
                        <div class="row" >
                          <div class="col-sm-12">
                            <h5 style="color: darkred; font-weight: bolder; font-size: 22px;" >CITA: #08</h5>
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
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fichaMedica">
                                FICHA 
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
                              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#recetaMedica">
                                RECETA 
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


<!----------------------------------------->
<!--FICHA MEDICO-->
<div
class="modal fade"
id="fichaMedica"
data-bs-backdrop="static" data-bs-keyboard="false"
aria-hidden="true"
aria-labelledby="exampleModalToggleLabel2"
tabindex="-1"
>
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ficha Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <div style="font-size: 20px;" class="container">
            <div class="row sd">
                 FICHA MEDICA : 21412421413442
            </div>
            <div class="row sd">
                ESPECIALIDAD: Cardiología
            </div>
            <div class="row sd" >
                MEDICO: Peito Lujan
            </div>
            <div class="row sd">
               <b>DIAGNÓSTICO MÉDICO:</b>  Hipertensión Cardiaca

            </div>
            <div class="row sd">
            <b>DETALLE MÉDICO:</b> Se observó que el paciente tiene problemas cardiacos en el corazon, necesario atención urgente.
            </div>
            <div class="row sd">
                <b>OBSERVACIONES ADICIONALES:</b>    Se observó que el paciente tiene problemas cardiacos en el corazon, necesario atención urgente.
            </div>
          </div>
        </div>
      
      </div>
</div>
</div>
<!-- FIN FICHA MEDICA-->


<!-- RECETA MÉDICA (MODAL) -->
<div
      class="modal fade"
      id="recetaMedica"
      data-bs-backdrop="static" data-bs-keyboard="false"
      aria-hidden="true"
      aria-labelledby="exampleModalToggleLabel2"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Receta Medica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>MÉDICO: Jose Salvatierra </h5> 
            <h5>PACIENTE:  Julio Andree</h5>
            <h6>MEDICINAS RECETADAS:</h6>
            <p> - Paracetamol (1 tableta) / - Ibuprofeno (2 tabletas) / - Amoxicilina (5 pildoras) / - Sobre de Suero (1 unid)</p>
            <h6>INSTRUCCIONES:</h6>
            <p> - Tomar un paracetamol todas las mañanas durante una semana. / - Un ibuprofeno en la tarde y noche durante una semana /. - Ingerir el suero dentro de las 24 horas. / - 5 pildoras de Amoxicilina cada hora.  </p>
          </div>
          
        </div>
      </div>
    </div>


<!-- RECETA MEDICA (MODAL) -->
<style>
    body{
      background-color: #e4ebf0;
    }
    .contenedor-principal{
      padding: 35px;
    }
      .cita-pendiente{
          background-color:tomato;
          border-radius: 10px;
          padding: 30px;
          margin: 40px;
          font-weight: 500;
          color:white;
          font-size: 18px;
      }
      select,  input, .fichaa{
          margin: 8px;
          padding: 5px;
      }
      .sd{
        margin: 10px;
      }
  </style>
 