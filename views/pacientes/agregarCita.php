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

                        &nbsp; DNI:<input type="text" class="col-3" placeholder="Del Paciente" required>

                        Especialidad:<select name="" class="col-4" id="" required>
                            <option value="" disabled="">Seleccione Especialidad </option>
                            <option value="">Cardiología</option>
                            <option value="">Neurología</option>
                        </select>
                    </div>

                    <div class="row">
                        &nbsp; Médico: <select name="" class="col-4" id="" required>
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
                                    <td> </td>
                                    <td>Jon Armando</td>
                                    <td>11/12/22</td>
                                    <td>
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                                            <i class="fas fa-clock"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>08:30</td>
                                    <td>Pepe Solar</td>
                                    <td>Jon Armando</td>
                                    <td>11/12/22</td>
                                    <td>
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmCita">
                                            <i class="fas fa-clock"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>09:00</td>
                                    <td> </td>
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
                                    <td> </td>
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
<!-- FIN AGREGAR CITA (MODAL) -->