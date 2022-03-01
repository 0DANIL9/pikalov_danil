<?php
$connect = new mysqli('localhost','danil','qwerty','users');
if(!$connect){
    die('Ошибка подключения к базе данных');
}
?>