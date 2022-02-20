<?php header('Refresh: 3; authorization.php'); ?>
<!--Сломалось хеширование пароля, надо всё переделать-->
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
                if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
                if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
                /*если пользователь не ввел логин или пароль, то выдаём ошибку и останавливаем выполнение скрипта*/
                if (empty($login) or empty($password)) {
                    exit ("Заполните все поля!");
                }
            ?>
        </p>
<?php
$login = filter_var(trim($login));//удаляет пробелы (или другие символы) из начала и конца строки
$password = filter_var(trim($password));//удаляет пробелы (или другие символы) из начала и конца строки
//$password = password_hash($password, PASSWORD_DEFAULT);

/* Представим, что это БД
 Потом сделать через массив */
$log = "danil";//Логин в БД
$pas = "pikalov";// Пароль в БД
$ha = '$2y$10$0zRQrqsRf7fKkTRgnMOnUOGBWN7HnVnevVBofiASwLPW88QPijaJ.';//Типо сохранили пароль в БД

/*Проверка наличия введенного логина в базе*/

function prov($log,$password,$ha,$login,$pas){
if ($log !== $login){
    exit ("<br /><br />Неверный логин!");
}
/*Если логин существует, сверяем пароли*/
else {
//    if(password_verify($password, $ha)){
if($password == $pas){
        echo "<br /><br />Добро пожаловать! <br /><a href='index.php'>Главная</a><br />";

    }
    else {
        exit ("<br /><br />Неверный пароль!");
    }
}
}
?>
        <p class="authorization_form_input"><?php prov($log,$password,$ha,$login,$pas)?></p>
    </div>
</div>
</body>
</html>