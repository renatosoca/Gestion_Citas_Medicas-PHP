<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmRepro" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Reprogramación de Cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center id="DetalleRepro">

        </center>
      </div>
      <div class="modal-footer">
        <div class="container">
          <form action="/paciente/reprogramar" method="POST">

            <input type="text" id="idpacienteRepro" name="cita[ID_Paciente]" hidden>
            <input type="text" id="idmedicoRepro" name="cita[ID_Medico]" hidden>
            <input type="text" id="idhorarioRepro" name="cita[ID_Horario]" hidden>
            <input type="text" id="especialidadRepro" name="cita[Area]" hidden>
            <input type="text" id="idcita" name="idcita" hidden>
            <input type="text" id="idhoraRepro" name="idhoraRepro" hidden>
            <input type="text" id="idhoraActiva" name="idhoraActiva" hidden>


            <div class="row">
              <div class="col-6"><input type="button" class="col btn btn-danger" value="Retroceder"></div>
              <div class="col-6"><input type="submit" class="col btn btn-primary" value="Confirmar Cita"> </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN CONFIRMAR REPROGRAMACION (MODAL) -->