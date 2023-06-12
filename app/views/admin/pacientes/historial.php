        
  <div class="container-fluid contenedor-principal">
  <div class="card mt-5 mx-auto text-center" style="width: 60rem;" >
    <div class="card-body">
      <h1 class="card-title">CITAS PASADAS:</h1>
      <div class="container cita-pendiente">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Especialidad</th>
            <th scope="col">Doctor</th>
            <th scope="col">Diagnostico</th>
            <th scope="col">Dia</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        
        if ($citas==null) { ?>
            <td colspan="5" class="text-center">No tiene ninguna citas pasada</td>
        <?php }else{

          foreach ($citas as $row) {?>
            <tr>
              <td><?php echo $row->Area?></td>
              <td><?php echo $row->NombreMedico?></td>
              <td><?php echo $row->Diagnostico?></td>
              <td><?php echo $row->Fecha_Cita?></td>
              <td>
                <form action="/pacientes/detallemedico" method="post">
                  <input type="text" name="IDCita" value="<?php echo $row->id ?>" hidden>
                  <button type="submit" class="btn btn-primary" >
                  FICHA 
                  </button>
                </form>
              </td>
            </tr>
            <?php }

        }?>
        </tbody>
      </table>       
    </div>
    </div>
    <div class="card-footer ">
      <div class="text-end " >
        <a href="/admin/pacientes" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</div>
 