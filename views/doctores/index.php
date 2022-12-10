<!-- INICIO DEL CONTENIDO PRINCIPAL-->
<div class="container-fluid contenedor-principal">
            <!-- Page Heading -->
            <div
            class="d-sm-flex align-items-center justify-content-between mb-4"
          >
            <h1 class="h3 mb-0 text-gray-800">CITAS POR DÍA:</h1>
            <input type="date" name="" id="">
            <button class="btn btn-primary"> FILTRAR</button>
          </div>
          <!--Fin Page Heading -->

          <div style="padding: 10px;" class="container table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"># CITA</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">PACIENTE</th>
                    <th scope="col">ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12345</td>
                    <td>12/12/12</td>
                    <td>08:00</td>
                    <td>Panchito Sanchez</td>
                    <td>
                        <a
                            class="btn btn-success"
                            data-bs-toggle="modal"
                            href="#fichaMedica"
                            role="button"
                            > </i> Ficha Medica
                     </a>
                     <a
                            class="btn btn-secondary"
                            data-bs-toggle="modal"
                            href="#recetaMedica"
                            role="button"
                            > Receta Medica 
                     </a>
                    </td>
                  </tr>
                  <tr>
                    <td>12345</td>
                    <td>12/12/12</td>
                    <td>08:30</td>
                    <td>Panchito Sanchez</td>
                    <td>
                        <a
                            class="btn btn-success"
                            data-bs-toggle="modal"
                            href="#fichaMedica"
                            role="button"
                            > </i> Ficha Medica
                     </a>
                     <a
                            class="btn btn-secondary"
                            data-bs-toggle="modal"
                            href="#recetaMedica"
                            role="button"
                            > Receta Medica 
                     </a>
                    </td>
                  </tr>
                </tbody>
              </table>

          </div>
          
        </div>
        <style>
            .contenedor-principal{
                padding: 65px;
            }
        </style>
        <!--MODALES USADOS-->
            <!--AGREGAR FICHA MÉDICA-->
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
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">FICHA MÉDICA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                
                    <div class="modal-body">
                        <form action="">
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
                        <div class="row sd" >
                            PACIENTE: Panchito Sanchez 
                        </div>
                        <div class="row sd">
                           <b>DIAGNÓSTICO MÉDICO:</b> <input type="text" style="width: 460px;" name="" id="" required> 
            
                        </div>
                        <div class="row sd">
                        <b>DETALLE MÉDICO:</b>
                        </div> <textarea name="" id="" cols="47" rows="6" required></textarea>
                        <div class="row sd">
                            <b>OBSERVACIONES ADICIONALES:</b> 
                        </div>
                        <textarea name="" id="" cols="47" rows="6" required></textarea>
                        <input type="submit" class="btn btn-primary"  value="INSERTAR DATOS">
                      </div>
                    </form>
                    </div>
                  
                  </div>
            </div>
            </div>
            <!-- FIN AGREGAR FICHA MÉDICA-->
            
            <!--AGREGAR RECETA MÉDICA-->
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
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">RECETA MÉDICA</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                  <h5>MÉDICO: Jose Salvatierra </h5> 
                  <h5>PACIENTE:  Julio Andree</h5>
                  <h5>MEDICINAS RECETADAS:</h5>
                    <textarea name="" id="" cols="60" rows="6" required></textarea>
                  <h5>INSTRUCCIONES:</h5>
                  <textarea name="" id="" cols="60" rows="6" required></textarea>
                        <input type="submit" class="btn btn-primary"  value="INSERTAR DATOS">
                </form>
                </div>
                
              </div>
            </div>
          </div>
<!-- FIN AGREGAR RECETA MÉDICA-->




     <!-- -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
