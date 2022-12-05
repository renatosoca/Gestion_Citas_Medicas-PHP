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

        //ELIMINAR MEDICO
        public static function eliminar() {
            //ELIMINAR PROPIEDAD
            if ($_SERVER['REQUEST_METHOD']==='POST') {
                $id= $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if ($id) {
                    $tipo = $_POST['tipo'];
                    if (validarTipoContenido($tipo)) {
                        //ELIMINAR LOS DATOS Y ARCHIVOS
                        $medico = Medico::find($id);
                        $medico->delete();
                    }
                }
            }
        }
    }