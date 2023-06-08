<?php
    namespace Model;

    class RecetaMedica extends ActiveRecord{

        protected static $tabla = 'recetamedica';
        protected static $columnasDB  = ['ID_DetalleMedico', 'Anotacion', 'Descripcion'];

        public $ID_DetalleMedico;
        public $Anotacion;
        public $Descripcion;

        public function __construct( $args = [])
        {
            $this->ID_DetalleMedico = $args['ID_DetalleMedico'] ?? '';
            $this->Anotacion = $args['Anotacion'] ?? '';
            $this->Descripcion = $args['Descripcion'] ?? '';
        }

        public function Registrar($ID_DetalleMedico,$Anotacion,$Descripcion) {

            $query = "INSERT INTO " . self::$tabla . " (ID_DetalleMedico, Anotacion,Descripcion) VALUES 
                                                        ('$ID_DetalleMedico','$Anotacion','$Descripcion')";
            $resultado = self::$db->query($query);

            
            return $resultado;
        }

    }