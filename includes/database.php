<?php

function connectDB() : mysqli {
    $db = new mysqli('localhost', 'root', '1047', 'miato_crud');

    $db->set_charset('utf8');

    if(!$db) {
        echo 'Error could not connect';
        exit;
    }

    return $db;
} 