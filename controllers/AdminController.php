<?php
    namespace Controller;

    use Router\Router;
    use Model\Paciente;
    use Model\Medico;

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

            $mensaje = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['Agregar'])) {

                    $auth = new Paciente($_POST['paciente']);
                    $mensaje = $auth->validar();

                    if ( empty($mensaje) ) { 
                        //REGISTRAR AL USUARIO
                        $resultado= $auth->Registrar();

                        if (!$resultado) {
                            $mensaje = Paciente::getErrores();
                        } else {
                            $mensaje = $resultado;
                        }
                    }

                }elseif (isset($_POST['Eliminar'])) {

                    $id= $_POST['id'];
                    $id = filter_var($id, FILTER_VALIDATE_INT);

                    if ($id) {
                        $tipo = $_POST['tipo'];
                        if (validarTipoContenido($tipo)) {
                            //CAMBIAR EL ESTADO
                            $paciente = Paciente::find($id);
                            $paciente->CambiarEstado();
                        }
                    }

                }
                
            }

            
            $router->renderAdmin('admin/pacientes', [
                'pacientes' => $pacientes,
                'mensaje' => $mensaje
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