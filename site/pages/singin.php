<?php 
session_start();
header('Refresh: 3; index.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <link rel="stylesheet" href="../styles/heder_footer_authoriz.css">
    <title>Вход</title>
</head>
<body>
<div class="authorization">
    <div class="authorization_form">
        <p class="authorization_form_input">
            <?php
                echo 'Переход на главную через 3 секунды' . "<br>";
                //Заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
                if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
                //Заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
                if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
                /*Если пользователь не ввел логин или пароль останавливаем выполнение скрипта*/
                if (empty($login) or empty($password)) {
                    exit ("Заполните все поля!");
                }
            ?>
        </p>
<?php
$login = filter_var(trim($login));//удаляет пробелы (или другие символы) из начала и конца строки
$password = filter_var(trim($password));//удаляет пробелы (или другие символы) из начала и конца строки
// $password = password_hash($password, PASSWORD_DEFAULT);

// echo $login;
// echo $password;

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
    //если пользователя с введенным логином не существует
    exit ("Введён неверный логин");
    }
    
else {
    // Если логин существует сверяем пароли
    // password_verify($myrow['pass'], $password)
if ($myrow['pass'] == md5($password)){
    //если пароли совпадают, сохраняем логин в сессию
    $_SESSION['login']=$myrow['login']; 
    // Приветствие
	echo '
    <p class="authorization_form_input">
        Добро пожаловать! <br>
        <a href="index.php">На главную</a>
    </p>';
}
// Пароли не совпали
else {
    exit ("Введён неверный пароль");
    }
    }
?>
        <p class="authorization_form_input">
            <?php
                // Счётчик посещений
                if(isset($_COOKIE['posechen'])){
                    $pos = ($_COOKIE['posechen'] + 1);
                    setcookie("posechen",$pos,time()+3600);
                } else if(isset($_POST['login'])){
                    $pos = $pos + 1;
                    setcookie("posechen",$pos,time()+3600);
                }
                echo "Вы посетили наш сайт" . " " . $pos . " " . "раз."; 
            ?>
        </p>
    </div>
</div>
</body>
</html>