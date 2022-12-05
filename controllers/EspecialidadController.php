<?php
    namespace Controller;
    use Router\Router;
    use Model\Especialidades;

    class EspecialidadController {

        public static function index( Router $router ) {
            $especialidades = Especialidades::all();
            
            $router->renderAdmin('admin/especialidades', [
                'especialidades' => $especialidades
            ]);
        }
        //FALTA EL MODAL PARA EL ACTUALIZAR
        public static function actualizar( Router $router ){
            $id = Redireccionar('/especialidades/index'); //GET id (Obtenemos el id, si no, nos redirige a otra pagina)
            $especialidad = Especialidades::find($id);      //CONSULTAR UNA PROPIEDAD
            $mensaje = Especialidades::getErrores();     //Para almacenar y luego mostrar los errores de los inputs en el FORM

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
                $args = $_POST['especialidad'];
                $especialidad->sincronizar($args);
                
                //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
                $mensaje = $especialidad->validar();
                
                //ACTUALIZAR
                if (empty($mensaje)) {
                    $especialidad->guardar();
                }
            }

            $router->render('especialidades/actualizar', [
                //ENVIANDO DATOS
                'especialidad' => $especialidad,
                'mensaje' => $mensaje
            ]);
        }

        public static function eliminar() {
            //ELIMINAR PROPIEDAD
            if ($_SERVER['REQUEST_METHOD']==='POST') {
                $id= $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if ($id) {
                    $tipo = $_POST['tipo'];
                    if (validarTipoContenido($tipo)) {
                        //ELIMINAR LOS DATOS Y ARCHIVOS
                        $especialidades = Especialidades::find($id);
                        $especialidades->delete();
                    }
                }
            }
        }
    }