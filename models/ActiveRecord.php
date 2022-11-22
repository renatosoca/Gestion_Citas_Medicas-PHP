<?php
    namespace Model;

    class ActiveRecord {
        //BASE DE DATOS
        protected static $db;
        protected static $columnasDB = [];
        protected static $tabla = '';
        
        //PARA MANEJAR LOS ERRORES 
        protected static $errores = [];

        //CONEXION DATABASE
        public static function setDB($database){
            self::$db = $database;
        }
    }