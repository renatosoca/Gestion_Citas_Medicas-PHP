<?php

use App\Core\Router;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\Speciality;

class AdminAppointmentController {
  public static function appointment() {
    $especialidades = Speciality::findAll('status', 'active');
    $medicos = Doctor::findAll('status', 'active');
    $horarios = Schedule::findAll('status', 'active');
    $pacientes = Patient::findAll('status', 'active');
    $citaMostrar = Appointment::findAll('status', 'programmed');

    foreach ($citaMostrar as $row) {
      $paciente = Patient::findById($row->patient_id);
      $row->NombrePaciente = $paciente->name . " " . $paciente->pat_lastname;
      $row->DNIPaciente = $paciente->Nr_Doc;

      $medico = Doctor::findById($row->ID_Medico);
      $row->NombreMedico = $medico->Nombre . " " . $medico->pat_lastname;

      $horario = Schedule::findById($row->ID_Horario);
      $row->Fecha_Cita = $horario->Fecha;
      $row->Hora_Cita = $horario->Hora;
    }

    Router::render('admin/citas/index', 'layout-admin', [
      'especialidades' => $especialidades,
      'medicos' => $medicos,
      'horarios' => $horarios,
      'pacientes' => $pacientes,
      'citaMostrar' => $citaMostrar,
    ]);
  }
  
  public static function registrarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $auth = new Appointment($_POST['cita']);
      $resultado = $auth->save();

      if ($resultado) {
        $horario = Schedule::findById($_POST['ID_Horario']);
        $horario->CambiarEstadoHorario();

        header('Location: /admin/citas');
      }
    }
  }
  
  public static function reprogramarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $auth = new appointment($_POST['cita']);
      $resultado = $auth->save();

      if ($resultado) {
        $cita = Appointment::findById($_POST['idcita']);
        $cita->delete();

        $horario = Schedule::findById($_POST['idhoraRepro']);
        $horario->CambiarEstadoHorario();

        $horarioActivar = Schedule::findById($_POST['idhoraActiva']);
        $horarioActivar->ActivarEstadoHorario();

        header('Location: /admin/citas');
      }
    }
  }
  
  public static function eliminarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $cita = appointment::findById($_POST['idEliminar']);
      $cita->delete();

      $horarioActivar = Schedule::findById($_POST['idHorario']);
      $horarioActivar->ActivarEstadoHorario();

      header('Location: /admin/citas');
    }
  }
}

?>