<?php
    namespace Controller;

    use Router\Router;
    use Model\Medico;
    use Model\Especialidades;

    class DoctorController {
        
        public static function index(Router $router) {
            $medicos = Medico::allActivos();
            $especialidades=Especialidades::allActivos();
            foreach ($medicos as $row) {

                $Especialidad=Especialidades::find($row->ID_Especialidad);
                $row->ID_Especialidad=$Especialidad->Descripcion;
                
            }
            
            $router->renderAdmin('admin/medicos', [
                'medicos' => $medicos,
                'especialidades' => $especialidades
            ]);
        }

        //AGREGAR MEDICOS

        public static function agregar(){


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $auth = new Medico($_POST['medico']);
                    $resultado= $auth->Registrar();

                    if ($resultado) {
                        header('Location: /medicos/index');
                    } 
                    

            }

        }

         public static function actualizar(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
                $id = $_POST['id']; 
                $medico = Medico::find($id);     //CONSULTAR UNA PROPIEDAD
                $mensaje = Medico::getErrores();
                $args = $_POST['medico'];
                $medico->sincronizar($args);
                
                //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
                $mensaje = $medico->validar();
                
                //ACTUALIZAR
                if (empty($mensaje)) {
                    $medico->save();
                    header('Location: /medicos/index');
                }
            }

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
                        $medico->CambiarEstado();
                    }
                }
            }
        }
    }