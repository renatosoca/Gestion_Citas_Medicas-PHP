<?php
namespace App\Models;


class Appointment extends Model {

  protected static string $table = 'appointments';
  protected static array $columnasDB  = ['id', 'patient_id', 'doctor_id', 'schedule_id', 'area', 'status', 'createdAt'];

  public string $id;
  public string $patient_id;
  public string $doctor_id;
  public string $schedule_id;
  public string $area;
  public string $status;
  public string $createdAt;


  public $Fecha_Cita;
  public $Hora_Cita;
  public $NombrePaciente;
  public $DNIPaciente;
  public $NombreMedico;
  public $Diagnostico;
  public $Edad;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->patient_id = $args['patient_id'] ?? '';
    $this->doctor_id = $args['doctor_id'] ?? '';
    $this->schedule_id = $args['schedule_id'] ?? '';
    $this->area = $args['area'] ?? '';
    $this->status = $args['status'] ?? 'programmed';
    $this->createdAt = $args['createdAt'] ?? '';

    $this->Fecha_Cita = $args['Fecha_Cita'] ?? '';
    $this->Hora_Cita = $args['Hora_Cita'] ?? '';
    $this->NombrePaciente = $args['NombrePaciente'] ?? '';
    $this->NombreMedico = $args['NombreMedico'] ?? '';
    $this->DNIPaciente = $args['DNIPaciente'] ?? '';
    $this->Diagnostico = $args['Diagnostico'] ?? '';
    $this->Edad = $args['Edad'] ?? '';
  }

  /* public function Registrar() {

    //Registrar a la nueva cita
    $query = "INSERT INTO " . self::$tabla . " (patient_id, doctor_id, schedule_id, area, createdAt) VALUES 
                                                ('$this->patient_id','$this->doctor_id','$this->schedule_id','$this->area','$this->createdAt')";
    $resultado = self::$db->query($query);

    return $resultado;
  } */
}