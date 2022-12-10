<?php

namespace Controller;

use Router\Router;
use Model\Paciente;
use Model\Login;

class LoginController
{

    public static function login(Router $router)
    {
        $mensaje = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Login($_POST['usuario']);
            $mensaje = $auth->validar();

            if (empty($mensaje)) {
                //VERIFICAR SI EL USUARIO EXISTE EN LA DATABASE
                $resultado = $auth->existeUsuario();
                if (!$resultado) {
                    $mensaje = Login::getErrores();
                } else {
                    //VERIFICAR EL PASS
                    $pass = $auth->ComprobarPass($resultado);
                    //AUTENTICAR
                    if ($pass) {
                        //AUTENTICAR AL USUARIO
                        $auth->autenticar($resultado);
                    } else {
                        $mensaje = Login::getErrores();
                    }
                }
            }
        }

        $router->render('auth/login', [
            'mensaje' => $mensaje
        ]);
    }

    public static function registro(Router $router)
    {
        $mensaje = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente($_POST['paciente']);
            $usuario = new Login( $_POST['usuario'] );
            
            $mensaje = $paciente->validar();
            if (empty($mensaje)) {
                //REGISTRAR PACIENTE
                $resultado = $paciente->save();
                if ($resultado) {
                    //GUARDAR USUARIO
                    $usuario->insert();
                    $mensaje = $resultado;
                } else {
                    $mensaje = Paciente::getErrores();
                }
            }
        }

        $router->render('auth/registro', [
            'mensaje' => $mensaje
        ]);
    }

    public static function logout()
    {
        session_start();
        $_SESSION = [];

        header('Location: /');
    }
}
