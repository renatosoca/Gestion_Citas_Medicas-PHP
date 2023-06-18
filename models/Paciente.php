<?php

namespace Model;

use DateTime;

class Paciente extends ActiveRecord
{
    protected static $tabla = 'paciente';
    protected static $columnasDB  = ['id', 'Nombre', 'Ape_Paterno', 'Ape_Materno', 'Edad', 'Genero', 'T_Doc', 'Nr_Doc', 'Fecha_Nacimiento', 'Telefono', 'Fecha_Creacion', 'Estado', 'id_login'];

    public $id;
    public $Nombre;
    public $Ape_Paterno;
    public $Ape_Materno;
    public $Edad;
    public $Genero;
    public $T_Doc;
    public $Nr_Doc;
    public $Fecha_Nacimiento;
    public $Telefono;
    public $Fecha_Creacion;
    public $Estado;
    public $id_login;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->Nombre = $args['Nombre'] ?? '';
        $this->Ape_Paterno = $args['Ape_Paterno'] ?? '';
        $this->Ape_Materno = $args['Ape_Materno'] ?? '';
        $this->Edad = $args['Edad'] ?? '';
        $this->Genero = $args['Genero'] ?? '';
        $this->T_Doc = $args['T_Doc'] ?? '';
        $this->Nr_Doc = $args['Nr_Doc'] ?? '';
        $this->Fecha_Nacimiento = $args['Fecha_Nacimiento'] ?? '';
        $this->Telefono = $args['Telefono'] ?? '';
        $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? '';
        $this->Estado = $args['Estado'] ?? 'Activo';
        $this->id_login = $args['id_login'] ?? '';
    }

    public function validar()
    {
        if (!$this->Nombre) {
            self::$errores[] = 'El nombre es obligatorio';
        }
        if (!$this->Ape_Paterno) {
            self::$errores[] = 'Apellido es obligatorio';
        }

        return self::$errores;
    }

    //INSERT EN LA DATABASE
    public function Registrar($user)
    {
        //Registrar al nuevo paciente
        $date = date('Y-m-d');
       
        $query = "INSERT INTO " . self::$tabla . " (Nombre, Ape_Paterno, Ape_Materno, Edad, Genero, T_Doc, Nr_Doc, Fecha_nacimiento, Telefono, Estado, id_login) VALUES ( '$this->Nombre', '$this->Ape_Paterno','$this->Ape_Materno', '$this->Edad', '$this->Genero','$this->T_Doc','$this->Nr_Doc', '$this->Fecha_Nacimiento', '$this->Telefono', '$this->Estado', '$user')";
        
        $resultado = self::$db->query($query);

        return $resultado;
    }
}
