<?php
session_start();

$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки
$pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки
$pass_2 = filter_var(trim($_POST['password_confirm']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки

// Выводим ошибку, если имя короче 3 символов
if(mb_strlen($name) < 4 || mb_strlen($name) > 50){
    $_SESSION['msg'] = 'Недопустимая длина имени';
    header('location: registration.php');
    exit();
}
// Выводим ошибку, если логин короче 3 символов
if(mb_strlen($login) < 3 || mb_strlen($login) > 50){
    $_SESSION['msg'] = 'Недопустимая длина логина';
    header('location: registration.php');
    exit();
}
// Выводим ошибку, если пароль короче 6 символов
if(mb_strlen($pass) < 6 || mb_strlen($pass) > 20){
    $_SESSION['msg'] = 'Недопустимая длина пароля';
    header('location: registration.php');
    exit();
}
// Если пароль подтвержлен верно хешируем его
if($pass === $pass_2){
    // $pass = password_hash($pass, PASSWORD_DEFAULT);
    $pass = md5($pass);
}
// Если пароль не подтвержден, выводим ошибку
    else {
    $_SESSION['msg'] = 'Пароли не совпадают';
    header('location: registration.php');
    exit();
}

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
//Запрос к БД
$result = mysqli_query($db_con, "SELECT * FROM `users` WHERE `login` = '$login'");
// print_r($result);
// Массив из результатов запроса
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
// print_r($myrow);
// Проверка существования логина
if (empty($myrow['login']))
    {
        //подключение и запись в БД данных с формы
        require_once 'connect.php';
        $connect->query("INSERT INTO `users` (`name`, `login`, `pass`)
        VALUES ('$name', '$login', '$pass')");
        $connect->close();
        $_SESSION['msg'] = 'Регистрация прошла успешно';
        header('location: registration.php');
    }
    // Выводим ошибку, если такой логин уже занят
else {
    $_SESSION['msg'] = 'Такой логин уже занят';
    header('location: registration.php');
}    
?>

