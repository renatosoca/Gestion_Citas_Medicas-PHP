<?php

    namespace Model;

    class Paciente extends ActiveRecord{
        protected static $tabla = 'paciente';
        protected static $columnasDB  = ['id', 'Nombre', 'Ape_Paterno', 'Ape_Materno','Edad', 'Genero', 'T_Doc', 'Nr_Doc', 'Fecha_Nacimiento', 
                                        'Telefono', 'Correo', 'Contraseña', 'Usuario', 'Fecha_Creacion', 'Estado'];

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