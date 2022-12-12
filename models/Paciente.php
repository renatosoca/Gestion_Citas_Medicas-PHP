<?php

    namespace Model;

    class Paciente extends ActiveRecord{
        protected static $tabla = 'paciente';
        protected static $columnasDB  = ['id', 'Nombre', 'Ape_Paterno', 'Ape_Materno','Edad', 'Genero', 'T_Doc', 'Nr_Doc', 'Fecha_Nacimiento', 'Telefono', 'Fecha_Creacion', 'Estado'];

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

        public function __construct($args = []) {
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
        }

        public function validar() {
            if (!$this->Nombre) {
                self::$errores[] = 'El nombre es obligatorio';
            }
            if (!$this->Ape_Paterno) {
                self::$errores[] = 'Apellido es obligatorio';
            }

            return self::$errores;
        }

        /* public function Registrar() {

            //Registrar al nuevo paciente

            $this->Estado="Activo";

            $query = "INSERT INTO " . self::$tabla . " (Nombre, Ape_Paterno, Ape_Materno, Edad, Genero, T_Doc, Nr_Doc, Fecha_Nacimiento, Telefono, Correo, Contraseña, Usuario,Estado) VALUES ('$this->Nombre','$this->Ape_Paterno','$this->Ape_Materno','$this->Edad','$this->Genero','$this->T_Doc','$this->Nr_Doc','$this->Fecha_Nacimiento',
            '$this->Telefono','$this->Correo','$this->Contraseña','$this->Usuario','$this->Estado')"; 

            $resultado = self::$db->query($query);
        } */
        
    }