<?php
function connectDB() {
  $host = "localhost"; // хост
  $user = "root"; // имя пользователя
  $password = ""; // пароль, если нет пароля, то оставляем пустым
  $database = "cp"; // имя базы данных

  try {
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
  }
}
?>
