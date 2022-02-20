<?php
session_start();
//if(isset($_SESSION['fon'])){
//    $f = $_SESSION['fon'];}
//function fon($f){
//    echo $f;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <title>Document</title>
</head>
<?php include 'header.php' ?>
<body class="<?php fon($f);?>">
<div>
    <!-- Урок 11-12, слайд 12, задание 3 -->
    <form action="lesson1.php" metho1d="get">
        <select name="l" id="vibor">
            <option value="1">Лаб1</option>
            <option value="2">Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select>
        <input type="submit" >
    </form>
    <hr>
    <!--Урок 11-12, слайд 13, задание 1-->
    <form action="lesson1.php" method="post">
        <input type="text" name="fio" placeholder="Укажите ФИО" required>
        <input type="text" name="email" placeholder="Укажите e-mail" required>
        <input type="submit" value="Отправить">
    </form>
</div>
<?php
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);// Преобразует специальные символы в HTML-сущности
 $email = htmlspecialchars($email);// Преобразует специальные символы в HTML-сущности
 $fio = urldecode($fio);//Декодирование URL-кодированной строки
 $email = urldecode($email);//Декодирование URL-кодированной строки
 $fio = trim($fio);//Удаляет пробелы (или другие символы) из начала и конца строки
 $email = trim($email);//Удаляет пробелы (или другие символы) из начала и конца строки
if(isset($_POST['fio']) and isset($_POST['email'])){
//echo $fio;
//echo "<br>";
//echo $email;
}else{
    echo "Заполните поля";
}
 if (mail("pikalov_danil@mail.ru", "Проверка", "ФИО:".$fio.". E-mail: ".$email ,"From: mysite@mail.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
?>

<hr>

<!-- Урок 11-12, слайд 13, задание 3 -->
<form action="lesson1.php" method="post">
    <p>Введите Ваше имя</p>
    <input type="text" name="im">
    <p>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
    <input type="radio" name="otvet" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet" value="0">
    <label for="no">Нет</label>
    <br>
    <p>2. Раздражают ли Вас мелкие повседневные обязанности?</p>
    <input type="radio" name="otvet1" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet1" value="0">
    <label for="no">Нет</label>
    <br>
    <p>3. Верите ли Вы, что ваши друзья преданы Вам?</p>
    <input type="radio" name="otvet2" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet2" value="0">
    <label for="no">Нет</label>
    <br>
    <p>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
    <input type="radio" name="otvet3" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet3" value="1">
    <label for="no">Нет</label>
    <br>
    <p>5. Способны ли Вы ударить собаку или кошку?</p>
    <input type="radio" name="otvet4" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet4" value="1">
    <label for="no">Нет</label>
    <br>
    <p>6. Часто ли Вы принимаете лекарства?</p>
    <input type="radio" name="otvet5" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet5" value="1">
    <label for="no">Нет</label>
    <br>
    <p>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
    <input type="radio" name="otvet6" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet6" value="1">
    <label for="no">Нет</label>
    <br>
    <p>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
    <input type="radio" name="otvet7" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet7" value="1">
    <label for="no">Нет</label>
    <br>
    <p>9. Тяготят ли Вас общественные обязанности?</p>
    <input type="radio" name="otvet8" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet8" value="0">
    <label for="no">Нет</label>
    <br>
    <p>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
    <input type="radio" name="otvet9" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet9" value="0">
    <label for="no">Нет</label>
    <br>
    <p>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
    <input type="radio" name="otvet10" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet10" value="1">
    <label for="no">Нет</label>
    <br>
    <p>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
    <input type="radio" name="otvet11" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet11" value="1">
    <label for="no">Нет</label>
    <br>
    <p>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
    <input type="radio" name="otvet12" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet12" value="0">
    <label for="no">Нет</label>
    <br>
    <p>14. Нравится ли Вам семейная жизнь?</p>
    <input type="radio" name="otvet13" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet13" value="0">
    <label for="no">Нет</label>
    <br>
    <p>15. Злопамятны ли Вы?</p>
    <input type="radio" name="otvet14" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet14" value="1">
    <label for="no">Нет</label>
    <br>
    <p>16. Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
    <input type="radio" name="otvet15" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet15" value="1">
    <label for="no">Нет</label>
    <br>
    <p>17. Случается ли Вам с утра быть в плохом настроении?</p>
    <input type="radio" name="otvet16" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet16" value="1">
    <label for="no">Нет</label>
    <br>
    <p>18. Раздражает ли Вас современная живопись?</p>
    <input type="radio" name="otvet17" value="0" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet17" value="1">
    <label for="no">Нет</label>
    <br>
    <p>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
    <input type="radio" name="otvet18" value="1" checked>
    <label for="yes">Да</label>
    <input type="radio" name="otvet18" value="0">
    <label for="no">Нет</label>
    <br>
    <button type="submit">Отправить</button>
</form>
<?php
$otvet = $_POST;
//echo '<pre>';
//print_r($otvet);
//echo '<pre>';
$s = array_sum($otvet);
// echo $s;
echo $otvet['im']. ", результат ваших ответов:" . '<br>';
function rez($s){
    if($s > 15){echo "У Вас покладистый характер";}
    elseif(8 < $s){echo "Вы не лишены недостатков , но с вами можно ладить";}
    else {echo "Вашим друзьям можно посочувствовать";}
}
rez($s);
?>
</body>
<?php include 'footer.php' ?>
</html>



