<?php

namespace Controller;

use Model\Especialidades;
use Model\Horario;
use Router\Router;
use Model\Medico;
use Model\Login;

class AdminMedicosController
{
    //Listado de 
    public static function medicos(Router $router)
    {
        $medicos = Medico::allActivos();
        $especialidades = Especialidades::allActivos();
        foreach ($medicos as $row) {
            $Especialidad = Especialidades::find($row->ID_Especialidad);
            $row->ID_Especialidad = $Especialidad->Descripcion;
        }

        $router->render('admin/medicos/index', 'layout-admin', [
            'medicos' => $medicos,
            'especialidades' => $especialidades
        ]);
    }

    //AGREGAR MEDICOS   => Falta solucionar el TIPO_USUARIO
    public static function medicoAgregar()
    {
        $medico = new Medico();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Login($_POST['usuario']);
            $email = obtenerEmail();

            $medico = new Medico($_POST['medico']);
            $mensaje = $medico->validar();
            if (empty($mensaje)) {
                //GUARDAR USUARIO
                $resultado = $usuario->insert();

                //BUSCAR USUARIO
                $user = $usuario->searchUser($email);
                if ($resultado) {
                    //REGISTRAR MEDICO
                    $result = $medico->Registrar($user->id);
                    header('Location: /admin/medicos');
                }
            }
        }
    }

    public static function HorarioMedico(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $medico = Medico::find($_POST['id']);

            if (isset($_POST['Fecha'])) {

                $fecha = $_POST['Fecha'];
                $Hora_Inicio = $_POST['Hora_Inicio'];
                $TiempoAtencion = $_POST['TiempoAtencion'];
                $Pacientes = $_POST['Pacientes'];

                $Hora_Inicio = date($Hora_Inicio);

                $Hora_Fin = $Hora_Inicio;

                for ($i = 0; $i < $Pacientes; $i++) {

                    $Hora_Fin = strtotime('+' . $TiempoAtencion . ' minute', strtotime($Hora_Fin));
                    $Hora_Fin = date('H:i:s', $Hora_Fin);
                }

                $Hora = $Hora_Inicio;

                for ($i = 0; $i < $Pacientes; $i++) {

                    $horario = new Horario();
                    $horario->Registrar($medico->id, $fecha, $Hora_Inicio, $Hora_Fin, $TiempoAtencion, $Hora);

                    $Hora = strtotime('+' . $TiempoAtencion . ' minute', strtotime($Hora));
                    $Hora = date('H:i:s', $Hora);
                }

                $router->render('admin/medicos/horarioMedico', 'layout-admin', [

                    'medico' => $medico,

                ]);
            }

            $router->render('admin/medicos/horarioMedico', 'layout-admin', [

                'medico' => $medico,

            ]);
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
                header('Location: /admin/medicos');
            }
        }
    }

    //ELIMINAR MEDICO
    public static function medicoEliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $medico = Medico::find($id);
                    $medico->CambiarEstado();
                    header('Location: /admin/medicos');
                }
            }
        }
    }
}
