<?php
// Подключение к базе данных
require_once('db.php');

// Получение данных из формы регистрации
$fullname = $_POST['fullname'];
$tel = $_POST['tel'];
$numb_car = $_POST['numb_car'];
$tech_pas = $_POST['tech_pas'];

// Запись данных в базу данных
$query = "INSERT INTO users (fullname, tel, numb_car, tech_pas) VALUES ('$fullname', '$tel', '$numb_car', '$tech_pas')";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

// Закрытие соединения с базой данных
mysqli_close($conn);

?>
