
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
                header('Refresh: 3; index.php');
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
$login = trim($login);//удаляет пробелы (или другие символы) из начала и конца строки
$password = trim($password);//удаляет пробелы (или другие символы) из начала и конца строки
$hash = password_hash($password, PASSWORD_DEFAULT);

/* Представим , что это  БД
 Потом сделать через массив */
$log = "danil";//Логин в БД
$pas = "pikalov";// Пароль в БД
$ha = '$2y$10$oMAkBYj4Cu0xWl2TKMVCL.xwQyg90O4Lse80lcH/v0xhlfA4cePgC';//Типо сохранили пароль в БД

/*Проверка наличия введенного логина  в базе*/
/*Если логин существует, сверяем пароли*/
function prov($log,$password,$ha,$login){
if ($log !== $login){
    exit ("<br /><br />Неверный логин!");
}
else {
//    if ($password == $pas){
    if(password_verify($password, $ha)){
        echo "<br /><br />Добро пожаловать! <br /><a href='index.php'>Главная</a><br />";
    }
    else {
        exit ("<br /><br />Неверный пароль!");
    }
}
}
?>
        <p class="authorization_form_input"><?php prov($log,$password,$ha,$login)?></p>
    </div>
</div>
</body>
</html>