<?php

function conectarDB() : mysqli{
    $db = new mysqli("localhost", "root", "root","raissa");
    $db -> set_charset("utf8");
    if(!$db){
        echo "Error ndo se pudo conectar";
        exit;
    }

    return $db;
}
