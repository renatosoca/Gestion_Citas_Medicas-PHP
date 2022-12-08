
<!-- INICIO COLLAPSE DE CITAS PENDIENTES -->
<div class="collapse" id="collapseExample3">
    <div class="card card-body">
        <div class="container">
            <div class="row cita-pendiente">
                <div class="col-5">
                    <p>ESPECIALIDAD: Cardiologíad </p>
                    <p>MÉDICO: Pepito Salazar</p>
                </div>
                <div class="col-5">
                    <p>FECHA: 12 / 12 / 12</p>
                    <p>HORA: 08:30 </p>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarCita">
                        REPROGRAMAR
                    </button>
                    <p></p>
                    <a class="btn btn-danger" href="">-- CANCELAR --</a>
                </div>
            </div>

            <div class="row cita-pendiente">
                <div class="col-5">
                    <p>ESPECIALIDAD: Cardiología </p>
                    <p>MÉDICO: Pepito Salazar</p>
                </div>
                <div class="col-5">
                    <p>FECHA: 12 / 12 / 12</p>
                    <p>HORA: 08:30 </p>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarCita">
                        REPROGRAMAR
                    </button>
                    <p></p>
                    <a class="btn btn-danger" href="">-- CANCELAR --</a>

                </div>
            </div>

            <div class="row cita-pendiente">
                <div class="col-5">
                    <p>ESPECIALIDAD: Cardiología </p>
                    <p>MÉDICO: Pepito Salazar</p>
                </div>
                <div class="col-5">
                    <p>FECHA: 12 / 12 / 12</p>
                    <p>HORA: 08:30 </p>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarCita">
                        REPROGRAMAR
                    </button>
                    <p></p>
                    <a class="btn btn-danger" href="">-- CANCELAR --</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN DE  COLLAPSE DE CITAS PENDIENTES -->

<!-- REPROGRAMAR CITA (MODAL) -->
<div class="modal fade" id="editarCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Reprogramar Cita Médica</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <p> <span class="col-3">DNI: 43545353535</span><span class="col-3"> </span> <span class="col-4">Paciente: Mario Bros</span> </p>
                        <p> <span class="col-3">Especialidad: Cardiología</span><span class="col-3"> </span> <span class="col-3">Doctor: Pedro Sanchez</span> </p>
                    </div>

                    <div class="row">


                        &nbsp; &nbsp;&nbsp;&nbsp;Fechas: <select name="" class="col-4" id="" required>
                            <option value="" disabled="">Seleccione Fecha</option>
                            <option value="">11/12/22</option>
                            <option value="">10/12/22</option>
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
                                    <th scope="col">Reprogramar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08:00</td>
                                    <td> </td>
                                    <td>Jon Armando</td>
                                    <td>11/12/22</td>
                                    <td>
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
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
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
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
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
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
                                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#confirmReprog">
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
</div>
<!-- FIN AGREGAR CITA (MODAL) -->

<!-- CONFIRMAR REPROGRAMACION (MODAL) -->
<div class="modal fade" id="confirmReprog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Confirmar Reprogramación de Cita
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <center>
                    <h4><b> Especialidad : </b> Cardiología</h4>
                    <h4><b> Médico : </b> Jon Armando</h4>
                    <h4><b> Paciente : </b> Sancho Perezz</h4>
                    <h4><b> Fecha : </b> 11/12/22</h4>
                    <h4><b> Horario : </b> 08:00</h4>
                </center>
            </div>

            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <input type="submit" class="col btn btn-danger" data-bs-toggle="modal" data-bs-target="#agregarCita" value="Retroceder" />
                        <input type="submit" class="col btn btn-primary" value="Confirmar Cita" />
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
