<?php

namespace App\Models;

class Prescription extends Model{

  protected static $table = 'prescriptions';
  protected static $columnsDB  = ['id', 'medicalHistory_id', 'description'];

  public string $id;
  public string $medicalHistory_id;
  public string $description;
  public string $Descripcion;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->medicalHistory_id = $args['medicalHistory_id'] ?? '';
    $this->description = $args['description'] ?? '';
  }

  /* public function Registrar($ID_DetalleMedico,$Anotacion,$Descripcion) {

    $query = "INSERT INTO " . self::$table . " (ID_DetalleMedico, Anotacion,Descripcion) VALUES 
                                                ('$ID_DetalleMedico','$Anotacion','$Descripcion')";
    $resultado = self::$db->query($query);

    
    return $resultado;
  } */

}