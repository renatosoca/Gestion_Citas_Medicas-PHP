<?php

namespace Controller;

use Router\Router;
use Model\Cita;
use Model\Paciente;
use Model\Medico;
use Model\Horario;
use Model\DetalleMedico;
use Model\Especialidades;
use Model\Login;
use Model\RecetaMedica;
use PHPMailer\PHPMailer\PHPMailer;

class PatientController {

    public static function index(Router $router) {
      $sesion = $_SESSION['id'];
      $paciente = Paciente::findLogin($sesion);
      
      if ($paciente) {
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
      } else {
        header('Location: /');
      }

      $router->render('pacientes/index', 'layout-paciente', [
        'paciente' => $paciente,
        'citas' => $citas,
        'horarios' => $horarios,
        'especialidades' => $especialidades,
        'medicos' => $medicos
      ]);
    }

    public static function citaspasadas() {
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

    public static function registrarcita() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $auth = new Cita($_POST['cita']);
        $paciente = Paciente::find($auth->ID_Paciente);
        $medico = Medico::find($auth->ID_Medico);
        $horario = Horario::find($auth->ID_Horario);
        $login = Login::find($paciente->id_login);
        $resultado = $auth->Registrar();

        if ($resultado) {
          $horario = Horario::find($_POST['ID_Horario']);
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
          $contenido .= '<p>La especialidad que escogiste: ' . $auth->Area . '</p>';
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

    public static function reprogramarcita() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $auth = new Cita($_POST['cita']);
        $resultado = $auth->Registrar();
        $paciente = Paciente::find($auth->ID_Paciente);
        $horario = Horario::find($auth->ID_Horario);
        $login = Login::find($paciente->id_login);

        if ($resultado) {

          $cita = Cita::find($_POST['idcita']);
          $cita->delete();

          $horario = Horario::find($_POST['idhoraRepro']);
          $horario->CambiarEstadoHorario();

          $horarioActivar = Horario::find($_POST['idhoraActiva']);
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

        $cita = Cita::find($_POST['idEliminar']);
        $cita->delete();

        $horarioActivar = Horario::find($_POST['idHorario']);
        $horarioActivar->ActivarEstadoHorario();

        header('Location:  /paciente');
      }
    }
}
