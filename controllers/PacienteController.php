<?php
    namespace Controller;

    use Router\Router;

    class PacienteController {
        
        public static function index( Router $router) {

            $router->renderPaciente('pacientes/index', [
                
            ]);
        }

        public static function agregarcita( Router $router) {

            $router->renderPaciente('pacientes/agregarCita', [
                
            ]);
        }

    }