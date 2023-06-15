<?php
namespace App\Controllers;

use App\Core\Router;

class HomeController {

  public static function index() {

    Router::render('home/index', 'homeLayout', [
    ]);
  }

  public static function about() {
      
    Router::render('home/about', 'homeLayout', [
    ]);
  }

  public static function services() {
      
    Router::render('home/services', 'homeLayout', [
    ]);
  }

  public static function doctors() {
      
    Router::render('home/doctors', 'homeLayout', [
    ]);
  }

  public static function contact() {
      
    Router::render('home/contact', 'homeLayout', [
    ]);
  }
}