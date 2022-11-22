<?php
    namespace Controller;

    use Router\Router;

    class PageController {

        public static function index( Router $router ) {

            $router->render('/page/index', [

            ]);
        }

        public static function nosotros( Router $router ) {
            
            $router->render('/page/nosotros', [

            ]);
        }

        public static function contacto( Router $router ) {
            
            $router->render('/page/contacto', [

            ]);
        }
    }