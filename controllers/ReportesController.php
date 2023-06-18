<?php

namespace Controller;

use Model\Especialidades;
use Model\Medico;
use Model\Paciente;
use Router\Router;

class ReportesController
{
    public static function pacienteReporte(Router $router)
    {
        if ($_SESSION['usuario'] == 1) {
            $paciente = Paciente::all();
            header("Content-Type: application/xls; charset=iso-8859-1");
            header("Content-Disposition: attachment; filename=datos-paciente.xls");
        } else {
            header('Location: /');
        }

        $router->render('reports/excel_paciente', 'layout-reporte', [
            'paciente' => $paciente
        ]);
    }

    public static function medicoReporte(Router $router)
    {
        if ($_SESSION['usuario'] == 1) {
            $medicos = Medico::allActivos();
            $especialidades = Especialidades::allActivos();
            foreach ($medicos as $row) {
                $Especialidad = Especialidades::find($row->ID_Especialidad);
                $row->ID_Especialidad = $Especialidad->Descripcion;
            }
            header("Content-Type: application/xls; charset=iso-8859-1");
            header("Content-Disposition: attachment; filename=datos-medicos.xls");
        } else {
            header('Location: /');
        }

        $router->render('reports/excel_medico', 'layout-reporte', [
            'medico' => $medicos,
            'especialidad' => $especialidades
        ]);
    }
}
