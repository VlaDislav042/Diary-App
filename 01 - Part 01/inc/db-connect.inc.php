<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=diary;charset=utf8mb4', 'root', 'root123', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo 'A problem occured with the database connection...';
    die();
}
