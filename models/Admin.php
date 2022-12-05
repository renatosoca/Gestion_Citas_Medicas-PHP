<?php
    namespace Model;
    
    class Admin extends ActiveRecord{
        protected static $tabla = 'usuario';
        protected static $columnasDB  = ['id', 'email', 'pass', 'tipo_usuario', 'estado'];

        public $id;
        public $email;
        public $pass;
        /* public $tipo_usuario;
        public $estado; */

        public function __construct($args = []) {
            $this->id = $args['id'] ?? null;
            $this->email = $args['email'] ?? '';
            $this->pass = $args['pass'] ?? '';
            /* $this->tipo_usuario = $args['tipo_usuario'];
            $this->estado = $args['estado']; */
        }

        public function validar() {
            if (!$this->email) {
                self::$errores[] = 'El email es obligatorio';
            }
            if (!$this->pass) {
                self::$errores[] = 'Debes ingresar una contraseña';
            }

            return self::$errores;
        }

        public function existeUsuario() {
            //REVISAR SI UN USUARIO EXISTE
            $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email . "' LIMIT 1";
            $resultado = self::$db->query($query);

            if (!$resultado->num_rows) {
                self::$errores[] = 'El Usuario no existe';
                return;
            }
            
            return $resultado;
        }

        public function ComprobarPass($resultado) {
            //Verificar si la contrasela es correcta
            $usuario = $resultado->fetch_object();
            $auth = password_verify($this->pass, $usuario->pass);

            if (!$auth) {
                self::$errores[] = 'El Password es incorrecto';
                return;
            }
            
            return $auth;
        }

        public function autenticar() {
            session_start();

            $_SESSION['email'] = $this->email;
            $_SESSION['login'] = true;

            header('Location: /admin/index');
        }
    }