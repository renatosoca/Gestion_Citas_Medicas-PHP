<!-- AGREGAR ESPECIALIDAD (MODAL) -->
<div class="modal fade" id="agregarEsp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">AGREGAR - ESPECIALIDAD MÉDICA</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container" id="">
                    <form action="/especialidades/agregar" method="POST">
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="especialidad[Descripcion]" placeholder="Especialidad Médica" required>
                        </div>

                        <input type="submit" class="btn btn-danger col-3" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN AGREGAR ESPECIALIDAD (MODAL) -->