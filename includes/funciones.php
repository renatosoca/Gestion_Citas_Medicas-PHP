<?php
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGEN', $_SERVER['DOCUMENT_ROOT'] . '/image/');

function debugear($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre";
    exit;
}

function s($html)
{
    $s = htmlspecialchars($html);
    return $s;
}

function validarTipoContenido($tipo)
{
    $tipos = ['especialidades', 'medicos', 'usuarios', 'pacientes'];
    return in_array($tipo, $tipos);
}

function conexionEmail($mail)
{
    //CONFIG SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = 2525;
    $mail->SMTPAuth = true;
    $mail->Username = '4a8895ebea0bc9';
    $mail->Password = 'a24423000737a7';
    $mail->SMTPSecure = 'tls';
}

function configEnvioEmail($mail, $email, $name, $mensaje)
{
    $mail->setFrom('admin@hospital.com');
    $mail->addAddress('' . $email . '', '' . $name . '');
    $mail->Subject = $mensaje;

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
}

function Redireccionar(string $url)
{
    //Validacion de URL
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: ${url}');
    }

    return $id;
}

function obtenerEmail()
{
    $email = $_POST['usuario']['email'];
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    return $email;
}
