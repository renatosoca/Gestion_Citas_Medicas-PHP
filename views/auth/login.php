<div id="fondologin">
  <form action="/login" class="formulario" method="POST">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($mensaje as $error) { ?>
      <p class="alerta error"><?php echo $error; ?></p>
    <?php } ?>

    <div class="contenedor">
      <div class="usuario">
        <input type="text" name="usuario[email]" id="" placeholder="Ingrese su correo">
      </div>

      <div class="contraseña">
        <input type="password" name="usuario[pass]" id="" placeholder="Ingrese su Contraseña">
      </div>

      <div>
        <input type="submit" value="Iniciar Sesion" class="button">
        <p>
          Eres un paciente ¿Y no tienes una cuenta?
          <a class="link" href="/registro"> Regístrate ahora </a>
        </p>
      </div>
    </div>
  </form>
</div>