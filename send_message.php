<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Сохранение сообщения в базу данных
    $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');
    $query = "INSERT INTO chat (username, message) VALUES ('$username', '$message')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
}
