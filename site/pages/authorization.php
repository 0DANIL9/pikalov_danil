<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <link rel="stylesheet" href="../styles/heder_footer_authoriz.css">
    <title>Вход</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="authorization">
    <div class="authorization_form">
        <form id='forma' action='script.php' method='post'>
            <p class="authorization_form_input">Логин<br /><input type='text' name='login'></p>
            <p class="authorization_form_input">Пароль<br /><input type='password' name='password'></p>
            <p class="authorization_form_input"><input type='submit' name='submit' value='Войти'><br></p>
        </form>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>