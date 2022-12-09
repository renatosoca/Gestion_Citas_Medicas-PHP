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


    //Paginas de ADMIN, parte pacientes
    $router->get('/pacientes/index', [AdminController::class, 'pacientes']);
    $router->post('/pacientes/registrar', [AdminController::class, 'pacientesRegistrar']);
    $router->post('/pacientes/eliminar', [AdminController::class, 'pacientesEliminar']);
    $router->post('/pacientes/actualizar', [AdminController::class, 'pacientesActualizar']);

    //Paginas de ADMIN, parte medicos
    $router->get('/admin/medicos', [DoctorController::class, 'index']);
    $router->post('/medicos/eliminar', [DoctorController::class, 'eliminar']);
    $router->post('/medicos/agregar', [DoctorController::class, 'agregar']);
    $router->post('/medicos/actualizar', [DoctorController::class, 'actualizar']);

    //Paginas de ADMIN, parte citas
    $router->get('/admin/citas', [AdminController::class, 'citas']);

    //Paginas de ADMIN, parte especialidades
    $router->get('/admin/especialidades', [EspecialidadController::class, 'index']);
    $router->post('/especialidades/eliminar', [EspecialidadController::class, 'eliminar']);


    //Paginas Paciente
    $router->get('/paciente', [PacienteController::class, 'index']);
    $router->get('/paciente/citaspendientes', [PacienteController::class, 'citaspendientes']);
    $router->get('/paciente/agregarcita', [PacienteController::class, 'agregarcita']);


    //Paginas Doctores
    $router->get('/doctor', [DoctorController::class, 'index']);


    //Login
    $router->get('/login', [LoginController::class, 'login']);
    $router->post('/login', [LoginController::class, 'login']);
    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);
    $router->get('/logout', [LoginController::class, 'logout']);

    $router->comprobarRutas();