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
        $paciente = new Paciente();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Login($_POST['usuario']);
            $email = obtenerEmail();

            $paciente = new Paciente($_POST['paciente']);
            $mensaje = $paciente->validar();
            if (empty($mensaje)) {
                //GUARDAR USUARIO
                $resultado = $usuario->insert();

                //BUSCAR USUARIO
                $user = $usuario->searchUser($email);
                if ($resultado) {
                    //REGISTRAR MEDICO
                    $result = $paciente->Registrar($user->id);
                    header('Location: /login');
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
