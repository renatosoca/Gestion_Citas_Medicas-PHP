<?php

namespace App\Models;

class Patient extends Model {
  protected static $tabla = 'patients';
  protected static $columnasDB  = ['id', 'name', 'pat_lastname', 'mat_lastname', 'DOB', 'gender', 'doc_type', 'doc_number', 'phone', 'status', 'createdAt'];

  public $id;
  public $name;
  public $pat_lastname;
  public $mat_lastname;
  public $DOB;
  public $gender;
  public $doc_type;
  public $doc_number;
  public $phone;
  public $status;
  public $createdAt;

  public function __construct($args = []) {
    $this->id = $args['id'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->pat_lastname = $args['pat_lastname'] ?? '';
    $this->mat_lastname = $args['mat_lastname'] ?? '';
    $this->DOB = $args['DOB'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->doc_type = $args['doc_type'] ?? '';
    $this->doc_number = $args['doc_number'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->status = $args['status'] ?? 'patient';
    $this->createdAt = $args['createdAt'] ?? 'CURRENT_TIMESTAMP';
  }

  public function validar() {
    if (!$this->name) {
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }
    if (!$this->pat_lastname) {
      self::$alerts['error'][] = 'Apellido es obligatorio';
    }

    return self::$alerts;
  }

  //INSERT EN LA DATABASE
  public function Registrar($user) {
    //Registrar al nuevo paciente
    $date = date('Y-m-d');
    
    $query = "INSERT INTO " . self::$tabla . " (name, pat_lastname, mat_lastname, DOB, gender, doc_type, doc_number, phone, status, Estado, id_login) VALUES ( '$this->name', '$this->pat_lastname','$this->mat_lastname', '$this->DOB', '$this->gender','$this->doc_type','$this->doc_number', '$this->phone', '$this->status', '$user')";
    
    $resultado = self::$db->query($query);

    return $resultado;
  }
}
