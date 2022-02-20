<?php
session_start();
setcookie(session_name(),session_id(),time()+3600);


//var_dump($_SESSION);
//var_dump($_COOKIE);

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
        <form id='forma' action='script.php' method='post'>
            <p class="authorization_form_input">
                Логин<br />
                <input type='text' name='login' placeholder="Введите логин">
            </p>
            <p class="authorization_form_input">
                Пароль<br />
                <input type='password' name='password' placeholder="Введите пароль">
            </p>
            <p class="authorization_form_input">
                <button>Войти</button>
            </p>
        </form>
        <p class="authorization_form_input">
            <a href="registration.php">Регистрация</a>
        </p>
        <p class="authorization_form_input">
            <a href="index.php">На главную</a>
        </p>
        <p class="authorization_form_input">
            <a href="fact.php">Факт</a>
        </p>
        <p class="authorization_form_input">
            <a href="bitrix.php">Битрикс</a>
        </p>
        <p class="authorization_form_input">
            <?php
            if (isset($_SESSION['page']))
            {
            foreach($_SESSION["page"] as $value)// показать последнюю страницу
            {
            echo $value;
            }
            }
            ?>
        </p>
    </div>
</div>
</body>
</html>