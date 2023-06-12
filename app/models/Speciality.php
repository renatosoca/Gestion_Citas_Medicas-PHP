<?php
namespace App\Models;

class Speciality extends Model{

  protected static $tabla = 'specialities';
  protected static $columnasDB  = ['id', 'Descripcion', 'Estado'];

  public $id;
  public $Descripcion;
  public $Estado;

  public function __construct( $args = []) {
    $this->id = $args['id'] ?? null;
    $this->Descripcion = $args['Descripcion'] ?? '';
    $this->Estado = $args['Estado'] ?? 'Activo';
  }
}