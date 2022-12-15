<?php

namespace Controller;

use Model\Especialidades;
use Router\Router;
use Model\Paciente;
use Model\Medico;
use Model\Login;
use Model\Horario;
use Model\DetalleMedico;
use Model\RecetaMedica;
use Model\Cita;

class AdminController
{

    public static function index(Router $router)
    {

        $paciente = Paciente::allActivos();
        $medico = Medico::allActivos();
        $citas = Cita::allEspera();

        $nrpaci = sizeof($paciente);
        $nrmedi = sizeof($medico);
        $nrcita = sizeof($citas);

        $router->renderAdmin('admin/index', [

            'nrpaci' => $nrpaci,
            'nrcita' => $nrcita,
            'nrmedi' => $nrmedi

        ]);
    }

    public static function pacientes(Router $router)
    {
        //Mostramos a los pacientes registrados
        $pacientes = Paciente::allActivos();

        //registrar pacientes
        $router->renderAdmin('admin/pacientes', [
            'pacientes' => $pacientes,
        ]);
    }

    public static function pacientesRegistrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente($_POST['paciente']);
            $usuario = new Login($_POST['usuario']);

            $mensaje = $paciente->validar();
            if (empty($mensaje)) {
                //REGISTRAR PACIENTE
                $resultado = $paciente->save();

                if ($resultado) {
                    //GUARDAR USUARIO
                    $usuario->insert();
                    header('Location: /admin/pacientes');
                }
            }
        }
    }

    public static function pacientesActualizar()
    {

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

            //ELIMINAR
            if (empty($mensaje)) {
                $paciente->save();
                header('Location: /admin/pacientes');
            }
        }
    }

    public static function pacientesEliminar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //Cambiar el estado a SUSPENDIDO
                    $paciente = Paciente::find($id);
                    $paciente->CambiarEstado();

                    if ($paciente) {
                        header('Location: /admin/pacientes');
                    }
                }
            }
        }
    }

    //Listado de 
    public static function medicos(Router $router)
    {
        $medicos = Medico::allActivos();
        $especialidades = Especialidades::allActivos();
        foreach ($medicos as $row) {
            $Especialidad = Especialidades::find($row->ID_Especialidad);
            $row->ID_Especialidad = $Especialidad->Descripcion;
        }

        $router->renderAdmin('admin/medicos', [
            'medicos' => $medicos,
            'especialidades' => $especialidades
        ]);
    }

    //AGREGAR MEDICOS   => Falta solucionar el TIPO_USUARIO
    public static function medicoAgregar()
    {
        $medico = new Medico();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Login($_POST['usuario']);
            $email = obtenerEmail();

            $medico = new Medico($_POST['medico']);
            $mensaje = $medico->validar();
            if (empty($mensaje)) {
                //GUARDAR USUARIO
                $resultado = $usuario->insert();

                //BUSCAR USUARIO
                $user = $usuario->searchUser($email);
                if ($resultado) {
                    //REGISTRAR MEDICO
                    $result = $medico->Registrar($user->id);
                    header('Location: /admin/medicos');
                }
            }
        }
    }

    //ACTUALIZAR MEDICOS
    public static function medicoActualizar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //OBTENIENDO LOS VALORES DE LOS NAME DEL FORMULARIO
            $id = $_POST['id'];
            $medico = Medico::find($id);     //CONSULTAR UNA PROPIEDAD
            $mensaje = Medico::getErrores();
            $args = $_POST['medico'];
            $medico->sincronizar($args);

            //VALIDAR QUE NO ESTEN VACIOS LOS INPUTS
            $mensaje = $medico->validar();

            //ACTUALIZAR
            if (empty($mensaje)) {
                $medico->save();
                header('Location: /medicos/index');
            }
        }
    }

    //ELIMINAR MEDICO
    public static function medicoEliminar()
    {
        //ELIMINAR PROPIEDAD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $medico = Medico::find($id);
                    $medico->CambiarEstado();
                    header('Location: /admin/medicos');
                }
            }
        }
    }

    public static function medicoHorario(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $medico = Medico::find($_POST['id']);

            if (isset($_POST['Fecha'])) {

                $fecha = $_POST['Fecha'];
                $Hora_Inicio=$_POST['Hora_Inicio'];
                $TiempoAtencion=$_POST['TiempoAtencion'];
                $Pacientes=$_POST['Pacientes'];

                $Hora_Inicio = date($Hora_Inicio);

                $Hora_Fin=$Hora_Inicio;

                for ($i=0; $i < $Pacientes ; $i++) { 
                    
                    $Hora_Fin =strtotime ( '+'.$TiempoAtencion.' minute' , strtotime ($Hora_Fin)) ; 
                    $Hora_Fin = date ( 'H:i:s' , $Hora_Fin);
                }
             
                $Hora=$Hora_Inicio;
                
                for ($i=0; $i < $Pacientes ; $i++) { 
                    
                    $horario=new Horario();
                    $horario->Registrar($medico->id,$fecha,$Hora_Inicio,$Hora_Fin,$TiempoAtencion,$Hora);

                    $Hora =strtotime ( '+'.$TiempoAtencion.' minute' , strtotime ($Hora)) ; 
                    $Hora = date ( 'H:i:s' , $Hora);              
                }

                $router->renderAdmin('admin/medicohorario', [

                    'medico' => $medico,
    
                ]);
            }

            $router->renderAdmin('admin/medicohorario', [

                'medico' => $medico,

            ]);
        
        }

    }

    public static function citas(Router $router)
    {

        $especialidades = Especialidades::allActivos();
        $medicos = Medico::allActivos();
        $horarios = Horario::allDisponibles();
        $pacientes = Paciente::allActivos();
        $citaMostrar = Cita::allEspera();

        foreach ($citaMostrar as $row) {

            $paciente = Paciente::find($row->ID_Paciente);
            $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $row->DNIPaciente = $paciente->Nr_Doc;

            $medico = Medico::find($row->ID_Medico);
            $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($row->ID_Horario);
            $row->Fecha_Cita = $horario->Fecha;
            $row->Hora_Cita = $horario->Hora;
        }

        $router->renderAdmin('/admin/citas', [

            'especialidades' => $especialidades,
            'medicos' => $medicos,
            'horarios' => $horarios,
            'pacientes' => $pacientes,
            'citaMostrar' => $citaMostrar,
        ]);
    }

    public static function registrarcita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Cita($_POST['cita']);
            $resultado = $auth->Registrar();

            if ($resultado) {
                $horario = Horario::find($_POST['ID_Horario']);
                $horario->CambiarEstadoHorario();

                header('Location: /admin/citas');
            }
        }
    }

    public static function reprogramarcita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Cita($_POST['cita']);
            $resultado = $auth->Registrar();

            if ($resultado) {

                $cita = Cita::find($_POST['idcita']);
                $cita->delete();

                $horario = Horario::find($_POST['idhoraRepro']);
                $horario->CambiarEstadoHorario();

                $horarioActivar = Horario::find($_POST['idhoraActiva']);
                $horarioActivar->ActivarEstadoHorario();

                header('Location: /admin/citas');
            }
        }
    }

    public static function eliminarcita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $cita = Cita::find($_POST['idEliminar']);
            $cita->delete();

            $horarioActivar = Horario::find($_POST['idHorario']);
            $horarioActivar->ActivarEstadoHorario();

            header('Location: /admin/citas');
        }
    }

    public static function especialidades(Router $router)
    {
        $especialidades = Especialidades::all();

        $router->renderAdmin('admin/especialidades', [
            'especialidades' => $especialidades
        ]);
    }

    //FALTA EL MODAL PARA EL ACTUALIZAR
    public static function especialidadActualizar(Router $router)
    {
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

    public static function especialidadEliminar()
    {
        //ELIMINAR ESPECIALIDAD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    //ELIMINAR LOS DATOS Y ARCHIVOS
                    $especialidades = Especialidades::find($id);
                    $especialidades->delete();
                    header('Location: /admin/especialidades');
                }
            }
        }
    }

    public static function historial( Router $router) {

        $paciente=Paciente::find($_POST['id']);
        $citas=Cita::findCitaTerminado($paciente->id);

        foreach ($citas as $row) {

            $row->NombrePaciente = $paciente->Nombre . " " . $paciente->Ape_Paterno;
            $row->DNIPaciente = $paciente->Nr_Doc;

            $medico = Medico::find($row->ID_Medico);
            $row->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;

            $horario = Horario::find($row->ID_Horario);
            $row->Fecha_Cita = $horario->Fecha;
            $row->Hora_Cita = $horario->Hora;

            $detalleMedico= DetalleMedico::findcita($row->id);
            $row->Diagnostico= $detalleMedico->Diagnostico;
        }

        $router->renderAdmin('admin/historial', [
            'citas' => $citas,
        ]);
    }

    public static function detallemedico( Router $router) {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $cita = Cita::find($_POST['IDCita']);
            $detalleMedico = DetalleMedico::findcita($_POST['IDCita']);
            $medico = Medico::find($cita->ID_Medico);
            $cita->NombreMedico = $medico->Nombre . " " . $medico->Ape_Paterno;
            $receta= RecetaMedica::findReceta($detalleMedico->id);

        }

        $router->renderAdmin('admin/DetalleMedico', [

            'cita' => $cita,
            'detalleMedico' => $detalleMedico,
            'receta' => $receta,

        ]);
    }
}
