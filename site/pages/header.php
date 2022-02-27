<?php
session_start();

//Задаем часовой пояс и меняем подключаемый стиль в зависимости от текущего времени
function ti(){
    date_default_timezone_set('Asia/Yekaterinburg');
    if(date('H') >= 8 && date('H') < 20){
        $style = 'body-day';
    }else{
        $style = 'body-night';
    }
    echo $style;
}
/* Обрабатываем примененный цвет*/
//var_dump($_POST);
//Если цвет выбран, сохраняем в сессию
if(isset($_POST['fon'])) {
    $f = $_POST['fon'];
    $_SESSION['fon'] = $f;
//    var_dump($_SESSION);
}
//если кнопка не нажата, берем цвет из сессии
else if(isset($_SESSION['fon'])){
    $f = $_SESSION['fon'];
}
//если кнопка нажата выводим цвет, если нет выводим фон день/ночь
function fon($f){
    if(isset($f)){
        echo $f;
    }else{
        ti();
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <link rel="stylesheet" href="../styles/heder_footer_authoriz.css">
    <title>Главная</title>
</head>
<body>
    <header class="cap">
        <div>
            <a href="index.php" title="На главную" target="_blank" >
                <img src="../image/logo.jpg" alt="логотип" class="logo">
            </a>
        </div>
        <div>
            <a href="table.php" title="перейти в table.html" target="_blank">
                <img src="../image/table_2.PNG" alt="иконка таблицы менделеева" class="logo">
            </a>
        </div>
        <div>
            <a href="lesson.php" title="перейти к ДЗ" target="_blank">
                <img src="../image/DZ.PNG" alt="иконка ДЗ" class="logo">
            </a>
        </div>
        <div>
            <a href="lesson1.php" title="ДЗ от 16.02.2022" target="_blank" >
                <img src="../image/dz1.png" alt="иконка ДЗ" class="logo">
            </a>
        </div>
        <div>
            <form action="" method="post">
                <label for="fon">Выберите цвет</label>
                <select name="fon" id="">
                    <option value="body-red"<?php if($f == "body-red"){ echo 'selected';}?>>Красный</option>
                    <option value="body-orange"<?php if($f == "body-orange"){ echo 'selected';}?>>Оранжевый</option>
                    <option value="body-yellow"<?php if($f == "body-yellow"){ echo 'selected';}?>>Желтый</option>
                    <option value="body-green"<?php if($f == "body-green"){ echo 'selected';}?>>Зеленый</option>
                    <option value="body-Aqua"<?php if($f == "body-Aqua"){ echo 'selected';}?>>Голубой</option>
                    <option value="body-blue"<?php if($f == "body-blue"){ echo 'selected';}?>>Синий</option>
                    <option value="body-purple"<?php if($f == "body-purple"){ echo 'selected';}?>>Фиолетовый</option>
                </select>
                <button name="btn">Применить</button>
            </form>

        </div>
        <div class="logo-vhod">
<?php
// var_dump($_SESSION);
if(!isset($_SESSION['login'])){
    echo "Гость" . "<br>";
}else {
    echo $_SESSION['login'];
}

?>

            <a href="authorization.php" title="Войти" >
                <button>Войти</button>
            </a>
        </div>

    </header>
</body>