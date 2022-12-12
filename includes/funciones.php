<?php
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGEN',$_SERVER['DOCUMENT_ROOT'] . '/image/');

function debugear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre";
    exit;
}

function s($html) {
    $s=htmlspecialchars($html);
    return $s;
}

function validarTipoContenido($tipo) {
    $tipos = ['especialidades', 'medicos', 'usuarios','pacientes'];
    return in_array($tipo, $tipos);
}

function mostrarNotificaciones($codigo) {
    $mensaje = '';
    switch($codigo){
        case '1':
            $mensaje = 'Creado Correctamente';
            break;
        case '2':
            $mensaje = 'Actualizado Correctamente';
            break;
        case '3':
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function Redireccionar(string $url){
    //Validacion de URL
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: ${url}');
    }

    return $id;
}

function obtenerEmail(){
    $email = $_POST['usuario']['email'];
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    return $email;
}