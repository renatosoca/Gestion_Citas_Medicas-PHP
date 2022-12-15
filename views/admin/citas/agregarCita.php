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
                        &nbsp; Doc:
                        <input id="Documento" type="text" class="col-3" placeholder="Del Paciente" <?php echo "onkeyup='VerificarDoc(\"" . implode(",", (array)$paciente) . "\")'" ?> required>

                        <input type="text" id="NombrePaciente" hidden>

                        <input type="text" id="paciente" hidden>

                        Especialidad:
                        <select name="" class="col-4" id="Especialidad" 
                        <?php echo "onchange='Medico(value,\"" . implode(",", (array)$medico) . "\")'" ?> required disabled>
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
                                    <th scope="col">Médico</th>
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
<!-- FIN AGREGAR CITA (MODAL) -->