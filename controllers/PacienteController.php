<?php

namespace Controller;

use Router\Router;
use Model\Cita;
use Model\Paciente;
use Model\Medico;
use Model\Horario;
use Model\DetalleMedico;
use Model\Especialidades;
use Model\RecetaMedica;

class PacienteController
{

    public static function index(Router $router)
    {
        $sesion = $_SESSION['id'];

        $paciente = Paciente::findLogin($sesion);
        $horarios = Horario::allDisponibles();
        $especialidades = Especialidades::allActivos();
        $medicos = Medico::allActivos();

        $citas = Cita::findCitaEspera($paciente->id);

        foreach ($citas as $row) {
            $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $row->DNIPaciente = $paciente->Nr_Doc;

            $medico = Medico::find($row->ID_Medico);
            $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($row->ID_Horario);
            $row->Fecha_Cita = $horario->Fecha;
            $row->Hora_Cita = $horario->Hora;
        }

        $router->render('pacientes/index', 'layout-paciente', [
            'paciente' => $paciente,
            'citas' => $citas,
            'horarios' => $horarios,
            'especialidades' => $especialidades,
            'medicos' => $medicos
        ]);
    }

    public static function citaspasadas(Router $router)
    {
        $sesion = $_SESSION['id'];

        $paciente = Paciente::findLogin($sesion);
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

        $router->render('pacientes/citasPasadas', 'layout-paciente', [
            'sesion' => $sesion,
            'citas' => $citas
        ]);
    }

    public static function registrarcita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Cita($_POST['cita']);
            $resultado = $auth->Registrar();

            if ($resultado) {
                $horario = Horario::find($_POST['ID_Horario']);
                $horario->CambiarEstadoHorario();

                header('Location: /paciente');
            }
        }
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

        $router->render('pacientes/DetalleMedico', 'layout-paciente', [

            'cita' => $cita,
            'detalleMedico' => $detalleMedico,
            'receta' => $receta,

        ]);
    }

    public static function reprogramarcita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Cita($_POST['cita']);
            $resultado = $auth->Registrar();

            if ($resultado) {

                $cita = Cita::find($_POST['idcita']);
                $cita->delete();

                $horario = Horario::find($_POST['idhoraRepro']);
                $horario->CambiarEstadoHorario();

                $horarioActivar = Horario::find($_POST['idhoraActiva']);
                $horarioActivar->ActivarEstadoHorario();

                header('Location: /paciente');
            }
        }
    }

    public static function eliminarcita()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $cita = Cita::find($_POST['idEliminar']);
            $cita->delete();

            $horarioActivar = Horario::find($_POST['idHorario']);
            $horarioActivar->ActivarEstadoHorario();

            header('Location:  /paciente');
        }
    }
}
