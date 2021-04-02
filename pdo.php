<?php

// Fonction de connexion à la BD via PDO
function getPDO()
{
    $dsn = "mysql:host=127.0.0.1;dbname=projet_pizza;charset=utf8";
    $user = "root";
    $pass = "";

    $pdo = new PDO($dsn, $user, $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    return $pdo;
}