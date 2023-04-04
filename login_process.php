<?php
// Подключение к базе данных
require_once('db.php');

// Получение данных из формы входа
$tel = $_POST['tel'];
$numb_car = $_POST['numb_car'];
$tech_pas = $_POST['tech_pas'];

// Проверка наличия введенного номера телефона и номера машины в базе данных
$query = "SELECT * FROM users WHERE tel='$tel' AND numb_car='$numb_car'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Ошибка запроса: " . mysqli_error($conn));
}
if (mysqli_num_rows($result) > 0) {
    // Проверка соответствия введенного пароля
    $user = mysqli_fetch_assoc($result);
    if ($tech_pas == $user['tech_pas']) {
        // Авторизация прошла успешно
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: customer/index.php");
        exit();
    } else {
        // Неверный пароль
        echo "Неверный пароль";
    }
} else {
   header('Location: customer/index.php');
    exit();
}

// Закрытие соединения с базой данных
mysqli_close($conn);



?>
