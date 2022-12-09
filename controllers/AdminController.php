<?php
    namespace Controller;

    use Model\Especialidades;
    use Router\Router;
    use Model\Paciente;
    use Model\Medico;
    use Model\Horario;

    class AdminController {

        public static function index( Router $router) {

            $paciente=Paciente::allActivos();
            $medico=Medico::allActivos();

            $nrpaci=sizeof($paciente);
            $nrmedi=sizeof($medico);

            $router->renderAdmin('admin/index', [

                'nrpaci' => $nrpaci,
                'nrmedi' => $nrmedi

            ]);
        }

        public static function pacientes( Router $router ) {

            //Mostramos a los pacientes registrados

            $pacientes = Paciente::allActivos();

            //registrar pacientes

            $router->renderAdmin('admin/pacientes', [
                'pacientes' => $pacientes,
            ]);
        }

        public static function pacientesRegistrar(Router $router ){


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $auth = new Paciente($_POST['paciente']);
                    $resultado= $auth->Registrar();

                    if ($resultado) {
                        header('Location: /pacientes/index');
                    } 
                    

            }

        }

        public static function pacientesActualizar(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
                $id = $_POST['id']; 
                $paciente = Paciente::find($id);     //CONSULTAR UNA PROPIEDAD
                print_r($paciente);
                $mensaje = Paciente::getErrores();
                $args = $_POST['paciente'];
                $paciente->sincronizar($args);
                
                //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
                $mensaje = $paciente->validar();
                
                //ACTUALIZAR
                if (empty($mensaje)) {
                    $paciente->save();
                    header('Location: /pacientes/index');
                }
            }

        }

        public static function pacientesEliminar(){

            if ($_SERVER['REQUEST_METHOD']==='POST') {
                $id= $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if ($id) {
                    $tipo = $_POST['tipo'];
                    if (validarTipoContenido($tipo)) {
                        //ELIMINAR LOS DATOS Y ARCHIVOS
                        $paciente = Paciente::find($id);
                        $paciente->CambiarEstado();
                        
                        if ($paciente) {
                            header('Location: /pacientes/index');
                        }

                    }
                }
            }

        } 


        public static function medicos( Router $router ) {
            
            $router->renderAdmin('admin/medicos', [

            ]);
        }

        public static function citas( Router $router ) {

            $especialidades= Especialidades::allActivos();
            $medicos= Medico::allActivos();
            $horarios=Horario::allDisponibles();
            
            $router->renderAdmin('/admin/citas', [

                'especialidades' => $especialidades,
                'medicos' => $medicos,
                'horarios' => $horarios,

            ]);
        }

        
    }