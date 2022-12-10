<?php

namespace Controller;

use Model\Especialidades;
use Router\Router;
use Model\Paciente;
use Model\Medico;
use Model\Login;
use Model\Horario;
use Model\Cita;

class AdminController
{

    public static function index(Router $router)
    {

        $paciente = Paciente::allActivos();
        $medico = Medico::allActivos();

        $nrpaci = sizeof($paciente);
        $nrmedi = sizeof($medico);

        $router->renderAdmin('admin/index', [

            'nrpaci' => $nrpaci,
            'nrmedi' => $nrmedi

        ]);
    }

    public static function pacientes(Router $router)
    {
        //Mostramos a los pacientes registrados
        $pacientes = Paciente::allActivos();

        //registrar pacientes
        $router->renderAdmin('admin/pacientes', [
            'pacientes' => $pacientes,
        ]);
    }

    public static function pacientesRegistrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente($_POST['paciente']);
            $usuario = new Login($_POST['usuario']);

            $mensaje = $paciente->validar();
            if (empty($mensaje)) {
                //REGISTRAR PACIENTE
                $resultado = $paciente->save();

                if ($resultado) {
                    //GUARDAR USUARIO
                    $usuario->insert();
                    header('Location: /admin/pacientes');
                }
            }
        }
    }

    public static function pacientesActualizar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $id = $_POST['id'];
            $paciente = Paciente::find($id);     //CONSULTAR UNA PROPIEDAD
            print_r($paciente);
            $mensaje = Paciente::getErrores();
            $args = $_POST['paciente'];
            $paciente->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $paciente->validar();

            //ELIMINAR
            if (empty($mensaje)) {
                $paciente->save();
                header('Location: /admin/pacientes');
            }
        }
    }

    public static function pacientesEliminar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //Cambiar el estado a SUSPENDIDO
                    $paciente = Paciente::find($id);
                    $paciente->CambiarEstado();

                    if ($paciente) {
                        header('Location: /admin/pacientes');
                    }
                }
            }
        }
    }

    //Listado de 
    public static function medicos(Router $router)
    {
        $medicos = Medico::allActivos();
        $especialidades = Especialidades::allActivos();
        foreach ($medicos as $row) {
            $Especialidad = Especialidades::find($row->ID_Especialidad);
            $row->ID_Especialidad = $Especialidad->Descripcion;
        }

        $router->renderAdmin('admin/medicos', [
            'medicos' => $medicos,
            'especialidades' => $especialidades
        ]);
    }

    //AGREGAR MEDICOS   => Falta solucionar el TIPO_USUARIO
    public static function medicoAgregar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $medico = new Medico($_POST['medico']);
            $usuario = new Login($_POST['usuario']);
            $mensaje = $medico->validar();
            if (empty($mensaje)) {
                //REGISTRAR MEDICO
                $resultado = $medico->save();

                if ($resultado) {
                    //GUARDAR USUARIO
                    $usuario->insert();
                    header('Location: /admin/medicos');
                }
            }
        }
    }

    //ACTUALIZAR MEDICOS
    public static function medicoActualizar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $id = $_POST['id'];
            $medico = Medico::find($id);     //CONSULTAR UNA PROPIEDAD
            $mensaje = Medico::getErrores();
            $args = $_POST['medico'];
            $medico->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $medico->validar();

            //ACTUALIZAR
            if (empty($mensaje)) {
                $medico->save();
                header('Location: /medicos/index');
            }
        }
    }

    //ELIMINAR MEDICO
    public static function medicoEliminar()
    {
        //ELIMINAR PROPIEDAD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $medico = Medico::find($id);
                    $medico->CambiarEstado();
                }
            }
        }
    }

    public static function citas(Router $router)
    {

        $especialidades = Especialidades::allActivos();
        $medicos = Medico::allActivos();
        $horarios = Horario::allDisponibles();
        $pacientes = Paciente::allActivos();

        $router->renderAdmin('/admin/citas', [

            'especialidades' => $especialidades,
            'medicos' => $medicos,
            'horarios' => $horarios,
            'pacientes' => $pacientes,
        ]);
    }

    public static function registrarcita()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Cita($_POST['cita']);
            $resultado = $auth->Registrar();

            if ($resultado) {

                $horario = Horario::find($_POST['idhorario']);
                $horario->CambiarEstadoHorario();

                header('Location: /admin/citas');
            }
        }
    }

    public static function especialidades(Router $router)
    {
        $especialidades = Especialidades::all();

        $router->renderAdmin('admin/especialidades', [
            'especialidades' => $especialidades
        ]);
    }

    //FALTA EL MODAL PARA EL ACTUALIZAR
    public static function especialidadActualizar(Router $router)
    {
        $id = Redireccionar('/especialidades/index'); //GET id (Obtenemos el id, si no, nos redirige a otra pagina)
        $especialidad = Especialidades::find($id);      //CONSULTAR UNA PROPIEDAD
        $mensaje = Especialidades::getErrores();     //Para almacenar y luego mostrar los errores de los inputs en el FORM

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $args = $_POST['especialidad'];
            $especialidad->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $especialidad->validar();

            //ACTUALIZAR
            if (empty($mensaje)) {
                $especialidad->guardar();
            }
        }

        $router->render('especialidades/actualizar', [
            //ENVIANDO DATOS
            'especialidad' => $especialidad,
            'mensaje' => $mensaje
        ]);
    }

    public static function especialidadEliminar()
    {
        //ELIMINAR ESPECIALIDAD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $especialidades = Especialidades::find($id);
                    $especialidades->delete();
                    header('Location: /admin/especialidades');
                }
            }
        }
    }
}
