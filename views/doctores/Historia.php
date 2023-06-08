       
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
                <form action="/doctor/ficha" method="post">
                  <input type="text" name="volver" value="<?php echo $citaVolver?>" hidden>
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
    <form action="/doctor/entrarcita" method="post">
        <input type="text" name="id" value="<?php echo $citaVolver?>" hidden>
        <button type="submit" class="btn btn-primary" >
                  volver
        </button>
    </form>
        
      </div>
    </div>
  </div>
</div>