<?php
namespace App\Controllers;

use App\Core\Router;

class HomeController {

  public static function index() {

    Router::render('home/index', 'homeLayout', [
      'title' => 'San Jose'
    ]);
  }

  public static function about() {
      
    Router::render('home/about', 'homeLayout', [
      'title' => 'San Jose | Nosotros'
    ]);
  }

  public static function services() {
      
    Router::render('home/services', 'homeLayout', [
      
      'title' => 'San Jose | Servicio'
    ]);
  }

  public static function doctors() {
      
    Router::render('home/doctors', 'homeLayout', [
      'title' => 'San Jose | Doctores'
    ]);
  }

  public static function contact() {
      
    Router::render('home/contact', 'homeLayout', [
      'title' => 'San Jose | Contacto'
    ]);
  }
}