<?php

/* function conexion() : mysqli {
    $db = new mysqli('localhost', 'root', '', 'hospital');

    if (!$db) {
        echo 'Sin conexión';
        exit;
    }

    return $db;
} */

class conexion{

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "hospital";
  
    function conexion(){
  
      $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$conn) {
          echo "Error al conectar la base de datos" . mysqli_connect_error();
        }
      
      return $conn;
  
    }
  
}