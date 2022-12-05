<?php
    namespace Controller;

    use Router\Router;

    class PageController {

        public static function index( Router $router ) {

            $router->render('page/index', [

            ]);
        }

        public static function nosotros( Router $router ) {
            
            $router->render('page/nosotros', [

            ]);
        }

        public static function servicios( Router $router ) {
            
            $router->render('page/servicios', [

            ]);
        }

        public static function medicos( Router $router ) {
            
            $router->render('page/medicos', [

            ]);
        }

        public static function contacto( Router $router ) {
            
            $router->render('page/contacto', [

            ]);
        }
    }