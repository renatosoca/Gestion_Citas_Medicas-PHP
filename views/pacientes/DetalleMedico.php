<div class="container-fluid contenedor-principal">

            <div class="card m-auto" style="width: 40rem;" >
            <div class="card-body">
                <h5 class="card-title text-center">Detalle Medico</h5>
                <h6 class="card-subtitle mb-2 ">FICHA MEDICA : <?php echo $detalleMedico->id ?></h6>
                <h6 class="card-subtitle mb-2 ">ESPECIALIDAD: <?php echo $cita->Area ?></h6>
                <h6 class="card-subtitle mb-2 ">MEDICO: <?php echo $cita->NombreMedico ?></h6>
                <h6 class="card-subtitle mb-2 "><b>DIAGNÓSTICO MÉDICO:</b>  <?php echo $detalleMedico->Diagnostico ?></h6>
                <p class="card-text"><b>DETALLE MÉDICO:</b> <?php echo $detalleMedico->Descripcion ?> </p>
                <h5 class="card-title">Receta Medica:</h5>
                <table class="table align-middle">
                        <thead>
                        <tr>
                            <th class="col-4">Anotacion</th>
                            <th class="col-8" >Descripcion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($receta as $row) {?>
                        <tr>
                            <td><?php echo $row->Anotacion?></td>
                            <td><?php echo $row->Descripcion?></td>
                        </tr>
                        <?php }?>
                        </tbody>
                </table>    
            </div>
            <div class="card-footer text-center">
                <a href="/paciente/citaspasadas" class="btn btn-primary ">Volver</a>
            </div>
            </div>
    
</div>