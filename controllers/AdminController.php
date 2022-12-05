<?php
    namespace Controller;

    use Router\Router;
    use Model\Paciente;

    class AdminController {

        public static function index( Router $router) {

            $router->renderAdmin('admin/index', [

            ]);
        }

        public static function pacientes( Router $router ) {

            //Mostramos a los pacientes registrados

            $auth=new Paciente("");

            $pacientes=$auth->MostrarPacientesAdmin();

            
            $router->renderAdmin('admin/pacientes', [
                'pacientes' => $pacientes
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