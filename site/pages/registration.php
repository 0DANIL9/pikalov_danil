<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <link rel="stylesheet" href="../styles/heder_footer_authoriz.css">
    <title></title>
</head>
<body>

<div class="authorization">
    <div class="authorization_form">
        <form id='forma' action='signup.php' method='post'>
            <p class="authorization_form_input">
                Имя<br />
                <input type='text' name='name' placeholder="Введите имя">
            </p>
            <p class="authorization_form_input">
                Логин<br />
                <input type='text' name='login' placeholder="Введите логин">
            </p>
            <p class="authorization_form_input">
                Пароль<br />
                <input type='password' name='password' placeholder="Введите пароль">
            </p>
            <p class="authorization_form_input">
                Пароль<br />
                <input type='password' name='password_confirm' placeholder="Подтвердите пароль">
            </p>

                <?php
                if($_SESSION['msg']){
                echo '<p class="authorization_form_input">' .  $_SESSION['msg'] . '</p>';
                }
                unset($_SESSION['msg'])?><br />

            <p class="authorization_form_input">
                <button>Зарегистрироваться</button>
            </p>
        </form>
        <p class="authorization_form_input">
            <a href="authorization.php">Авторизация</a>
        </p>
        <p class="authorization_form_input">
            <a href="index.php">На главную</a>
        </p>

    </div>
</div>

</body>
</html>