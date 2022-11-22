<?php
    namespace Model;

    class Doctores {
        protected static $tabla = 'doctor';
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