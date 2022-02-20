<?php
$connect = new mysqli('localhost','root','','users');
if(!$connect){
    die('Ошибка подключения к базе данных');
}
?>