<?php
    namespace Controller;

    use Router\Router;
    use Model\Admin;

    class LoginController {

        public static function login( Router $router ) {
            $mensaje = [];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $auth = new Admin($_POST['usuario']);
                $mensaje = $auth->validar();
                
                if ( empty($mensaje) ) {
                    //VERIFICAR SI EL USUARIO EXISTE EN LA DATABASE
                    $resultado = $auth->existeUsuario();

                    if (!$resultado) {
                        $mensaje = Admin::getErrores();
                    } else {
                        //VERIFICAR EL PASS
                        $pass = $auth->ComprobarPass($resultado);

                        //AUTENTICAR
                        if ($pass) {
                            //AUTENTICAR AL USUARIO
                            $auth->autenticar();
                        } else {
                            $mensaje = Admin::getErrores();
                        }
                    }
                }
            }
            
            $router->render('auth/login', [
                'mensaje' => $mensaje
            ]);
        }

        public static function registro( Router $router ) {
            
            $router->render('auth/registro', [

            ]);
        }

        public static function logout() {
            session_start();
            $_SESSION = [];

            header('Location: /');
        }
        
    }