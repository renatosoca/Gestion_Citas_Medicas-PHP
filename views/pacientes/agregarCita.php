<!--AGREGAR CITA-->
<div class="modal fade" id="agregarCita" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Cita Médica</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        &nbsp; DNI:
                        <input id="Documento" type="text" class="col-3" placeholder="Del Paciente" 
                        value="<?php echo $paciente->Nr_Doc ?>" disabled required>

                        <input type="text" id="NombrePaciente" value="<?php echo $paciente->Nombre ?>" hidden>

                        Especialidad:
                        <select name="" class="col-4" id="Especialidad" <?php echo "onchange='Medico(value,\"" . implode(",", (array)$medico) . "\")'" ?> required>
                            <option value="0" disabled selected>Especialidad</option>
                            <?php foreach ($especialidades as $row) { ?>
                                <option <?php echo "value='" . $row->id . "'" ?>> <?php echo $row->Descripcion ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="row">
                        &nbsp; Médico:
                        <select name="" class="col-4" id="MedicoSelect" <?php echo "onchange='Horario(value,\"" . implode(",", (array)$horario) . "\")'" ?> required disabled>
                            <option value="0" disabled="" selected>Seleccione Médico </option>
                        </select>

                        &nbsp; Fechas:
                        <select name="" class="col-4" id="HorarioSelect" <?php echo "onchange='Reservar(value,\"" . implode(",", (array)$horario) . "\")'" ?> required disabled>
                            <option value="0" disabled="" selected>Seleccione Fecha</option>
                        </select>
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
                                    <th scope="col">Medico</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Reservar</th>
                                </tr>
                            </thead>

                            <tbody id="Reservar">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN AGREGAR CITA-->