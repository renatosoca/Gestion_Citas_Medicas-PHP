<?php
    namespace Model;

    class Medico extends ActiveRecord{
        protected static $tabla = 'medico';
        protected static $columnasDB  = ['id', 'ID_Especialidad', 'Nombre', 'Ape_Paterno', 'Ape_Materno', 'Genero', 'T_Doc', 'Nro_Doc', 'Telefono', 'Correo', 'Contraseña', 'Usuario', 'Fecha_Creacion', 'Estado'];

        public $id;
        public $ID_Especialidad;
        public $Nombre;
        public $Ape_Paterno;
        public $Ape_Materno;
        public $Genero;
        public $T_Doc;
        public $Nr_Doc;
        public $Telefono;
        public $Correo;
        public $Contraseña;
        public $Usuario;
        public $Fecha_Creacion;
        public $Estado;

        public function __construct($args = []) {
            $this->id = $args['id'] ?? null;
            $this->ID_Especialidad = $args['ID_Especialidad'] ?? '';
            $this->Nombre = $args['Nombre'] ?? '';
            $this->Ape_Paterno = $args['Ape_Paterno'] ?? '';
            $this->Ape_Materno = $args['Ape_Materno'] ?? '';
            $this->Edad = $args['Edad'] ?? '';
            $this->Genero = $args['Genero'] ?? '';
            $this->T_Doc = $args['T_Doc'] ?? '';
            $this->Nr_Doc = $args['Nr_Doc'] ?? '';
            $this->Telefono = $args['Telefono'] ?? '';
            $this->Correo = $args['Correo'] ?? '';
            $this->Contraseña = $args['Contraseña'] ?? '';
            $this->Usuario = $args['Usuario'] ?? '';
            $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? '';
            $this->Estado = $args['Estado'] ?? '';
        }
    }