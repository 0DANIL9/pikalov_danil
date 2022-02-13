<?php
//Задаем часовой пояс и меняем подключаемый стиль в зависимости от в текущего времени
date_default_timezone_set('Asia/Yekaterinburg');
if(date('H') >= 8 && date('H') < 20){
    $style = '../styles/mystyle.css';
}else{
    $style = '../styles/mystyle-night.css';
}
//Добавляем дату рождения вычисляем прожитые дни
$date_of_birth = date_create_from_format('Y-m-d', '1993-08-28');
$todays_date = date_create_from_format('Y-m-d', date('Y-m-d'));
$days_lived = (array) date_diff($date_of_birth, $todays_date);

//$file = array(file('index.php'));
//foreach ($file as $item){
//    echo $file_1 = strip_tags($item);
//}
//echo '<pre>';
//print_r($file) ;
//echo '</pre>'

//$file = file_get_contents('index.php');
//$file_1 = strip_tags($file);
//echo $file_1;



?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <link rel="stylesheet" href="../styles/flex-and-grid-style.css">
    <title>Главная</title>
</head>
<body>
    <div class="container">
        <!-- Шапка сайта -->
        <?php include 'header.php' ?>

        <hr>

        <div class="main">
            <!--Блок ФИО-->
            <div class="fio block">
                <p class="fio_text"><strong>Пикалов Данил</strong></p>
            </div>

            <!--Фото-->
            <img src="../image/foto1.jpg" alt="фото" class="foto">

            <!--Блок о себе-->
            <div class="info block">
                <h3 class="header">О себе</h3>
                <ul>
                    <li>
                        <?php
                        $b = rand(0,5);
                        $text = "Родился";
                        switch ($b) {
                        case '0':
                        echo "<span style='color:red;'>$text</span> ";
                        break;
                        case '1':
                        echo "<span style='color:orange;'>$text</span> ";
                        break;
                        case '2':
                        echo "<span style='color:yellow;'>$text</span> ";
                        break;
                        case '3':
                        echo "<span style='color:green;'>$text</span> ";
                        break;
                        case '4':
                        echo "<span style='color:blue;'>$text</span> ";
                        break;
                        case '5':
                        echo "<span style='color:rebeccapurple;'>$text</span> ";
                        break;
                        }
                        ?>
                    </li>
                    <li> Учился </li>
                    <li> Работаю </li>
                    <li> Дней прожито:<?php echo $days_lived['days'];?></li>
                </ul>
            </div>

            <!-- Блок отзыв -->
            <div class="reviev block">
                <h3 class="header">Отзыв</h3>
                <p class="text">
                    <?php
                    //$text = "Всё нравится. Хотелось бы больше информации о том как надо делать правильно, какие есть стандарты и регламенты";
                    //$arr = explode(' ', $text);
                    //$i = 0;
                    //for($i = 0; $i < 50 ;$i++) {
                    //    if(($arr2[$i] % 2) == 0) {
                    //        echo "<span style='color:red;'>$arr2[$i]</span><br>";
                    //    }
                    //    else{
                    //        echo "<span style='color:blue;'>$arr2[$i]</span><br/>";
                    //    }
                    //}
                    //print_r(array_keys($arr));
                    //print_r($arr);

                    $arr2 = array("Всё", "нравится.","Хотелось","бы","больше","информации","о","том", "как", "надо",
                        "делать", "правильно", "какие", "есть", "стандарты", "и", "регламенты.",);
                    $i = 0;
                    foreach ($arr2 as $value){
                    if(($i % 2) == 0){
                    echo "<span style='color:red;'>$value</span> ";
                    }else{
                    echo "<span style='color:blue;'>$value</span> ";
                    }
                    $i++;
                    }
                    ?>
                </p>
            </div>

            <!--Мои контакты-->
            <div class="contacts block">
                <h4 class="con">Связаться со мной:</h4>
                <h4 class="rep">Д.З на GitHub</h4>
                <a href="https://t.me/danilychka" title="Ссылка на Telegram" target="_blank">
                    <img src="../image/tg.png" alt="Логотип Telegram" class="logo_telegram">
                </a>
                <a href="https://github.com/0DANIL9/pikalov_danil" title="Д.З. на Github" target="_blank">
                    <img src="../image/GitHub-Logo.png" alt="Логотип GitHub" class="logo_github">
                </a>
            </div>
        </div>
        <hr>

    <!-- Блок ДЗ от 02.02.2022, flex -->
        <div class="flex-block">
        <!-- Flex-1 -->
            <div>
                <a href="https://www.youtube.com/watch?v=YLw55x-zOSo" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/gnev-1.jpg" alt="Гнев человеческий (постер)" class="img">
                </a>
                <h3 class="h3">Гнев человеческий</h3>
                <p class="p">Эйч — загадочный и холодный на вид джентльмен, но внутри него пылает жажда мести.
                    Преследуя свои мотивы, он внедряется в инкассаторскую компанию,
                    чтобы выйти на соучастников серии многомиллионных ограблений, потрясших Лос-Анджелес.
                    В этой запутанной игре у каждого своя роль, но под подозрением оказываются все.
                    Виновных же обязательно постигнет гнев человеческий.</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=Q6nepw3fskg" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/duna-1.jpg" alt="Дюна (постер)" class="img">
                </a>
                <h3 class="h3">Дюна</h3>
                <p class="p">Наследник знаменитого дома Атрейдесов Пол отправляется вместе с семьей на одну из самых опасных планет
                    во Вселенной — Арракис. Здесь нет ничего, кроме песка, палящего солнца, гигантских чудовищ и основной причины
                    межгалактических конфликтов — невероятно ценного ресурса, который называется меланж. В результате захвата власти
                    Пол вынужден бежать и скрываться, и это становится началом его эпического путешествия. Враждебный мир Арракиса
                    приготовил для него множество тяжелых испытаний, но только тот, кто готов взглянуть в глаза своему страху,
                    достоин стать избранным.</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=rWofi8B8vE0" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/tyrist.jpg" alt="" class="img">
                </a>
                <h3 class="h3">Турист</h3>
                <p class="p">Декабрь 2020 года. Бывший сотрудник полиции Гриша Дмитриев в составе небольшой группы российских
                    инструкторов прибывает в Центральноафриканскую Республику. Грише командировка не кажется сложной,
                    ведь в задачи инструкторов входит только обучение солдат местной армии основам тактики и методам ведения боя.
                    Однако все с самого начала идет не так. Несколько бандитских группировок идут на столицу,
                    чтобы устроить в стране государственный переворот. Русские инструкторы совместно со своими подопечными дают отпор
                    бандитам. Но для Гриши, никогда не принимавшего участие в военных действиях, эта командировка превращается
                    в настоящий ад.</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=Z3b1GbPg2VM" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/nottimdie.jpg" alt="" class="img">
                </a>
                <h3 class="h3">Не время умирать</h3>
                <p class="p">Джеймс Бонд оставил оперативную службу и наслаждается спокойной жизнью на Ямайке.
                    Все меняется, когда на острове появляется его старый друг Феликс Лейтер из ЦРУ с просьбой о помощи.
                    Миссия по спасению похищенного ученого оказывается опаснее, чем предполагалось изначально.
                    Бонд попадает в ловушку таинственного злодея, вооруженного опасным биологическим оружием.</p>
            </div>
        </div>

        <!-- Блок Grig ДЗ от 02.02.2022 -->
                <div class="grid">
                    <div>
                        <a href="https://www.youtube.com/watch?v=5sgjNCHZ5C8" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/garri-1.jpg" alt="Гарри Поттер 20 лет спустя: Возвращение в Хогвартс (постер)" class="img">
                        </a>
                        <h3 class="h3-2">Гарри Поттер 20 лет спустя: Возвращение в Хогвартс</h3>
                        <p class="p-2">Дэниэл Рэдклифф, Руперт Гринт и Эмма Уотсон встретятся со своими коллегами и впервые за долгие годы
                            окажутся в стенах Хогвартса.</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=TtsKOOcHNj0" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/folmoon.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2">Падение Луны</h3>
                        <p class="p-2">По неизвестной причине Луна вдруг сходит с орбиты и идёт на столкновение с Землёй,
                            что провоцирует множественные катаклизмы.</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=JAbkjFzuinE" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/eterna.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2">Этерна: Часть первая</h3>
                        <p class="p-2">Законный наследник престола в изгнании и сын убитого мятежника — что между ними общего?
                            У каждого своя цель: один мечтает занять трон и вернуть семье былую славу, другой — отомстить убийце отца,
                            который служит узурпаторам. Юноши вступают в масштабную борьбу за власть и честь, в которой те,
                            кто казались друзьями, могут предать, а былые враги превратиться в союзников.
                            Ради достижения цели и принцу, и сыну бунтовщика придется рискнуть самым ценным и сделать
                            главный выбор в своей жизни — пойти предначертанным путем или выступить против самой судьбы.</p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=WtWAzYjKkp8" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/code355.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2">Код 355</h3>
                        <p class="p-2">Когда сверхсекретная технология попадает в руки опасных наемников,
                            непредсказуемая агент ЦРУ Мейс вынуждена объединиться с соперницами — крутым немецким агентом Мари,
                            бывшей союзницей из МИ-6, передовым IT-спецом Хадижей и опытным колумбийским психологом
                            Грасиелой — для выполнения смертельно опасной миссии. Пять женщин-спецагентов поставят под удар
                            собственную преданность национальным интересам, что поможет им спасти мир или приведет их к гибели.</p>
                    </div>
                </div>
    </div>
    <!--Подвал -->
    <?php include 'footer.php' ?>
</body>
</html>