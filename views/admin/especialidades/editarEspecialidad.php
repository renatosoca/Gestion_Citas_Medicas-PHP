<!-- EDITAR ESPECIALIDAD (MODAL) -->
<div class="modal fade" id="editarEsp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">EDITAR - ESPECIALIDAD MÉDICA</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container" id="">
                    <form action="/especialidades/actualizar" method="POST">
                        <input type="hidden" name="id" id="id">

                        <div class="row" style="padding: 10px;">
                            <input type="text" name="especialidad[Descripcion]" class="col" id="Descripcion" required>
                        </div>

                        <input type="submit" class="btn btn-warning col-3" value="Editar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN EDITAR ESPECIALIDAD (MODAL) -->