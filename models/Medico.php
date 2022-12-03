<?php
    namespace Model;

    class Medico extends ActiveRecord{
        protected static $tabla = 'medico';
        protected static $columnasDB  = ['id', 'nombres', 'apell'];

        public $id;
        public $nombres;
        public $apell;

        public function __construct($args = []) {
            $this->id = $args['id'] ?? null;
            $this->nombres = $args['nombres'] ?? '';
            $this->apell = $args['apell'] ?? '';
        }
    }