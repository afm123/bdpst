<?php
$db_connection = mysqli_connect('localhost', 'root', '123123123', "data3");
mysqli_set_charset($db_connection, "utf8");

if ($db_connection === false) {
    print("Ошибка подключения: " . mysqli_connect_error());
    die();
}
