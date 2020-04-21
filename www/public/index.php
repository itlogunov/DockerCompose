<?php

try {
    $pdo = new PDO('mysql:host=db;dbname=db', 'root', 'secret');
    if ($pdo instanceof PDO) {
        echo 'Подключение к БД выполнено';
    }
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
