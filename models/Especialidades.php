<?php
    namespace Model;

    use Router\Router;

    class Especialidades extends ActiveRecord{

        protected static $tabla = 'especialidad';
        protected static $columnasDB  = ['id', 'Descripcion', 'Estado'];

        public $id;
        public $Descripcion;
        public $Estado;

        public function __construct( $args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->Descripcion = $args['Descripcion'] ?? '';
            $this->Estado = $args['Estado'] ?? 'Activo';
        }
    }