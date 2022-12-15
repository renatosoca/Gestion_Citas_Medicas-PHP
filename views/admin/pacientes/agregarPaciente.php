<!-- AGREGAR PACIENTE (MODAL) -->
<div class="modal fade" id="agregarPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/pacientes/registrar" class="formulario" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR PACIENTE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" id="">

                        <div class="row">
                            <input type="text" class="col" name="paciente[Nombre]" id="" placeholder="Nombre" required />
                        </div>

                        <div class="row">
                            <input type="text" class="col" name="paciente[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />
                            <input type="text" class="col" name="paciente[Ape_Materno]" id="" placeholder="Apellido Materno" required />
                        </div>

                        <div class="row">
                            <select class="col" name="paciente[Genero]" required>
                                <option selected>Elija su genero</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                        </div>

                        <div class="row">
                            <select class="col" name="paciente[T_Doc]" required>
                                <option selected>Tipo de documento</option>
                                <option value="DNI">DNI</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                            </select>
                            <input type="number" class="col" name="paciente[Nr_Doc]" id="" placeholder="Ingrese Nro documento" required />
                        </div>

                        <div class="row">
                            <label >Fecha de nacimiento:</label>
                            <input type="date" class="col" name="paciente[Fecha_Nacimiento]" id="" placeholder="Fecha de Nacimiento" required />
                        </div>

                        <div class="row">
                            <input type="number" class="col" name="paciente[Telefono]" id="" placeholder="Nro de telefono" required />
                            <input type="email" class="col" name="usuario[email]" id="" placeholder="Correo Electrónico" required />
                        </div>

                        <div class="row">
                            <input type="password" class="col" name="usuario[pass]" id="" placeholder="Contraseña" required />
                        </div>

                        <input type="hidden" class="col" name="usuario[tipo_usuario]" value="2" />
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <input type="submit" class="btn btn-primary col-5" name="Agregar" value="Agregar Paciente">
                            <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN--AGREGAR PACIENTE (MODAL) -->