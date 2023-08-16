<?php
// Получение всех сообщений из базы данных
$connection = mysqli_connect('localhost', 'username', 'password', 'database_name');
$query = "SELECT * FROM chat ORDER BY id DESC";
$result = mysqli_query($connection, $query);

// Вывод сообщений
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="chat-message">';
    echo '<strong>' . $row['username'] . '</strong>: ' . $row['message'];
    echo '</div>';
}

mysqli_close($connection);
?>
