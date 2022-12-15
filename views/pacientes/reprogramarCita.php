<!--REPROGRAMAR CITA-->
<div class="modal fade" id="reprogramarCita" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Reprogramar Cita Médica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
          <div id="Reprogramar">

            <p><b class="span">DNI: <?php echo $paciente->Nr_Doc ?></b><b class="span">Paciente: <?php echo $paciente->Nombre ?></b></p>

          </div>
          <div>


            <div class="row">


              <span class="col-2"><b>Fechas:</b></span><select name="" class="col-4" id="FechaReprogramar" required>
                <option value="0" disabled="" selected>Seleccione Fecha</option>
              </select>
            </div>
          </div>

          <div class="modal-footer">
            <div class="container">
              <div class="row">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Horario</th>
                      <th scope="col">Medico</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Reprogramar</th>
                    </tr>
                  </thead>
                  <tbody id="ElegirReprogramacion">


                  </tbody>
                </table>
              </div>



            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- FIN REPROGRAMAR CITA-->