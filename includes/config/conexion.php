<?php

function conexion() : mysqli {
    $db = new mysqli('localhost', 'root', '', 'hospital');

    if (!$db) {
        echo 'Sin conexión';
        exit;
    }

    return $db;
}