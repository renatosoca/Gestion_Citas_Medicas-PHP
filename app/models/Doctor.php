<?php

namespace App\Models;

class Doctor extends Model {
  protected static string $table = 'doctors';
  protected static array $columnsDB  = ['id', 'name', 'pat_lastname', 'mat_lastname', 'speciality_id', 'gender', 'doc_type', 'doc_number', 'phone', 'status', 'createdAt'];

  public string $id;
  public string $name;
  public string $pat_lastname;
  public string $mat_lastname;
  public string $speciality_id;
  public string $gender;
  public string $doc_type;
  public string $doc_number;
  public string $phone;
  public string $status;
  public string $createdAt;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->pat_lastname = $args['pat_lastname'] ?? '';
    $this->mat_lastname = $args['mat_lastname'] ?? '';
    $this->speciality_id = $args['speciality_id'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->doc_type = $args['doc_type'] ?? 'DNI';
    $this->doc_number = $args['doc_number'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->status = $args['status'] ?? 'active';
    $this->createdAt = $args['createdAt'] ?? '';
  }

  /* public function Registrar($user) {
      //Registrar al nuevo medico
      $query = "INSERT INTO " . self::$tabla . " (ID_Especialidad, Nombre, mat_lastname, Ape_Materno, Genero, T_Doc, Nro_Doc, Telefono, Estado, id_login) VALUES ('$this->ID_Especialidad', '$this->Nombre', '$this->Ape_Paterno','$this->Ape_Materno', '$this->Genero','$this->T_Doc','$this->Nro_Doc', '$this->Telefono', '$this->Estado', '$user')";

      $resultado = self::$db->query($query);

      return $resultado;
  } */
}
