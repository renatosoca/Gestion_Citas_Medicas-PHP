<?php
    namespace Model;

    class Horario extends ActiveRecord{
        protected static $tabla = 'horario';
        protected static $columnasDB  = ['id', 'ID_Medico', 'Fecha', 'Hora_Inicio', 'Hora_Fin', 'Intervalo', 'Hora', 'Fecha_Creacion', 'Estado'];

        public $id;
        public $ID_Medico;
        public $Fecha;
        public $Hora_Inicio;
        public $Hora_Fin;
        public $Intervalo;
        public $Hora;
        public $Fecha_Creacion;
        public $Estado;

        public function __construct( $args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->ID_Medico = $args['ID_Medico'] ?? '';
            $this->Fecha = $args['Fecha'] ?? '';
            $this->Hora_Inicio = $args['Hora_Inicio'] ?? '';
            $this->Hora_Fin = $args['Hora_Fin'] ?? '';
            $this->Intervalo = $args['Intervalo'] ?? '';
            $this->Hora = $args['Hora'] ?? '';
            $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? '';
            $this->Estado = $args['Estado'] ?? null;

        }

        public function Registrar($ID_Medico,$Fecha,$Hora_Inicio,$Hora_Fin,$Intervalo,$Hora) {

            //Registrar al nueva horario

            $this->Estado="Disponible";

            $query = "INSERT INTO " . self::$tabla . " (ID_Medico, Fecha, Hora_Inicio, Hora_Fin, Intervalo, Hora, Estado) VALUES 
                                                        ('$ID_Medico','$Fecha','$Hora_Inicio','$Hora_Fin','$Intervalo','$Hora','$this->Estado')";
            $resultado = self::$db->query($query);

            
            return $resultado;
        }


    }