
<div class="container-fluid contenedor-principal">

            <div class="card mt-5 mx-auto" style="width: 40rem;" >
            <div class="card-body">
                <h5 class="card-title text-center">HORARIO (Médico) -  <?php echo $medico->Nombre ." ". $medico->Ape_Paterno ?></h5>
                <div class="row">
                    <div class="col-12">
                        <form action="/medicos/horario" method="POST">
                            <input type="text" name="id" value="<?php echo $medico->id; ?>" hidden>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha:</label>
                                <input type="date" class="col" name="Fecha" id="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Hora de inicio:</label>
                                <input type="time" class="col" name="Hora_Inicio" id="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tiempo de Atencion:</label>
                                <input type="number" class="col" name="TiempoAtencion" id="" placeholder="en minutos" min="0" max="60" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pacientes a atender:</label>
                                <input type="number" class="col" name="Pacientes" id="" required>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-danger col-4" >Agregar</button>
                            </div>

                            
                        </form>
                    </div>
                </div>    
            </div>
            <div class="card-footer text-center">
                <a href="/admin/medicos" class="btn btn-primary ">Volver</a>
            </div>
            </div>
    
</div>
