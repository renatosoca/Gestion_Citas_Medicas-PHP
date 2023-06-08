<?php

namespace Controller;


use Router\Router;
use Model\Medico;
use Model\RecetaMedica;
use Model\DetalleMedico;
use Model\Cita;
use Model\Horario;
use Model\Paciente;


class DoctorController
{

    public static function index(Router $router)
    {
        $sesion = $_SESSION['id'];
        $medico = Medico::findLogin($sesion);
        if ($medico) {
            $citas = Cita::findCitaMedico($medico->id);

            $fecha = null;

            if (isset($_POST['fecha'])) {

                $fecha = $_POST['fecha'];
            }

            foreach ($citas as $row) {

                $paciente = Paciente::find($row->ID_Paciente);
                $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
                $row->DNIPaciente = $paciente->Nr_Doc;
                $row->Edad = $paciente->Edad;

                $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

                $horario = Horario::find($row->ID_Horario);
                $row->Fecha_Cita = $horario->Fecha;
                $row->Hora_Cita = $horario->Hora;
            }
        } else {
            header('Location: /');
        }

        $router->render('doctores/index', 'layout-medico', [

            'medico' => $medico,
            'citas' => $citas,
            'fecha' => $fecha,

        ]);
    }

    public static function entrarcita(Router $router)
    {

        $citas = Cita::find($_POST['id']);
        $sesion = $_SESSION['id'];
        $medico = Medico::findLogin($sesion);

        $paciente = Paciente::find($citas->ID_Paciente);
        $citas->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
        $citas->DNIPaciente = $paciente->Nr_Doc;
        $citas->Edad = $paciente->Edad;

        $citas->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

        $horario = Horario::find($citas->ID_Horario);
        $citas->Fecha_Cita = $horario->Fecha;
        $citas->Hora_Cita = $horario->Hora;

        $router->render('doctores/Cita', 'layout-medico', [

            'citas' => $citas,

        ]);
    }

    public static function historia(Router $router)
    {

        $citaVolver = $_POST['volver'];
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

        $router->render('doctores/Historia', 'layout-medico', [
            'citas' => $citas,
            'citaVolver' => $citaVolver,
        ]);
    }

    public static function fichamedica(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $citaVolver = $_POST['volver'];

            $cita = Cita::find($_POST['IDCita']);
            $detalleMedico = DetalleMedico::findcita($_POST['IDCita']);
            $medico = Medico::find($cita->ID_Medico);
            $cita->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;
            $receta = RecetaMedica::findReceta($detalleMedico->id);
        }

        $router->render('doctores/FichaMedica', 'layout-medico', [

            'cita' => $cita,
            'detalleMedico' => $detalleMedico,
            'receta' => $receta,
            'citaVolver' => $citaVolver,

        ]);
    }

    public static function guardarficha(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $detalleMedico = new DetalleMedico($_POST['Detalle']);
            $detalleMedico->Registrar();

            $detalle = DetalleMedico::findcita($_POST['Detalle']['ID_Cita']);
            $receta = new RecetaMedica();

            for ($i = 1; $i <= $_POST['recetanumero']; $i++) {

                $receta->Registrar($detalle->id, $_POST["Anotacion_{$i}"], $_POST["Descripcion_{$i}"]);
            }

            $cita = Cita::find($_POST['Detalle']['ID_Cita']);
            $cita->CambiarEstadoCita();
        }

        $sesion = $_SESSION['id'];

        $medico = Medico::findLogin($sesion);
        $citas = Cita::findCitaMedico($medico->id);

        foreach ($citas as $row) {

            $paciente = Paciente::find($row->ID_Paciente);
            $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $row->DNIPaciente = $paciente->Nr_Doc;
            $row->Edad = $paciente->Edad;

            $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($row->ID_Horario);
            $row->Fecha_Cita = $horario->Fecha;
            $row->Hora_Cita = $horario->Hora;
        }

        $router->render('doctores/index', 'layout-medico', [

            'medico' => $medico,
            'citas' => $citas,

        ]);
    }
}
