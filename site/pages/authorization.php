<?php
session_start();
setcookie(session_name(),session_id(),time()+3600);

//Команда на удаление сессии
// session_destroy();

//var_dump($_SESSION);
date_default_timezone_set('Asia/Yekaterinburg');
$counter = $_COOKIE["counter"];
if (!isset($counter)){
$counter = date('Y-m-d H:i:s'); 
}else {
$counter = $counter; 
}

// var_dump($_COOKIE);
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
        <form id='forma' action='singin.php' method='post'>
            <p class="authorization_form_input">
                Логин<br />
                <input type='text' name='login' placeholder="Введите логин">
            </p>
            <p class="authorization_form_input">
                Пароль<br />
                <input type='password' name='password' placeholder="Введите пароль">
            </p>
            <p class="authorization_form_input">
                <button type="submit">Войти</button>
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
        <p class="authorization_form_input">
            Последнее посещение:
        <?php echo  $counter; ?> 
        </p>
        <p class="authorization_form_input">
            
        </p>
    </div>
</div>
</body>
</html>