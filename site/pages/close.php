<?php 
session_start();
unset($_SESSION['login']);
session_destroy();//удаление сессии 
header("Location: index.php");//Перенаправление на эту страницу после нажатия кнопки ВЫЙТИ 
?>