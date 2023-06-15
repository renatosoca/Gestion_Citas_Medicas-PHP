<?php
require_once __DIR__ . '/../app/main.php';

use App\Core\Router;
use App\Controllers\HomeController;

//static pages
Router::get('/', [HomeController::class, 'index']);
Router::get('/about', [PageController::class, 'nosotros']);
Router::get('/services', [PageController::class, 'servicios']);
Router::get('/doctors', [PageController::class, 'medicos']);
Router::get('/contact', [PageController::class, 'contacto']);
Router::post('/contact', [PageController::class, 'contacto']);

//Paginas Admin, parte resumen
Router::get('/admin/index', [AdminPacientesController::class, 'index']);
//Paginas de ADMIN, parte pacientes
Router::get('/admin/pacientes', [AdminPacientesController::class, 'pacientes']);
Router::get('/pacientes/reporte', [ReportesController::class, 'pacienteReporte']);
Router::post('/pacientes/registrar', [AdminPacientesController::class, 'pacientesRegistrar']);
Router::post('/pacientes/eliminar', [AdminPacientesController::class, 'pacientesEliminar']);
Router::post('/pacientes/actualizar', [AdminPacientesController::class, 'pacientesActualizar']);
Router::post('/pacientes/historial', [AdminPacientesController::class, 'historial']);
Router::post('/pacientes/detallemedico', [AdminPacientesController::class, 'detallemedico']);
//Paginas de ADMIN, parte medicos
Router::get('/admin/medicos', [AdminMedicosController::class, 'medicos']);
Router::get('/medicos/reporte', [ReportesController::class, 'medicoReporte']);
Router::post('/medicos/agregar', [AdminMedicosController::class, 'medicoAgregar']);
Router::post('/medicos/actualizar', [AdminMedicosController::class, 'medicoActualizar']);
Router::post('/medicos/eliminar', [AdminMedicosController::class, 'medicoEliminar']);
Router::post('/medicos/horario', [AdminMedicosController::class, 'HorarioMedico']);
//Paginas de ADMIN, parte citas
Router::get('/admin/citas', [AdminCitasController::class, 'citas']);
Router::post('/citas/registrar', [AdminCitasController::class, 'registrarcita']);
Router::post('/citas/reprogramar', [AdminCitasController::class, 'reprogramarcita']);
Router::post('/citas/eliminar', [AdminCitasController::class, 'eliminarcita']);
//Paginas de ADMIN, parte especialidades
Router::get('/admin/especialidades', [AdminEspecialidadController::class, 'especialidades']);
Router::post('/especialidades/agregar', [AdminEspecialidadController::class, 'especialidadAgregar']);
Router::post('/especialidades/actualizar', [AdminEspecialidadController::class, 'especialidadActualizar']);
Router::post('/especialidades/eliminar', [AdminEspecialidadController::class, 'especialidadEliminar']);


//Paginas Paciente
Router::get('/paciente', [PacienteController::class, 'index']);
Router::get('/paciente/citaspasadas', [PacienteController::class, 'citaspasadas']);
Router::post('/paciente/registrarcita', [PacienteController::class, 'registrarcita']);
Router::post('/paciente/reprogramar', [PacienteController::class, 'reprogramarcita']);
Router::post('/paciente/eliminarcita', [PacienteController::class, 'eliminarcita']);
Router::post('/paciente/detallemedico', [PacienteController::class, 'detallemedico']);


//Paginas Doctores
Router::get('/doctor', [DoctorController::class, 'index']);
Router::post('/doctor', [DoctorController::class, 'index']);
Router::post('/doctor/entrarcita', [DoctorController::class, 'entrarcita']);
Router::post('/doctor/historia', [DoctorController::class, 'historia']);
Router::post('/doctor/ficha', [DoctorController::class, 'fichamedica']);
Router::post('/doctor/guardarficha', [DoctorController::class, 'guardarficha']);


//Login
Router::get('/login', [LoginController::class, 'login']);
Router::post('/login', [LoginController::class, 'login']);
Router::get('/registro', [LoginController::class, 'registro']);
Router::post('/registro', [LoginController::class, 'registro']);
Router::get('/logout', [LoginController::class, 'logout']);


Router::dispatch();
