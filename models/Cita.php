<?php
    namespace Model;

    class Cita extends ActiveRecord{

        protected static $tabla = 'cita';
        protected static $columnasDB  = ['id', 'ID_Paciente', 'ID_Medico', 'ID_Horario', 'Area', 'Fecha_Creacion', 'Estado'];

        public $id;
        public $ID_Paciente;
        public $ID_Medico;
        public $ID_Horario;
        public $Area;
        public $Fecha_Creacion;
        public $Estado;
        public $Fecha_Cita;
        public $Hora_Cita;
        public $NombrePaciente;
        public $DNIPaciente;
        public $NombreMedico;
        public $Diagnostico;

        public function __construct( $args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->ID_Paciente = $args['ID_Paciente'] ?? '';
            $this->ID_Medico = $args['ID_Medico'] ?? '';
            $this->ID_Horario = $args['ID_Horario'] ?? '';
            $this->Area = $args['Area'] ?? '';
            $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? '';
            $this->Estado = $args['Estado'] ?? '';
            $this->Fecha_Cita = $args['Fecha_Cita'] ?? '';
            $this->Hora_Cita = $args['Hora_Cita'] ?? '';
            $this->NombrePaciente = $args['NombrePaciente'] ?? '';
            $this->NombreMedico = $args['NombreMedico'] ?? '';
            $this->DNIPaciente = $args['DNIPaciente'] ?? '';
            $this->Diagnostico = $args['Diagnostico'] ?? '';
        }

        public function Registrar() {

            //Registrar al nueva cita

            $this->Estado="Espera";

            $query = "INSERT INTO " . self::$tabla . " (ID_Paciente, ID_Medico, ID_Horario, Area, Estado) VALUES 
                                                        ('$this->ID_Paciente','$this->ID_Medico','$this->ID_Horario','$this->Area','$this->Estado')";
            $resultado = self::$db->query($query);

            
            return $resultado;
        }

    }