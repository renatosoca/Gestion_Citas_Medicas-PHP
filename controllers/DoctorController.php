<?php
    namespace Controller;

    use Router\Router;
    use Model\Medico;
    use Model\Especialidades;

    class DoctorController {
        
        public static function index(Router $router) {
            $medicos = Medico::all();

            foreach ($medicos as $row) {

                $Especialidad=Especialidades::find($row->ID_Especialidad);
                $row->ID_Especialidad=$Especialidad->Descripcion;
                
            }
            
            $router->renderAdmin('admin/medicos', [
                'medicos' => $medicos
            ]);
        }
    }