<?php
    require_once __DIR__. '/../includes/app.php';

    use Router\Router;
    use Controller\PageController;
    use Controller\LoginController;
    use Controller\PacienteController;
    use Controller\DoctorController;
    use Controller\EspecialidadController;
    use Controller\AdminController;

    $router = new Router();

    //Paginas Estaticas
    $router->get('/', [PageController::class, 'index']);
    $router->get('/nosotros', [PageController::class, 'nosotros']);
    $router->get('/servicios', [PageController::class, 'servicios']);
    $router->get('/medicos', [PageController::class, 'medicos']);
    $router->get('/contacto', [PageController::class, 'contacto']);
    $router->post('/contacto', [PageController::class, 'contacto']);

    //Paginas Admin
    $router->get('/admin/index', [AdminController::class, 'index']);
    $router->get('/admin/pacientes', [AdminController::class, 'pacientes']);
    $router->get('/admin/citas', [AdminController::class, 'citas']);

    //Paginas de ADMIN, parte medicos
    $router->get('/admin/medicos', [DoctorController::class, 'index']);

    //Paginas de ADMIN, parte especialidades
    $router->get('/especialidades/index', [EspecialidadController::class, 'index']);
    $router->post('/especialidades/eliminar', [EspecialidadController::class, 'eliminar']);


    //Paginas Paciente
    $router->get('/paciente', [PacienteController::class, 'index']);

    //Paginas Doctores
    $router->get('/doctor', [DoctorController::class, 'index']);

    //Login
    $router->get('/login', [LoginController::class, 'login']);
    $router->post('/login', [LoginController::class, 'login']);
    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);
    $router->get('/logout', [LoginController::class, 'logout']);

    $router->comprobarRutas();