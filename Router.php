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
            /* PROTECCIÓN DE URLS */
            session_start();
            $auth = $_SESSION['id'] ?? null;
            
            $rutas_protegidas = ['/paciente', '/doctor'];       //ARREGLO DE RUTAS PROTEGIDAS
    
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
            if (in_array($urlActual, $rutas_protegidas) && !$auth) {
                header('Location: /');
            }
    
            if ($function) {
                //LA URL EXISTE Y HAY UNA FUNCION ASOCIADA
                call_user_func($function, $this);
            } else {
                echo '404 Pagina no encontrada';
            }
        }
    
        //PARA LA LLAMADA DE LAS PAGINAS
        public function render( $view, $layout, $datos = []) {
            //OBTENEMOS LAS VARIABLES QUE SE ENVIAN DE LOS CONTROLLERS, 
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
            
            ob_start();                     //ALMACENANDO EN MEMORIA DURANTE UN MOMENTO...
            include_once __DIR__. "/views/$view.php";
            $contenido = ob_get_clean();    //LIMPIAMOS MEMORIA Y LO GUARDA EN LA VARIABLE
            include_once __DIR__."/views/$layout.php";
        }
    }