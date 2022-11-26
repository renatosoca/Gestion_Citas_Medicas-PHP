<?php
    require_once __DIR__. '/../includes/app.php';

    use Router\Router;
    use Controller\AdminController;
    use Controller\PageController;
    use Controller\LoginController;
    use Controller\PacienteController;
    use Controller\DoctorController;

    $router = new Router();

    //Paginas Estaticas
    $router->get('/', [PageController::class, 'index']);
    $router->get('/nosotros', [PageController::class, 'nosotros']);
    $router->get('/servicios', [PageController::class, 'servicios']);
    $router->get('/medicos', [PageController::class, 'medicos']);
    $router->get('/contacto', [PageController::class, 'contacto']);
    $router->post('/contacto', [PageController::class, 'contacto']);

    //Paginas Admin
    $router->get('/admin/panel', [AdminController::class, 'panel']);
    $router->get('/admin/pacientes', [AdminController::class, 'pacientes']);
    $router->get('/admin/medicos', [AdminController::class, 'medicos']);
    $router->get('/admin/citas', [AdminController::class, 'citas']);
    $router->get('/admin/historial', [AdminController::class, 'historial']);


    //Paginas Paciente
    $router->get('/pacientes', [PacienteController::class, 'index']);

    //Paginas Doctores
    $router->get('/doctores', [DoctorController::class, 'index']);

    //Login
    $router->get('/login', [LoginController::class, 'login']);
    $router->post('/login', [LoginController::class, 'login']);
    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);

    $router->comprobarRutas();