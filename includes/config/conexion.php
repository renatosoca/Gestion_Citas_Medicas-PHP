<?php

function conexion() : mysqli {
    $db = new mysqli('database-hospital.cizfakwts6is.us-east-1.rds.amazonaws.com',
                        'admin',
                        'admin123456',
                        'Hospital');

    if (!$db) {
        echo 'Sin conexión';
        exit;
    }

    return $db;
}