<?php

    /* namespace Model; */

    /* class Paciente {
        protected static $tabla = 'paciente';
        protected static $columnasDB  = ['id', 'nombre', 'apell'];

        public $id;
        public $nombres;
        public $apell;

        public function __construct($args = []) {
            $this->id = $args['id'];
            $this->nombres = $args['nombres'];
            $this->apell = $args['apell'];
        }
    } */

    class Paciente {

        private $Id;
        private $Nombre;
        private $Ape_Materno;
        private $Ape_Paterno;
        private $Genero;
        private $Tip_Doc;
        private $Nro_Doc;
        private $Fecha_Nacimiento;
        private $Telefono;
        private $Correo;
        private $Contraseña;
        private $Usuario;
        private $Fecha_Creacion;
        private $Estado;

        public function __construct($Id,$Nombre,$Ape_Materno,$Ape_Paterno,$Genero,$Tip_Doc,$Nro_Doc,$Fecha_Nacimiento,$Telefono,
                                    $Correo,$Contraseña,$Usuario,$Fecha_Creacion,$Estado) {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
            $this->Ape_Materno = $Ape_Materno;
            $this->Ape_Paterno = $Ape_Paterno;
            $this->Genero = $Genero;
            $this->Tip_Doc = $Tip_Doc;
            $this->Nro_Doc = $Nro_Doc;
            $this->Fecha_Nacimiento = $Fecha_Nacimiento;
            $this->Telefono = $Telefono;
            $this->Correo = $Correo;
            $this->Contraseña = $Contraseña;
            $this->Usuario = $Usuario;
            $this->Fecha_Creacion = $Fecha_Creacion;
            $this->Estado = $Estado;

        }

        public function getId()
        {
                return $this->Id;
        }

        public function setId($Id)
        {
                $this->Id = $Id;

                return $this;
        }

        public function getNombre()
        {
                return $this->Nombre;
        }

        public function setNombre($Nombre)
        {
                $this->Nombre = $Nombre;

                return $this;
        }

        public function getApe_Materno()
        {
                return $this->Ape_Materno;
        }

        public function setApe_Materno($Ape_Materno)
        {
                $this->Ape_Materno = $Ape_Materno;

                return $this;
        }

        public function getApe_Paterno()
        {
                return $this->Ape_Paterno;
        }

        public function setApe_Paterno($Ape_Paterno)
        {
                $this->Ape_Paterno = $Ape_Paterno;

                return $this;
        }

        public function getGenero()
        {
                return $this->Genero;
        }

        public function setGenero($Genero)
        {
                $this->Genero = $Genero;

                return $this;
        }
 
        public function getTip_Doc()
        {
                return $this->Tip_Doc;
        }

        public function setTip_Doc($Tip_Doc)
        {
                $this->Tip_Doc = $Tip_Doc;

                return $this;
        }

        public function getNro_Doc()
        {
                return $this->Nro_Doc;
        }

        public function setNro_Doc($Nro_Doc)
        {
                $this->Nro_Doc = $Nro_Doc;

                return $this;
        }

        public function getFecha_Nacimiento()
        {
                return $this->Fecha_Nacimiento;
        }

        public function setFecha_Nacimiento($Fecha_Nacimiento)
        {
                $this->Fecha_Nacimiento = $Fecha_Nacimiento;

                return $this;
        }

        public function getTelefono()
        {
                return $this->Telefono;
        }

        public function setTelefono($Telefono)
        {
                $this->Telefono = $Telefono;

                return $this;
        }

        public function getCorreo()
        {
                return $this->Correo;
        }

        public function setCorreo($Correo)
        {
                $this->Correo = $Correo;

                return $this;
        }

        public function getContraseña()
        {
                return $this->Contraseña;
        }

        public function setContraseña($Contraseña)
        {
                $this->Contraseña = $Contraseña;

                return $this;
        }

        public function getUsuario()
        {
                return $this->Usuario;
        }

        public function setUsuario($Usuario)
        {
                $this->Usuario = $Usuario;

                return $this;
        }
 
        public function getFecha_Creacion()
        {
                return $this->Fecha_Creacion;
        }

        public function setFecha_Creacion($Fecha_Creacion)
        {
                $this->Fecha_Creacion = $Fecha_Creacion;

                return $this;
        }

        public function getEstado()
        {
                return $this->Estado;
        }

        public function setEstado($Estado)
        {
                $this->Estado = $Estado;

                return $this;
        }



    } 
