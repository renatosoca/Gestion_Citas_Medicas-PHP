<?php

require 'funciones.php';
require 'config/conexion.php';
require __DIR__.'/../vendor/autoload.php';

//Database
/* $db = conexion(); */

use Model\ActiveRecord;

<<<<<<< Updated upstream
/* ActiveRecord::setDB($db); */
=======
ActiveRecord::setDB($db);
>>>>>>> Stashed changes
