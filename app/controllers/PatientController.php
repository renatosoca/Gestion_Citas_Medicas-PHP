<?php

namespace App\Controllers;

use App\Core\Router;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\Schedule;
use App\Models\Speciality;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;

class PatientController {

  public static function index() {
    $isPatient = isAuth();
    if (!$isPatient) return Router::redirect('/login');
    
    $session = $_SESSION['patient_id'];
    $patient = Patient::findById( $session );
    
    if (empty($patient)) return Router::redirect('/login');
    $schedules = Schedule::findAll();
    $specialities = Speciality::findAll('status', 'active');
    $doctors = Doctor::findAll('status', 'active');

    $appointments = Appointment::findJoins(['patient_id' => $patient->id, 'status' => 'programmed']);

    foreach ($appointments as $row) {
      $row->patientName = $patient->name . " " . $patient->pat_lastname;
      $row->patientDocNumber = $patient->doc_number;

      $medico = Doctor::findById($row->doctor_id);
      $row->doctorName = $medico->name . " " . $medico->pat_lastname;

      $schedule = Schedule::findById($row->schedule_id);
      $row->appointment_date = $schedule->date;
      $row->appointment_time = $schedule->time;
    }

    Router::render('patients/index', 'patientLayout', [
      'title' => 'Portal del Paciente',
      'patient' => $patient,
      'appointments' => $appointments,
      'schedules' => $schedules,
      'specialities' => $specialities,
      'doctors' => $doctors
    ]);

    exit;
  }

  public static function citaspasadas() {
    $isPatient = isAuth();
    if (!$isPatient) return Router::redirect('/login');
    $session = $_SESSION['id'];

    $patient = Patient::findById($session);
    $citas = Appointment::findById($patient->id);

    foreach ($citas as $row) {
      $row->NombrePaciente = $patient->Nombre . " " . $patient->Ape_Paterno;
      $row->DNIPaciente = $patient->Nr_Doc;

      $medico = Doctor::findById($row->doctor_id);
      $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

      $horario = Schedule::findById($row->schedule_id);
      $row->Fecha_Cita = $horario->Fecha;
      $row->Hora_Cita = $horario->Hora;

      $detalleMedico = MedicalHistory::findOne('appointment_id',$row->id);
      $row->Diagnostico = $detalleMedico->Diagnostico;
    }

    Router::render('pacientes/citasPasadas', 'layout-paciente', [
      'sesion' => $session,
      'citas' => $citas
    ]);

    exit;
  }

  public static function registrarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $appointment = new Appointment($_POST['cita']);
      $paciente = Patient::findById($appointment->patient_id);
      $medico = Doctor::findById($appointment->doctor_id);
      $horario = Schedule::findById($appointment->schedule_id);
      $login = User::findById($paciente->id_login);
      $resultado = $appointment->save();

      if ($resultado) {
        $horario = Schedule::findById($_POST['ID_Horario']);
        $horario->CambiarEstadoHorario();

        $mail = new PHPMailer();

        //CONFIG SMTP
        conexionEmail($mail);

        //CONTENIDO DEL EMAIL Y HABILITAR HTML
        $mensaje = 'Se a registrado tu cita correctamente !';
        configEnvioEmail($mail, $login->email, $paciente->name, $mensaje);

        //DEFINIR CONTENIDO
        $contenido = '<html>';
        $contenido .= '<p>Hola ' . $paciente->Nombre . ' ' . $paciente->Ape_Paterno . ' !' . '</p>';
        $contenido .= '<p>Detalles de la programación de tu cita</p>';
        $contenido .= '<p>La especialidad que escogiste: ' . $appointment->area . '</p>';
        $contenido .= '<p>Tu médico de cabezera es: ' . $medico->Nombre . ' ' . $medico->Ape_Paterno . '</p>';
        $contenido .= '<p>Fecha de tu cita: ' . $horario->Fecha . '</p>';
        $contenido .= '<p>Hora de tu cita: ' . $horario->Hora . '</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;
        $mail->AltBody = 'Texto de relleno';

        //ENVIAR EMAIL
        if ($mail->send()) {
            header('Location: /paciente');
        } else {
            echo "Ocurrio un Error!";
        }
      }
    }
  }

  public static function detallemedico() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $cita = Appointment::findById($_POST['IDCita']);
      $detalleMedico = MedicalHistory::findOne('appointment_id',$_POST['IDCita']);
      $medico = Doctor::findById($cita->doctor_id);
      $cita->NombreMedico = $medico->name . " " . $medico->pat_lastname;
      $receta = Prescription::findOne('medicalHistory_id', $detalleMedico->id);
    }

    Router::render('pacientes/DetalleMedico', 'layout-paciente', [
      'title' => 'Detalle de Médico',
      'cita' => $cita,
      'detalleMedico' => $detalleMedico,
      'receta' => $receta,

    ]);

    exit;
  }

  public static function reprogramarcita() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $appointment = new Appointment($_POST['cita']);
      $resultado = $appointment->save();
      $paciente = Patient::findById($appointment->patient_id);
      $horario = Schedule::findById($appointment->schedule_id);
      $login = User::findById($paciente->id_login);

      if ($resultado) {

        $cita = Appointment::findById($_POST['idcita']);
        $cita->delete();

        $horario = Schedule::findById($_POST['idhoraRepro']);
        $horario->CambiarEstadoHorario();

        $horarioActivar = Schedule::findById($_POST['idhoraActiva']);
        $horarioActivar->ActivarEstadoHorario();

        if ($horarioActivar) {
          $mail = new PHPMailer();

          //CONFIG SMTP
          conexionEmail($mail);

          //CONTENIDO DEL EMAIL Y HABILITAR HTML
          $mensaje = 'Se a reprogramado tu cita correctamente !';
          configEnvioEmail($mail, $login->email, $paciente->name, $mensaje);

          //DEFINIR CONTENIDO
          $contenido = '<html>';
          $contenido .= '<p>Hola ' . $paciente->Nombre . ' ' . $paciente->Ape_Paterno . ' !' . '</p>';
          $contenido .= '<p>Detalles de la reprogramación de tu cita</p>';
          $contenido .= '<p>La fecha actualizada de tu cita: ' . $horario->Fecha . '</p>';
          $contenido .= '<p>La Hora actualizada de tu cita: ' . $horario->Hora . '</p>';
          $contenido .= '</html>';

          $mail->Body = $contenido;
          $mail->AltBody = 'Texto de relleno';

          //ENVIAR EMAIL
          if ($mail->send()) {
            header('Location: /paciente');
          } else {
            echo "Ocurrio un Error!";
          }
        }
      }
    }
  }

  public static function eliminarcita() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $cita = Appointment::findById($_POST['idEliminar']);
      $cita->delete();

      $horarioActivar = Schedule::findById($_POST['idHorario']);
      $horarioActivar->ActivarEstadoHorario();

      header('Location:  /patient');
    }
  }
}
