<?php

namespace App\Models;

class Schedule extends Model {
  protected static string $table = 'schedules';
  protected static array $columnsDB  = ['id', 'doctor_id', 'date', 'star_time', 'end_time', 'time_interval', 'time', 'status', 'createdAt'];

  public string $id;
  public string $doctor_id;
  public string $date;
  public string $star_time;
  public string $end_time;
  public string $time_interval;
  public string $time;
  public string $status;
  public string $createdAt;

  public function __construct( $args = []) {
    $this->id = $args['id'] ?? '';
    $this->doctor_id = $args['doctor_id'] ?? '';
    $this->date = $args['date'] ?? '';
    $this->star_time = $args['star_time'] ?? '';
    $this->end_time = $args['end_time'] ?? '';
    $this->time_interval = $args['time_interval'] ?? '';
    $this->time = $args['time'] ?? '';
    $this->status = $args['status'] ?? 'active';
    $this->createdAt = $args['createdAt'] ?? '';
  }

  /* public function Registrar($doctor_id,$Fecha,$star_time,$end_time,$time_interval,$time) {
      //Registrar al nueva timerio
      $this->createdAt="Disponible";

      $query = "INSERT INTO " . self::$tabla . " (doctor_id, Fecha, star_time, end_time, time_interval, time, Estado) VALUES 
                                                  ('$doctor_id','$Fecha','$star_time','$end_time','$time_interval','$time','$this->Estado')";
      $resultado = self::$db->query($query);

      return $resultado;
  } */
}