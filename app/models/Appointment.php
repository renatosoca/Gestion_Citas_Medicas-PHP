<?php
namespace App\Models;


class Appointment extends Model {

  protected static string $table = 'appointments';
  protected static array $columnasDB  = ['id', 'patient_id', 'doctor_id', 'schedule_id', 'area', 'status'];

  public string $id;
  public string $patient_id;
  public string $doctor_id;
  public string $schedule_id;
  public string $area;
  public string $status;

  public string $appoitnement_date;
  public string $appointment_time;
  public string $patientName;
  public string $patientDocnumber;
  public string $doctorName;
  public string $diagnosis;
  public string $age;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->patient_id = $args['patient_id'] ?? '';
    $this->doctor_id = $args['doctor_id'] ?? '';
    $this->schedule_id = $args['schedule_id'] ?? '';
    $this->area = $args['area'] ?? '';
    $this->status = $args['status'] ?? 'programmed';

    $this->appoitnement_date = $args['appoitnement_date'] ?? '';
    $this->appointment_time = $args['appointment_time'] ?? '';
    $this->patientName = $args['patientName'] ?? '';
    $this->doctorName = $args['doctorName'] ?? '';
    $this->patientDocnumber = $args['patientDocnumber'] ?? '';
    $this->diagnosis = $args['diagnosis'] ?? '';
    $this->age = $args['age'] ?? '';
  }

  /* public function Registrar() {

    //Registrar a la nueva cita
    $query = "INSERT INTO " . self::$tabla . " (patient_id, doctor_id, schedule_id, area, createdAt) VALUES 
                                                ('$this->patient_id','$this->doctor_id','$this->schedule_id','$this->area','$this->createdAt')";
    $resultado = self::$db->query($query);

    return $resultado;
  } */
}