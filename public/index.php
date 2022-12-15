<?php
    require_once __DIR__. '/../includes/app.php';

    use Router\Router;
    use Controller\PageController;
    use Controller\LoginController;
    use Controller\PacienteController;
    use Controller\DoctorController;
    use Controller\AdminPacientesController;
    use Controller\AdminMedicosController;
    use Controller\AdminCitasController;
    use Controller\AdminEspecialidadController;

    $router = new Router();

    //Paginas Estaticas
    $router->get('/', [PageController::class, 'index']);
    $router->get('/nosotros', [PageController::class, 'nosotros']);
    $router->get('/servicios', [PageController::class, 'servicios']);
    $router->get('/medicos', [PageController::class, 'medicos']);
    $router->get('/contacto', [PageController::class, 'contacto']);
    $router->post('/contacto', [PageController::class, 'contacto']);

    //Paginas Admin, parte resumen
    $router->get('/admin/index', [AdminPacientesController::class, 'index']);
    //Paginas de ADMIN, parte pacientes
    $router->get('/admin/pacientes', [AdminPacientesController::class, 'pacientes']);
    $router->post('/pacientes/registrar', [AdminPacientesController::class, 'pacientesRegistrar']);
    $router->post('/pacientes/eliminar', [AdminPacientesController::class, 'pacientesEliminar']);
    $router->post('/pacientes/actualizar', [AdminPacientesController::class, 'pacientesActualizar']);
    $router->post('/pacientes/historial', [AdminPacientesController::class, 'historial']);
    $router->post('/pacientes/detallemedico', [AdminPacientesController::class, 'detallemedico']);
    //Paginas de ADMIN, parte medicos
    $router->get('/admin/medicos', [AdminMedicosController::class, 'medicos']);
    $router->post('/medicos/agregar', [AdminMedicosController::class, 'medicoAgregar']);
    $router->post('/medicos/actualizar', [AdminMedicosController::class, 'medicoActualizar']);
    $router->post('/medicos/eliminar', [AdminMedicosController::class, 'medicoEliminar']);
    $router->post('/medicos/horario', [AdminMedicosController::class, 'HorarioMedico']);
    //Paginas de ADMIN, parte citas
    $router->get('/admin/citas', [AdminCitasController::class, 'citas']);
    $router->post('/citas/registrar', [AdminCitasController::class, 'registrarcita']);
    $router->post('/citas/reprogramar', [AdminCitasController::class, 'reprogramarcita']);
    $router->post('/citas/eliminar', [AdminCitasController::class, 'eliminarcita']);
    //Paginas de ADMIN, parte especialidades
    $router->get('/admin/especialidades', [AdminEspecialidadController::class, 'especialidades']);
    $router->post('/especialidades/agregar', [AdminEspecialidadController::class, 'especialidadAgregar']);
    $router->post('/especialidades/actualizar', [AdminEspecialidadController::class, 'especialidadActualizar']);
    $router->post('/especialidades/eliminar', [AdminEspecialidadController::class, 'especialidadEliminar']);


    //Paginas Paciente
    $router->get('/paciente', [PacienteController::class, 'index']);
    $router->get('/paciente/citaspasadas', [PacienteController::class, 'citaspasadas']);
    $router->post('/paciente/registrarcita', [PacienteController::class, 'registrarcita']);
    $router->post('/paciente/reprogramar', [PacienteController::class, 'reprogramarcita']);
    $router->post('/paciente/eliminarcita', [PacienteController::class, 'eliminarcita']);
    $router->post('/paciente/detallemedico', [PacienteController::class, 'detallemedico']);


    //Paginas Doctores
    $router->get('/doctor', [DoctorController::class, 'index']);
    

    //Login
    $router->get('/login', [LoginController::class, 'login']);
    $router->post('/login', [LoginController::class, 'login']);
    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);
    $router->get('/logout', [LoginController::class, 'logout']);


    $router->comprobarRutas();