<?php

$host = getenv('DB_HOST'); 
$db   = getenv('DB_NAME');
$user = getenv('DB_USER'); 
$pass = getenv('DB_PASS');
$port = '3306';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (\PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>