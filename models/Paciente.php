<?php

    /* namespace Model; */

    /* class Paciente {
        protected static $tabla = 'paciente';
<<<<<<< Updated upstream
        protected static $columnasDB  = ['id', 'nombre', 'apell'];
=======
        protected static $columnasDB  = ['id', 'Nombre', 'Ape_Paterno', 'Ape_Materno','Edad', 'Genero', 'T_Doc', 'Nr_Doc', 'Fecha_Nacimiento', 
                                        'Telefono', 'Correo', 'Contraseña', 'Usuario', 'Fecha_Creacion', 'Estado'];
>>>>>>> Stashed changes

        public $id;
        public $Nombre;
        public $Ape_Paterno;
        public $Ape_Materno;
        public $Edad;
        public $Genero;
        public $T_Doc;
        public $Nr_Doc;
        public $Fecha_Nacimiento;
        public $Telefono;
        public $Correo;
        public $Contraseña;
        public $Usuario;
        public $Fecha_Creacion;
        public $Estado;

        public function __construct($args = []) {
<<<<<<< Updated upstream
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
=======
            $this->id = $args['id'] ?? null;
            $this->Nombre = $args['Nombre'] ?? '';
            $this->Ape_Paterno = $args['Ape_Paterno'] ?? '';
            $this->Ape_Materno = $args['Ape_Materno'] ?? '';
            $this->Edad = $args['Edad'] ?? '';
            $this->Genero = $args['Genero'] ?? '';
            $this->T_Doc = $args['T_Doc'] ?? '';
            $this->Nr_Doc = $args['Nr_Doc'] ?? '';
            $this->Fecha_Nacimiento = $args['Fecha_Nacimiento'] ?? '';
            $this->Telefono = $args['Telefono'] ?? '';
            $this->Correo = $args['Correo'] ?? '';
            $this->Contraseña = $args['Contraseña'] ?? '';
            $this->Usuario = $args['Usuario'] ?? '';
            $this->Fecha_Creacion = $args['Fecha_Creacion'] ?? '';
            $this->Estado = $args['Estado'] ?? '';
        }

        public function validar() {
            if (!$this->Nombre) {
                self::$errores[] = 'El nombre es obligatorio';
            }
            if (!$this->Ape_Paterno) {
                self::$errores[] = 'Apellido es obligatorio';
            }
            if (!$this->Correo) {
                self::$errores[] = 'El email es obligatorio';
            }
            if (!$this->Contraseña) {
                self::$errores[] = 'Debes ingresar una contraseña';
            }

            return self::$errores;
        }

        public function Registrar() {

            //Registrar al nuevo paciente

            $this->Estado="Activo";

            $query = "INSERT INTO " . self::$tabla . " (Nombre, Ape_Paterno, Ape_Materno, Edad, Genero, T_Doc, Nr_Doc, Fecha_Nacimiento, Telefono, 
                                                        Correo, Contraseña, Usuario,Estado) VALUES
                                                        ('$this->Nombre','$this->Ape_Paterno','$this->Ape_Materno','$this->Edad','$this->Genero','$this->T_Doc','$this->Nr_Doc','$this->Fecha_Nacimiento',
                                                        '$this->Telefono','$this->Correo','$this->Contraseña','$this->Usuario','$this->Estado')";
            $resultado = self::$db->query($query);

            if (!$resultado) {
                self::$errores[] = 'Error al insertar usuario';
                return;
            }

            self::$errores[] ="Se ah registrado correctamente";
            
            return self::$errores;

        }

        public function MostrarPacientesAdmin() {

            $mensaje="";

            $query =  "SELECT * FROM " . self::$tabla ."";
            $resultado = self::$db->query($query);

            while ($pacientes= mysqli_fetch_assoc($resultado)){

                $mensaje.="<tr>
                <td>".$pacientes['Nr_Doc']."</td>
                <td>".$pacientes['Nombre']." ".$pacientes['Ape_Paterno']."</td>
                <td>".$pacientes['Genero']."</td>
                <td>".$pacientes['Edad']."</td>
                <td>
                    <button type='button' class='' data-bs-toggle='modal' data-bs-target='#verHistorial'>
                        <i class='fas fa-book-medical'></i> historial
                    </button>
                    </td>
                    <td>
                    <button type='button' class='' data-bs-toggle='modal' data-bs-target='#editarPaciente'>
                        <i class='fas fa-user-edit'> </i>editar
                    </button>
                    </td>
                </tr>";

            }

            return $mensaje;

        }
        

    }
>>>>>>> Stashed changes
