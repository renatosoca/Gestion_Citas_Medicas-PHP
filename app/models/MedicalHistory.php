<?php

namespace App\Models;

class MedicalHistory extends Model {

  protected static string $table = 'medical_histories';
  protected static array $columnsDB  = ['id', 'appointment_id', 'patient_id', 'doctor_id', 'appointment_day', 'diagnosis'];

  public string $id;
  public string $appointment_id;
  public string $patient_id;
  public string $doctor_id;
  public string $appointment_day;
  public string $diagnosis;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->appointment_id = $args['appointment_id'] ?? '';
    $this->patient_id = $args['patient_id'] ?? '';
    $this->doctor_id = $args['doctor_id'] ?? '';
    $this->appointment_day = $args['appointment_day'] ?? '';
    $this->diagnosis = $args['diagnosis'] ?? '';
  }

  /* public function Registrar() {

    $query = "INSERT INTO " . self::$tabla . " (patient_id, Descripcion,appointment_id) VALUES 
                                                ('$this->patient_id','$this->diagnosis','$this->appointment_id')";
    $resultado = self::$db->query($query);

    
    return $resultado;
  } */

}

?>