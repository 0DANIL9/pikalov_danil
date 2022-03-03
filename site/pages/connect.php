<?php
// Задаём переменные для подключения к БД 
$db_host = 'localhost'; 
$db_user = 'danil'; 
$db_password = 'qwerty'; 
$db_name = 'users'; 
// Подключаемся к БД, проверяем подключение
$db_con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if(!$db_con){
    die('Ошибка подключения к базе данных');
}
?>