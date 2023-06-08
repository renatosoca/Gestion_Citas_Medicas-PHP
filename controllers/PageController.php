<?php
    namespace Controller;

    use Router\Router;

    class PageController {

        public static function index( Router $router ) {

            $router->render('page/index', 'layout', [
            ]);
        }

        public static function nosotros( Router $router ) {
            
            $router->render('page/nosotros', 'layout', [
            ]);
        }

        public static function servicios( Router $router ) {
            
            $router->render('page/servicios', 'layout', [
            ]);
        }

        public static function medicos( Router $router ) {
            
            $router->render('page/medicos', 'layout', [
            ]);
        }

        public static function contacto( Router $router ) {
            
            $router->render('page/contacto', 'layout', [
            ]);
        }
    }