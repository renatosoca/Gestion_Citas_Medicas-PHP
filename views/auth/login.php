<div id="fondologin">
  <form action="/login" class="formulario" method="POST">
    <h1>Iniciar Sesión</h1>

    <div class="contenedor">
      <div class="usuario">
        <input type="text" name="usuario" id="" placeholder="Usuario" required />
      </div>

      <div class="contraseña">
        <input type="password" name="contraseña" id="" placeholder="Contraseña" required />
      </div>

      <div>
        <input type="submit" value="Iniciar Sesión" class="button" name="btnIniciar" />
        <p>
          Eres un paciente ¿Y no tienes una cuenta?
          <a class="link" href="/registro"> Regístrate ahora </a>
        </p>
      </div>
    </div>
  </form>
</div>