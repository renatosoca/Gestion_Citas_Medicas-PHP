        
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
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Especialidad</th>
                              <th scope="col">Doctor</th>
                              <th scope="col">Diagnostico</th>
                              <th scope="col">Dia</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($citas as $row) {?>
                            <tr>
                              <td><?php echo $row->Area?></td>
                              <td><?php echo $row->NombreMedico?></td>
                              <td><?php echo $row->Diagnostico?></td>
                              <td><?php echo $row->Fecha_Cita?></td>
                              <td>
                                <form action="/paciente/detallemedico" method="post">
                                  <input type="text" name="IDCita" value="<?php echo $row->id ?>" hidden>
                                  <button type="submit" class="btn btn-primary" >
                                  FICHA 
                                  </button>
                                </form>
                                
                              
                              
                              </td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>       
                      </div>
                    
                        <!--  FIN DE CONTENEDOR DE UNA CITA PENDIENTE-->
                      </div>
                    <!--  FIN TODAS LAS CITAS PENDIENTES-->
        
                 </div>
                
                 <!-- FIN DEL CONTENIDO PRINCIPAL-->

<style>
    body{
      background-color: #e4ebf0;
    }
    .contenedor-principal{
      padding: 35px;
    }
      .cita-pendiente{
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
 