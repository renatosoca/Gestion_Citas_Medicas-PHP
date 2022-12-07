<?php
    namespace Controller;

    use Router\Router;
    use Model\Paciente;

    class PacienteController {
        
        public static function index(Router $router) {

            $router->renderPaciente('pacientes/index', [
                
            ]);
        }
    }