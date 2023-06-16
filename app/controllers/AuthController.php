<?php

namespace App\Controllers;

use App\Core\Router;
use App\Models\Patient;
use App\Models\User;

class AuthController {
  public static function login() {
    $alerts = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $auth = new User($_POST[]);
      $alerts = $auth->validate();

      if (empty($alerts)) {
        $user = User::findOne('email', $auth->email);

        if (!$user) return User::setAlert( 'error', 'El usuario no existe');
        if (!$user->verifyPassword($auth->password)) return User::setAlert('error', 'Email o contraseña incorrectos');
        
        debugging($user);

        Router::redirect('/');
      }
    }

    Router::render('auth/login', 'authLayout',[
      'alerts' => $alerts
    ]);

    exit;
  }

  public static function register() {
    $alerts = [];
    $patient = new Patient();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $patient = new Patient($_POST['patient']);
      $user = new User($_POST['user']);

      if (empty($alerts)) {
        $response = $patient->save();
        if (!$response['id']) return Patient::setAlert('error', 'No se pudo registrar el paciente');

        $emailExist = User::findOne('email', $user->email);
        if ($emailExist) return User::setAlert('error', 'El email ya esta en uso');

        $user->patient_id = $response['id'];
        $user->hashPassword();

        $resp = $user->save();

        if (!$resp['id']) return User::setAlert('error', 'No se pudo registrar el usuario');

        Router::redirect('/login');
      }
    }

    Router::render('auth/registro', 'authLayout', [
      'alerts' => $alerts
    ]);

    exit;
  }

  public static function logout() {
    session_start();
    $_SESSION = [];
    header('Location: /');
  }
}