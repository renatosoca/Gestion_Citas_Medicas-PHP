<?php
namespace App\Models;

class Speciality extends Model {

  protected static string $table = 'specialities';
  protected static array $columnsDB  = ['id', 'description', 'status'];

  public string $id;
  public string $description;
  public string $status;

  public function __construct( $args = []) {
    $this->id = $args['id'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->status = $args['status'] ?? 'active';
  }
}