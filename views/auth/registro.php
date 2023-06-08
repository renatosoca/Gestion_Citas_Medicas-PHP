<div id="fondoregist">
  <form action="/registro" class="formulario" method="POST">
    <h1>Registrate</h1>

    <?php foreach ($mensaje as $error) { ?>
      <p class="alerta error"><?php echo $error; ?></p>
    <?php } ?>

    <div class="contenedor">
      <div class="usuario">
        <input type="text" name="paciente[Nombre]" id="" placeholder="Nombre"  />
      </div>

      <div class="usuario">
        <input type="text" name="paciente[Ape_Paterno]" id="" placeholder="Apellido Paterno"  />
      </div>

      <div class="usuario">
        <input type="text" name="paciente[Ape_Materno]" id="" placeholder="Apellido Materno"  />
      </div>

      <div class="usuario">
        <select  class="form-select"  name="paciente[Genero]"  >
          <option selected>Elija su genero</option>
          <option value="Hombre">Hombre</option>
          <option value="Mujer">Mujer</option>
        </select>
      </div>

      <div class="usuario">
        <select  class="form-select"  name="paciente[T_Doc]"  >
          <option selected>Tipo de documento</option>
          <option value="DNI">DNI</option>
          <option value="PASAPORTE">PASAPORTE</option>
        </select>
      </div>

      <div class="usuario">
        <input type="number" name="paciente[Nr_Doc]" id="" placeholder="Ingrese el numero de documento"  />
      </div>

      <div class="usuario">
          <label  class="form-label">Ingrese su fecha de nacimiento:</label>
          <input type="date" name="paciente[Fecha_Nacimiento]" id="FN" placeholder="Fecha de Nacimiento"  />
      </div>

      <div class="usuario">
          <input type="number" class="col" name="paciente[Edad]" id="Edad" placeholder="Edad" disabled required />
      </div>

      <div class="usuario">
        <input type="number" name="paciente[Telefono]" id="" placeholder="Ingrese su numero de telefono"  />
      </div>

      <div class="correo">
        <input type="email" name="usuario[email]" id="" placeholder="Correo Electrónico"  />
      </div>

      <div class="usuario">
        <input type="pass" name="usuario[pass]" id="" placeholder="contraseña"  />
      </div>

      <input type="hidden" name="usuario[tipo_usuario]" id="" placeholder="Contraseña"  value="2"/>

      <div>
        <input type="submit" value="Registrate" class="button" />
        <p>
          ¿Ya tienes una cuenta?
          <a class="link" href="/login"> Inicia Sesión </a>
        </p>
      </div>
    </div>
  </form>
</div>

<script>
    document.getElementById('FN').addEventListener('change', function() {
        $FN = this.value;
        $FechaNacimiento= new Date($FN);
        $fechaActual = new Date();

        $diferencia = $fechaActual.getFullYear() - $FechaNacimiento.getFullYear();
        
        $edad = $fechaActual.getMonth() < $FechaNacimiento.getMonth() || 
            ($fechaActual.getMonth() === $FechaNacimiento.getMonth() && 
            $fechaActual.getDate() < $FechaNacimiento.getDate())
            ? $diferencia - 1 
            : $diferencia;

    document.getElementById("Edad").value=$edad;
    })
</script>