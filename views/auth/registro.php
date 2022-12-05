<div id="fondoregist">
  <form action="/registro" class="formulario" method="POST">
    <h1>Registrate</h1>

    <?php foreach ($mensaje as $error) { ?>
      <p class="alerta error"><?php echo $error; ?></p>
    <?php } ?>

    <div class="contenedor">
      <div class="usuario">
        <input type="text" name="paciente[Nombre]" id="" placeholder="Nombre"  required/>
      </div>

      <div class="usuario">
        <input type="text" name="paciente[Ape_Paterno]" id="" placeholder="Apellido Paterno" required />
      </div>

      <div class="usuario">
        <input type="text" name="paciente[Ape_Materno]" id="" placeholder="Apellido Materno" required />
      </div>

      <div class="usuario">
        <input type="number" name="paciente[Edad]" id="" placeholder="Ingrese su Edad" min="1" max="120" required />
      </div>

      <div class="usuario">
        <select  class="form-select"  name="paciente[Genero]" required >
          <option selected>Elija su genero</option>
          <option value="Hombre">Hombre</option>
          <option value="Mujer">Mujer</option>
        </select>
      </div>

      <div class="usuario">
        <select  class="form-select"  name="paciente[T_Doc]" required >
          <option selected>Tipo de documento</option>
          <option value="DNI">DNI</option>
          <option value="PASAPORTE">PASAPORTE</option>
        </select>
      </div>

      <div class="usuario">
        <input type="number" name="paciente[Nr_Doc]" id="" placeholder="Ingrese el numero de documento" required />
      </div>

      <div class="usuario">
          <label  class="form-label">Ingrese su fecha de nacimiento:</label>
          <input type="date" name="paciente[Fecha_Nacimiento]" id="" placeholder="Fecha de Nacimiento" required />
      </div>

      <div class="usuario">
        <input type="number" name="paciente[Telefono]" id="" placeholder="Ingrese su numero de telefono" required />
      </div>

      <div class="correo">
        <input type="email" name="paciente[Correo]" id="" placeholder="Correo Electrónico" required />
      </div>

      <div class="usuario">
        <input type="text" name="paciente[Usuario]" id="" placeholder="Usuario" required />
      </div>

      <div class="contraseña">
        <input type="password" name="paciente[Contraseña]" id="" placeholder="Contraseña" required />
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