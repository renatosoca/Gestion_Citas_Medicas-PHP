<?php
    namespace Model;


    class DetalleMedico extends ActiveRecord{

        protected static $tabla = 'detallemedico';
        protected static $columnasDB  = ['id', 'ID_Cita', 'Diagnostico', 'Descripcion'];

        public $id;
        public $Diagnostico;
        public $ID_Cita;
        public $Descripcion;

        public function __construct( $args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->Diagnostico = $args['Diagnostico'] ?? '';
            $this->Descripcion = $args['Descripcion'] ?? '';
            $this->ID_Cita = $args['ID_Cita'] ?? '';
        }

        public function Registrar() {

            $query = "INSERT INTO " . self::$tabla . " (Diagnostico, Descripcion,ID_Cita) VALUES 
                                                        ('$this->Diagnostico','$this->Descripcion','$this->ID_Cita')";
            $resultado = self::$db->query($query);

            
            return $resultado;
        }

    }