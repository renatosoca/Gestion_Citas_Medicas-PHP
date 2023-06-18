<!-- EDITAR PACIENTE (MODAL) -->
<div class="modal fade" id="editarPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/pacientes/actualizar" class="" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PACIENTE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="container" id="">
                        <input type="hidden" name="id" id="id">
                        
                        <div class="row">
                            <input type="text" class="col" name="paciente[Nombre]" id="Nombre" placeholder="Nombre" required />
                        </div>

                        <div class="row">
                            <input type="text" class="col" name="paciente[Ape_Paterno]" id="Ape_Paterno" placeholder="Apellido Paterno" required />
                            <input type="text" class="col" name="paciente[Ape_Materno]" id="Ape_Materno" placeholder="Apellido Materno" required />
                        </div>

                        <div class="row">
                            <select class="col" name="paciente[Genero]" id="Genero" required>
                                <option selected>Elija su genero</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                        </div>

                        <div class="row">
                            <select class="col" name="paciente[T_Doc]" id="T_Doc" required>
                                <option selected>Tipo de documento</option>
                                <option value="DNI">DNI</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                            </select>
                            <input type="number" class="col" name="paciente[Nr_Doc]" id="Nr_Doc" placeholder="Ingrese Nro documento" required />
                        </div>

                        <div class="row">
                            <label >Fecha de nacimiento:</label>
                            <input type="date" class="col" name="paciente[Fecha_Nacimiento]" id="Fecha_Nacimiento" placeholder="Fecha de Nacimiento" required />
                        </div>

                        <div class="row">
                            <input type="number" class="col" name="paciente[Telefono]" id="Telefono" placeholder="Nro de telefono" required />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <input type="submit" class="btn btn-primary col-5 " value="Actualizar Paciente">
                            <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN--EDITAR PACIENTE (MODAL) -->