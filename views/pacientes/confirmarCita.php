<!-- CONFIRMAR CITA (MODAL) -->
<div class="modal fade" id="confirmCita" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Cita Médica</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <center id="ConfirmReserva">
                </center>
            </div>

            <div class="modal-footer">
                <div class="container">
                    <form action="/paciente/registrarcita" method="POST">
                        <input type="text" id="idpaciente" name="cita[ID_Paciente]" value="<?php echo $paciente->id ?>" hidden>
                        <input type="text" id="idmedico" name="cita[ID_Medico]" hidden>
                        <input type="text" id="idhorario" name="cita[ID_Horario]" hidden>
                        <input type="text" id="especialidad" name="cita[Area]" hidden>
                        <input type="text" id="idhora" name="ID_Horario" hidden>

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