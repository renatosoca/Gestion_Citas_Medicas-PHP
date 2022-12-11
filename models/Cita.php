<?php
    namespace Model;

    use Router\Router;

    class Cita extends ActiveRecord{

        protected static $tabla = 'cita';
        protected static $columnasDB  = ['id', 'ID_Paciente', 'ID_Medico', 'Fecha_Cita', 'Area', 'Hora_Cita', 'Fecha_Creacion', 'Estado'];

        public $id;
        public $ID_Paciente;
        public $ID_Medico;
        public $Fecha_Cita;
        public $Area;
        public $Hora_Cita;
        public $Fecha_Creacion;
        public $Estado;


        public function __construct( $args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->ID_Paciente = $args['ID_Paciente'] ?? '';
            $this->ID_Medico = $args['ID_Medico'] ?? '';
            $this->Fecha_Cita = $args['Fecha_Cita'] ?? null;
            $this->Area = $args['Area'] ?? '';
            $this->Hora_Cita = $args['Hora_Cita'] ?? '';
            $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? null;
            $this->Estado = $args['Estado'] ?? '';
        }

        public function Registrar() {

            //Registrar al nueva cita
            $this->Estado="Espera";

            $query = "INSERT INTO " . self::$tabla . " (ID_Paciente, ID_Medico, Fecha_Cita, Area, Hora_Cita, Estado) VALUES 
                                                        ('$this->ID_Paciente','$this->ID_Medico','$this->Fecha_Cita','$this->Area','$this->Hora_Cita','$this->Estado')";
            $resultado = self::$db->query($query);

            return $resultado;
        }

    }