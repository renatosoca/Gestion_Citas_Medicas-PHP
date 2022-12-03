<?php

require 'funciones.php';
require 'config/conexion.php';
require __DIR__.'/../vendor/autoload.php';

use Model\ActiveRecord;

$db = conexion();

ActiveRecord::setDB($db);