<div id="fondoregist">
  <form action="/register" class="formulario" method="POST">
    <h1>Registrate</h1>

    <?php foreach ($alerts as $error) { ?>
      <p class="alerta error"><?php echo $error; ?></p>
    <?php } ?>

    <div class="contenedor">
      <div class="usuario">
        <input type="text" name="patient[name]" id="" placeholder="Nombre"  />
      </div>

      <div class="usuario">
        <input type="text" name="patient[pat_lastname]" id="" placeholder="Apellido Paterno"  />
      </div>

      <div class="usuario">
        <input type="text" name="patient[mat_lastname]" id="" placeholder="Apellido Materno"  />
      </div>

      <div class="usuario">
        <select  class="form-select"  name="patient[gender]"  >
          <option selected>Elija su genero</option>
          <option value="M">Hombre</option>
          <option value="F">Mujer</option>
        </select>
      </div>

      <div class="usuario">
        <select  class="form-select"  name="patient[doc_type]"  >
          <option selected>Tipo de documento</option>
          <option value="DNI">DNI</option>
          <option value="PASAPORTE">PASAPORTE</option>
        </select>
      </div>

      <div class="usuario">
        <input type="number" name="patient[doc_number]" id="" placeholder="Ingrese el numero de documento"  />
      </div>

      <div class="usuario">
          <label  class="form-label">Ingrese su fecha de nacimiento:</label>
          <input type="date" name="patient[DOB]" id="FN" placeholder="Fecha de Nacimiento"  />
      </div>

      <div class="usuario">
        <input type="number" name="patient[phone]" id="" placeholder="Ingrese su numero de telefono"  />
      </div>

      <div class="correo">
        <input type="email" name="user[email]" id="" placeholder="Correo Electrónico"  />
      </div>

      <div class="usuario">
        <input type="pass" name="user[password]" id="" placeholder="contraseña"  />
      </div>

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