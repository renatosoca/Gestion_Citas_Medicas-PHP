<?php

namespace Model;

class Medico extends ActiveRecord
{
    protected static $tabla = 'medico';
    protected static $columnasDB  = ['id', 'ID_Especialidad', 'Nombre', 'Ape_Paterno', 'Ape_Materno', 'Genero', 'T_Doc', 'Nro_Doc', 'Telefono', 'Fecha_Creacion', 'Estado'];

    public $id;
    public $ID_Especialidad;
    public $Nombre;
    public $Ape_Paterno;
    public $Ape_Materno;
    public $Genero;
    public $T_Doc;
    public $Nro_Doc;
    public $Telefono;
    public $Fecha_Creacion;
    public $Estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->ID_Especialidad = $args['ID_Especialidad'] ?? '';
        $this->Nombre = $args['Nombre'] ?? '';
        $this->Ape_Paterno = $args['Ape_Paterno'] ?? '';
        $this->Ape_Materno = $args['Ape_Materno'] ?? '';
        $this->Edad = $args['Edad'] ?? '';
        $this->Genero = $args['Genero'] ?? '';
        $this->T_Doc = $args['T_Doc'] ?? '';
        $this->Nro_Doc = $args['Nro_Doc'] ?? '';
        $this->Telefono = $args['Telefono'] ?? '';
        $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? 'GETDATE()';
        $this->Estado = $args['Estado'] ?? 'Activo';
    }

    //INSERT EN LA DATABASE
    public function Registrar($user)
    {
        //Registrar al nuevo medico
        $query = "INSERT INTO " . self::$tabla . " (ID_Especialidad, Nombre, Ape_Paterno, Ape_Materno, Genero, T_Doc, Nro_Doc, Telefono, Estado, id_login) VALUES ('$this->ID_Especialidad', '$this->Nombre', '$this->Ape_Paterno','$this->Ape_Materno', '$this->Genero','$this->T_Doc','$this->Nro_Doc', '$this->Telefono', '$this->Estado', '$user')";

        $resultado = self::$db->query($query);

        return $resultado;
    }
}
