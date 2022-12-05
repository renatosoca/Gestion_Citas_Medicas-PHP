<?php
    namespace Controller;

    use Router\Router;
    use Model\Paciente;
    use Model\Medico;

    class AdminController {

        public static function index( Router $router) {

            $paciente=Paciente::all();
            $medico=Medico::all();

            $nrpaci=sizeof($paciente);
            $nrmedi=sizeof($medico);

            $router->renderAdmin('admin/index', [

                'nrpaci' => $nrpaci,
                'nrmedi' => $nrmedi

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