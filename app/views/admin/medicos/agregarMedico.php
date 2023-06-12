<!-- AGREGAR MEDICO (MODAL) -->
<div class="modal fade" id="agregarMedico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/medicos/agregar" class="" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR MÉDICO</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container" id="">
                        <div class="row">
                            <input type="text" class="col" name="medico[Nombre]" id="" placeholder="Nombre" required />
                        </div>

                        <div class="row">
                            <input type="text" class="col" name="medico[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />

                            <input type="text" class="col" name="medico[Ape_Materno]" id="" placeholder="Apellido Materno" required />
                        </div>

                        <div class="row">
                            <select name="medico[ID_Especialidad]" class="col" id="">
                                <option value="" disabled="" selected>Especialidad</option>
                                <?php foreach ($especialidades as $row) { ?>
                                    <option <?php echo "value='" . $row->id . "'" ?>> <?php echo $row->Descripcion ?></option>
                                <?php } ?>
                            </select>

                            <select name="medico[Genero]" class="col" id="">
                                <option value="" disabled="" selected>Seleccione su sexo</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                        </div>

                        <div class="row">
                            <select class="col" name="medico[T_Doc]" id="" required>
                                <option selected>Tipo de documento</option>
                                <option value="DNI">DNI</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                            </select>

                            <input type="number" class="col" name="medico[Nro_Doc]" id="" placeholder="Ingrese Nro documento" required />
                        </div>

                        <div class="row">
                            <input type="number" class="col" name="medico[Telefono]" id="" placeholder="Nro de telefono" required />
                            <input type="email" class="col" name="usuario[email]" id="" placeholder="Correo Electrónico" required />
                        </div>

                        <div class="row">
                            <input type="password" class="col" name="usuario[pass]" id="" placeholder="Contraseña" required />
                        </div>

                        <input type="hidden" class="col" name="usuario[tipo_usuario]" value="3" />
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <input type="submit" class="btn btn-primary col-5" value="Agregar Médico">
                            <input type="button" class="btn btn-danger col-3" data-bs-dismiss="modal" value="Cancelar">
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN--AGREGAR MEDICO (MODAL) -->