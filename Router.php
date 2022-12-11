<?php 
    namespace Router;

    class Router {
        public $rutasGET = [];
        public $rutasPOST = [];
    
        public function get($url, $fn) {
            $this->rutasGET[$url] = $fn;
        }
    
        public function post($url, $fn) {
            $this->rutasPOST[$url] = $fn;
        }
    
        public function comprobarRutas() {
            /* session_start();
            $auth = $_SESSION['login'] ?? null;
    
            //ARREGLO DE RUTAS PROTEGIDAS
            $rutas_protegidas = ['']; */
    
            $urlActual = $_SERVER['PATH_INFO'] ?? '/';
            $metodo = $_SERVER['REQUEST_METHOD'];
    
            if ($metodo === 'GET') {
                //ejp: si estamos en url: /nosotros => funcion_nosotros
                /* $urlActual = explode('?', $urlActual)[0];   //SE USA CUANDO USAMOS EL REQUEST_URI */
                $function =  $this->rutasGET[$urlActual] ?? null;
            } else {
                /* $urlActual = explode('?', $urlActual)[0];   //SE USA CUANDO USAMOS EL REQUEST_URI */
                $function =  $this->rutasPOST[$urlActual] ?? null;
            }
    
            //PROTEGER RUTAS
            /* if (in_array($urlActual, $rutas_protegidas) && !$auth) {
                header('Location: /');
            } */
    
            if ($function) {
                //LA URL EXISTE Y HAY UNA FUNCION ASOCIADA
                call_user_func($function, $this);
            } else {
                echo '404 Pagina no encontrada';
            }
        }
    
        //PARA LA VISTA GENERAL
        public function render($view, $datos = []) {
            foreach ($datos as $key => $value) {
                //$$ => variable variable, ejm=$llave
                $$key = $value;
            }
            
            ob_start();                     //ALMACENANDO EN MEMORIA DURANTE UN MOMENTO...
            include_once __DIR__. "/views/$view.php";
            $contenido = ob_get_clean();    //LIMPIAMOS MEMORIA Y LO GUARDA EN LA VARIABLE
            include_once __DIR__."/views/layout.php";
        }
        //PARA LA VISTA DEL ADMINISTRADOR
        public function renderAdmin($view, $datos = []) {
            foreach ($datos as $key => $value) {
                //$$ => variable variable, ejm=$llave
                $$key = $value;
            }
            
            ob_start();                     //ALMACENANDO EN MEMORIA DURANTE UN MOMENTO...
            include_once __DIR__. "/views/$view.php";
            $contenido = ob_get_clean();    //LIMPIAMOS MEMORIA Y LO GUARDA EN LA VARIABLE
            include_once __DIR__."/views/layout-admin.php";
        }
        //PARA LA VISTA DE LOS PACIENTES
        public function renderPaciente($view, $datos = []) {
            foreach ($datos as $key => $value) {
                //$$ => variable variable, ejm=$llave
                $$key = $value;
            }
            
            ob_start();                     //ALMACENANDO EN MEMORIA DURANTE UN MOMENTO...
            include_once __DIR__. "/views/$view.php";
            $contenido = ob_get_clean();    //LIMPIAMOS MEMORIA Y LO GUARDA EN LA VARIABLE
            include_once __DIR__."/views/layout-paciente.php";
        }
        //PARA LA VISTA DE LOS DOCTORES
        public function renderDoctor($view, $datos = []) {
            foreach ($datos as $key => $value) {
                //$$ => variable variable, ejm=$llave
                $$key = $value;
            }
            
            ob_start();                     //ALMACENANDO EN MEMORIA DURANTE UN MOMENTO...
            include_once __DIR__. "/views/$view.php";
            $contenido = ob_get_clean();    //LIMPIAMOS MEMORIA Y LO GUARDA EN LA VARIABLE
            include_once __DIR__."/views/layout-medico.php";
        }
    }