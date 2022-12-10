<?php
    namespace Controller;

    use Router\Router;

    class PacienteController {
        
        public static function index( Router $router) {
            session_start();
            $sesion = $_SESSION['id'];

            $router->renderPaciente('pacientes/index', [
                'sesion' => $sesion
            ]);
        }

        public static function citaspendientes( Router $router) {
            session_start();
            $sesion = $_SESSION['id'];

            $router->renderPaciente('pacientes/citasPasadas', [
                'sesion' => $sesion
            ]);
        }

        public static function agregarcita( Router $router) {

            $router->renderPaciente('pacientes/agregarCita', [
                
            ]);
        }

    }