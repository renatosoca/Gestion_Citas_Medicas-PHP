<div class="container-fluid contenedor-principal">

            <div class="card m-auto" style="width: 70rem;" >
            <div class="card-body">
                <h5 class="card-title text-center">Cita</h5>
                <div class="row">
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 ">DIA: <?php echo $citas->Fecha_Cita ?></h6>
                    </div>
                    <div class="col-6 text-end">
                        <form action="/doctor/historia" method="post">
                            <input type="text" name="id" value="<?php echo $citas->ID_Paciente ?>" hidden>
                            <input type="text" name="volver" value="<?php echo $citas->id ?>" hidden>
                            <button type="submit" class="btn btn-danger btn-sm">ver historial medico</button>
                        </form>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 ">
                        <h6 class="card-subtitle mb-2 ">NOMBRE: <?php echo $citas->NombrePaciente ?></h6>
                    </div>
                    <div class="col-6">
                        <h6 class="card-subtitle mb-2 ">EDAD: <?php echo $citas->Edad ?></h6>
                    </div>
                </div>
                <form action="/doctor/guardarficha" method="post">
                    <input type="text" name="Detalle[ID_Cita]" value="<?php echo $citas->id ?>" hidden>
                    <div class="row mt-3 ">
                        <div class="col-2">
                            <h6 class="card-subtitle mb-2 ">DESCRIPCION: </h6>
                        </div>
                        <div class="col-10 ">

                            <textarea class="form-control" name="Detalle[Descripcion]" placeholder="Descripcion" style="height: 60px"></textarea>
        
                        </div>
                    </div>
                    <div class="row mt-3 ">
                        <div class="col-2">
                            <h6 class="card-subtitle mb-2 ">DIAGNÓSTICO:</h6>
                        </div>
                        <div class="col-10 ">
                            <div class="form">
                                <input type="text" class="form-control" name="Detalle[Diagnostico]" placeholder="Diagnostico">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 ">
                        <div class="col-6">
                            <h5 class="card-title">Receta Medica:</h5>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-danger btn-sm" onclick="Receta()">Agregar Medicina</button>
                        </div>

                        <table class="table align-middle text-center">
                                <thead>
                                <tr>
                                    <th class="col-4">Anotacion</th>
                                    <th class="col-8" >Descripcion</th>
                                </tr>
                                </thead>
                                <tbody id="Receta">

                                </tbody>
                        </table>
                    </div>
                    <input type="text" name="recetanumero" id="NumeroMedicina" value="0" hidden>
                    <div class="row mt-5 text-center">
                        <div class="col ">
                            <button type="submit" class="btn btn-danger">Guardar Detalles Medicos</button>
                        </div>       
                    </div>
                </form>
                    
            </div>
            <div class="card-footer text-end">
                <a href="/doctor" class="btn btn-primary ">Volver</a>
            </div>
            </div>
    
</div>

<script>
    function Receta(){

        $NumeroMedicina=document.getElementById("NumeroMedicina").value;
        $NumeroMedicina++;
        var tr = document.createElement("tr");

        var td = document.createElement("td");
        var input = document.createElement("input");
        input.className="form-control";
        input.type="text";
        input.placeholder="Anotacion";
        input.name="Anotacion_"+$NumeroMedicina;
        td.appendChild(input);
        tr.appendChild(td);

        var td = document.createElement("td");
        var input = document.createElement("input");
        input.className="form-control";
        input.type="text";
        input.placeholder="Descripcion";
        input.name="Descripcion_"+$NumeroMedicina;
        td.appendChild(input);
        tr.appendChild(td);

        document.getElementById("Receta").appendChild(tr);

        document.getElementById("NumeroMedicina").value=$NumeroMedicina;

    }
</script>