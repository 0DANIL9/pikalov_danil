<?php
session_start();
//header('Refresh: 3; index.php');
//echo 'Переход на главную через 3 секунды' . "<br>";
//if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
//
//if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
//if (isset($_POST['password'])) { $pass=$_POST['password']; if ($pass =='') { unset($pass);} }//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
//if (isset($_POST['password_confirm'])) { $pass_2=$_POST['password_confirm']; if ($pass_2 =='') { unset($pass_2);} }
///*если пользователь не ввел логин или пароль, то выдаём ошибку и останавливаем выполнение скрипта*/
//if (empty($name) or empty($login) or empty($password)  or empty($password_confirm)) {
//    exit ("Заполните все поля!");
//}
//var_dump($_POST);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки
$pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);//удаляет пробелы (или другие символы) из начала и конца строки
$pass_2 = filter_var(trim($_POST['password_confirm']),FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
    exit("Недопустимая длина имени");
}
if(mb_strlen($login) < 3 || mb_strlen($login) > 50){
    exit("Недопустимая длина логина");
}
if(mb_strlen($pass) < 6 || mb_strlen($pass) > 20){
    exit("Недопустимая длина Пароля");
}
if($pass === $pass_2){
    $pass = password_hash($pass, PASSWORD_DEFAULT);
}else {
    $_SESSION['msg'] = 'Пароли не совпадают';
    header('location: registration.php');
}

require_once 'connect.php';
    $connect->query("INSERT INTO `users` (`name`, `login`, `pass`)
VALUES ('$name', '$login', '$pass')");
    $connect->close();
header('location: index.php');
?>

