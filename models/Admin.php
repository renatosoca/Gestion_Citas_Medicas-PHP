<?php
    namespace Model;

    class Admin {
        protected static $tabla = 'usuario';
        protected static $columnasDB  = ['id', 'email', 'pass'];

        public $id;
        public $email;
        public $pass;

        public function __construct($args = []) {
            $this->id = $args['id'] ?? null;
            $this->email = $args['email'] ?? '';
            $this->pass = $args['pass'] ?? '';
        }
    }