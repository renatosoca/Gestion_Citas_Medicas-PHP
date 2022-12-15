<?php

namespace Controller;

use Model\Especialidades;
use Router\Router;

class AdminEspecialidadController
{
    public static function especialidades(Router $router)
    {
        $especialidades = Especialidades::allActivos();

        $router->render('admin/especialidades/index', 'layout-admin', [
            'especialidades' => $especialidades
        ]);
    }

    public static function especialidadAgregar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $especialidad = new Especialidades($_POST['especialidad']);
            $mensaje = $especialidad->validar();

            if (empty($mensaje)) {
                //REGISTRAR ESPECIALIDAD
                $resultado = $especialidad->save();

                if ($resultado) {
                    header('Location: /admin/especialidades');
                }
            }
        }
    }

    public static function especialidadActualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $id = $_POST['id'];
            $paciente = Especialidades::find($id);
            
            $mensaje = Especialidades::getErrores();
            $args = $_POST['especialidad'];
            $paciente->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $paciente->validar();

            //GUARDAS CAMBIOS
            if (empty($mensaje)) {
                $paciente->save();
                header('Location: /admin/especialidades');
            }
        }
    }

    public static function especialidadEliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $medico = Especialidades::find($id);
                    $medico->CambiarEstado();
                    header('Location: /admin/especialidades');
                }
            }
        }
    }
}