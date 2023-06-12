<!-- EDITAR MÉDICO (MODAL) -->
<div class="modal fade" id="editarMed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/medicos/actualizar" class="" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MÉDICO</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container" id="">
                        <input type="hidden" name="id" id="id">

                        <div class="row">
                            <input type="text" class="col" name="medico[Nombre]" id="Nombre" placeholder="Nombre" required />
                        </div>

                        <div class="row">
                            <input type="text" class="col" name="medico[Ape_Paterno]" id="Ape_Paterno" placeholder="Apellido Paterno" required />
                            <input type="text" class="col" name="medico[Ape_Materno]" id="Ape_Materno" placeholder="Apellido Materno" required />
                        </div>

                        <div class="row">
                            <select name="medico[ID_Especialidad]" class="col" id="ID_Especialidad">
                                <option value="" disabled="" selected>Especialidad</option>
                                <?php foreach ($especialidades as $row) { ?>
                                    <option <?php echo "value='" . $row->id . "'" ?>><?php echo $row->Descripcion ?></option>
                                <?php } ?>
                            </select>

                            <select name="medico[Genero]" class="col" id="Genero">
                                <option value="" disabled="" selected>Seleccione su sexo</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                        </div>

                        <div class="row">
                            <select class="col" name="medico[T_Doc]" id="T_Doc" required>
                                <option selected>Tipo de documento</option>
                                <option value="DNI">DNI</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                            </select>

                            <input type="number" class="col" name="medico[Nro_Doc]" id="Nro_Doc" placeholder="Ingrese Nro documento" required />
                        </div>

                        <div class="row">
                            <input type="number" class="col" name="medico[Telefono]" id="Telefono" placeholder="Nro de telefono" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <input type="submit" class="btn btn-primary col-5" value="Actualizar Médico">
                                <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN--EDITAR MÉDICO (MODAL) -->