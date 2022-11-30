<?php
    namespace Controller;

    use Router\Router;

    class AdminController {

        public static function index( Router $router) {

            $router->renderAdmin('admin/index', [

            ]);
        }

        public static function pacientes( Router $router ) {
            
            $router->renderAdmin('admin/pacientes', [

            ]);
        }

        public static function medicos( Router $router ) {
            
            $router->renderAdmin('admin/medicos', [

            ]);
        }

        public static function citas( Router $router ) {
            
            $router->renderAdmin('admin/citas', [

            ]);
        }

        
    }