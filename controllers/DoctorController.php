<?php
    namespace Controller;

    use Router\Router;
    use Model\Medico;
    use Model\Especialidades;

    class DoctorController {
        
        public static function index(Router $router) {
            
            $router->render('doctores/index', 'layout-medico', [
            ]);
        }

    }