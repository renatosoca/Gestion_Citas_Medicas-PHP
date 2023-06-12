<?php

class AdminAppointmentController {
  public static function appointment() {
    if ($_SESSION['usuario'] == 1) {
      $especialidades = Especialidades::allActivos();
      $medicos = Medico::allActivos();
      $horarios = Horario::allDisponibles();
      $pacientes = Paciente::allActivos();
      $citaMostrar = Cita::allEspera();

      foreach ($citaMostrar as $row) {
        $paciente = Paciente::find($row->ID_Paciente);
        $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
        $row->DNIPaciente = $paciente->Nr_Doc;

        $medico = Medico::find($row->ID_Medico);
        $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

        $horario = Horario::find($row->ID_Horario);
        $row->Fecha_Cita = $horario->Fecha;
        $row->Hora_Cita = $horario->Hora;
      }
    } else {
      header('Location: /');
    }

    $router->render('admin/citas/index', 'layout-admin', [
      'especialidades' => $especialidades,
      'medicos' => $medicos,
      'horarios' => $horarios,
      'pacientes' => $pacientes,
      'citaMostrar' => $citaMostrar,
    ]);
  }
  
  public static function registrarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $auth = new Cita($_POST['cita']);
      $resultado = $auth->Registrar();

      if ($resultado) {
        $horario = Horario::find($_POST['ID_Horario']);
        $horario->CambiarEstadoHorario();

        header('Location: /admin/citas');
      }
    }
  }
  
  public static function reprogramarcita() {
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

        header('Location: /admin/citas');
      }
    }
  }
  
  public static function eliminarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $cita = Cita::find($_POST['idEliminar']);
      $cita->delete();

      $horarioActivar = Horario::find($_POST['idHorario']);
      $horarioActivar->ActivarEstadoHorario();

      header('Location: /admin/citas');
    }
  }
}

?>