<?php

namespace Controller;

use Model\Cita;
use Model\DetalleMedico;
use Model\Horario;
use Router\Router;
use Model\Paciente;
use Model\Medico;
use Model\Login;
use Model\RecetaMedica;

class AdminPacientesController
{

    public static function index(Router $router)
    {
        $paciente = Paciente::all();
        $medico = Medico::all();
        $citas = Cita::all();

        $nro_pacientes = sizeof($paciente);
        $nro_medicos = sizeof($medico);
        $nro_citas = sizeof($citas);

        $router->render('admin/index', 'layout-admin', [
            'nro_pacientes' => $nro_pacientes,
            'nro_medicos' => $nro_medicos,
            'nro_citas' => $nro_citas
        ]);
    }

    public static function pacientes(Router $router)
    {
        //Mostramos a los pacientes registrados
        $pacientes = Paciente::allActivos();

        //registrar pacientes
        $router->render('admin/pacientes/index', 'layout-admin', [
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

    public static function historial(Router $router)
    {
        $paciente = Paciente::find($_POST['id']);
        $citas = Cita::findCitaTerminado($paciente->id);

        foreach ($citas as $row) {
            $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $row->DNIPaciente = $paciente->Nr_Doc;

            $medico = Medico::find($row->ID_Medico);
            $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($row->ID_Horario);
            $row->Fecha_Cita = $horario->Fecha;
            $row->Hora_Cita = $horario->Hora;

            $detalleMedico = DetalleMedico::findcita($row->id);
            $row->Diagnostico = $detalleMedico->Diagnostico;
        }

        $router->render('admin/pacientes/historial', 'layout-admin', [
            'citas' => $citas,
        ]);
    }

    public static function detallemedico(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cita = Cita::find($_POST['IDCita']);
            $detalleMedico = DetalleMedico::findcita($_POST['IDCita']);
            $medico = Medico::find($cita->ID_Medico);
            $cita->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;
            $receta = RecetaMedica::findReceta($detalleMedico->id);
        }

        $router->render('admin/pacientes/DetalleMedico', 'layout-admin', [
            'cita' => $cita,
            'detalleMedico' => $detalleMedico,
            'receta' => $receta
        ]);
    }

    public static function pacientesActualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $id = $_POST['id'];
            $paciente = Paciente::find($id);     //CONSULTAR UN PACIENTE

            $mensaje = Paciente::getErrores();
            $args = $_POST['paciente'];
            $paciente->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $paciente->validar();

            //GUARDAR CAMBIOS
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
}
