<!-- REPROGRAMAR CITA (MODAL) -->
<div class="modal fade" id="editarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div id="Reprogramar">
                    </div>

                    <div>
                        <div class="row">
                            <span class="col-2">Fechas:</span>

                            <select name="" class="col-4" id="FechaReprogramar" required>
                                <option value="0" disabled="" selected>Seleccione Fecha</option>
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
<!-- FIN AGREGAR CITA (MODAL) -->