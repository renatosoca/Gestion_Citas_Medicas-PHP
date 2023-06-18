<?php

function conexion() : mysqli {
    $db_host = 'localhost';
    $db_name = 'san-jose';
    $db_user = 'root';
    $db_pass = 'root';

    try {
        $db = new mysqli($db_host,
            $db_user,
            $db_pass,
            $db_name);

        return $db;
    } catch (\Throwable $th) {
        echo 'Sin conexión';
    }
}