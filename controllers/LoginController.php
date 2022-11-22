<?php
    namespace Controller;

    use Router\Router;

    class LoginController {

        public static function login( Router $router ) {
            
            $router->render('auth/login', [

            ]);
        }

        public static function registro( Router $router ) {
            
            $router->render('auth/registro', [

            ]);
        }
        
    }