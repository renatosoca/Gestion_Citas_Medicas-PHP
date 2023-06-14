<?php

function debugging($variable): void {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}

function sanitize(string $html = ''): string {
  $sanitized = htmlspecialchars($html);
  return $sanitized;
}

function isFinal(string $currency, string $next): bool {
  if ($currency !== $next) {
    return true;
  }
  return false;
}

function isAuth(): bool {
  if (!isset($_SESSION)) session_start();
  
  return isset($_SESSION['login']);
}

function isAdmin(): bool {
  if (!isset($_SESSION)) session_start();

  return isset($_SESSION['admin']);
}

function isLinkActive(string $link): bool {
  $current = $_SERVER['REQUEST_URI'];
  $current = explode('?', $current)[0];

  return ($current === $link);
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
