<?php
session_start();
//Добавляем дату рождения вычисляем прожитые дни.
function dr(){
$date_of_birth = date_create_from_format('Y-m-d', '1993-08-28');
$todays_date = date_create_from_format('Y-m-d', date('Y-m-d'));
$days_lived = (array) date_diff($date_of_birth, $todays_date);
    echo $days_lived['days'];
}
//раскрашиваем первое слово блока "О себе"
function ab(){
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
}
//раскрашиваем текст блока "Отзыв" в два разных цвета.
function raz(){
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
}
////---------Почему не работает?!!!!ц---------
//Подсчет слов на странице
//function countingwords(){
//    $str = file_get_contents("index.php");
//    $str = htmlspecialchars(strip_tags($str));
//    echo $str;
//    $str1= str_word_count($str, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
//    echo "Слов на станице:" . $str1;
//}

 //Подсчет гласных
//function countingvowels(){
//    $str = file_get_contents(__FILE__);
//    $str = strip_tags($str);
//    $str = mb_strtolower($str);
//    $vowels = ["а", "о", "э", "е", "и", "ы", "у", "ё", "ю", "я"];
//    $allSymbol = mb_strlen($str);
//    $Consonants = mb_strlen(str_replace( $vowels, '',$str ));
//    $allvowels = $allSymbol - $Consonants;
//    echo "Гласных на странице:" . $allvowels;
//}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <link rel="stylesheet" href="../styles/flex-and-grid-style.css">
    <link rel="stylesheet" href="../styles/heder_footer_authoriz.css">
    <title>Главная</title>
</head>
<?php include 'header.php' ?>
<body class="<?php fon($f);?>">
    <div class="container">
        <!-- Шапка сайта -->

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
                        <?php ab(); ?>
                    </li>
                    <li> Учился </li>
                    <li> Работаю </li>
                    <li> Дней прожито:<?php dr() ?></li>
                </ul>
            </div>

            <!-- Блок отзыв -->
            <div class="reviev block">
                <h3 class="header">Отзыв</h3>
                <p class="text">
                    <?php raz();?>
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
                <h3 class="h3"><?php $text[ ] = "Гнев человеческий"; echo $text[0] ?></h3>
                <p class="p"><?php $text[ ] = "Эйч — загадочный и холодный на вид джентльмен, но внутри него пылает жажда мести.
                    Преследуя свои мотивы, он внедряется в инкассаторскую компанию,
                    чтобы выйти на соучастников серии многомиллионных ограблений, потрясших Лос-Анджелес.
                    В этой запутанной игре у каждого своя роль, но под подозрением оказываются все.
                    Виновных же обязательно постигнет гнев человеческий."; echo $text[1]?></p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=Q6nepw3fskg" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/duna-1.jpg" alt="Дюна (постер)" class="img">
                </a>
                <h3 class="h3"><?php $text[ ] = "Дюна"; echo $text[2] ?></h3>
                <p class="p"><?php $text[ ] = "Наследник знаменитого дома Атрейдесов Пол отправляется вместе с семьей на одну из самых опасных планет
                    во Вселенной — Арракис. Здесь нет ничего, кроме песка, палящего солнца, гигантских чудовищ и основной причины
                    межгалактических конфликтов — невероятно ценного ресурса, который называется меланж. В результате захвата власти
                    Пол вынужден бежать и скрываться, и это становится началом его эпического путешествия. Враждебный мир Арракиса
                    приготовил для него множество тяжелых испытаний, но только тот, кто готов взглянуть в глаза своему страху,
                    достоин стать избранным."; echo $text[3]?></p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=rWofi8B8vE0" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/tyrist.jpg" alt="" class="img">
                </a>
                <h3 class="h3"><?php $text[ ] = "Турист"; echo $text[4] ?></h3>
                <p class="p"><?php $text[ ] = "Декабрь 2020 года. Бывший сотрудник полиции Гриша Дмитриев в составе небольшой группы российских
                    инструкторов прибывает в Центральноафриканскую Республику. Грише командировка не кажется сложной,
                    ведь в задачи инструкторов входит только обучение солдат местной армии основам тактики и методам ведения боя.
                    Однако все с самого начала идет не так. Несколько бандитских группировок идут на столицу,
                    чтобы устроить в стране государственный переворот. Русские инструкторы совместно со своими подопечными дают отпор
                    бандитам. Но для Гриши, никогда не принимавшего участие в военных действиях, эта командировка превращается
                    в настоящий ад."; echo $text[5]?></p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=Z3b1GbPg2VM" title="Нажмите, чтобы перейти" target="_blank">
                    <img src="../image/02.02.2022/nottimdie.jpg" alt="" class="img">
                </a>
                <h3 class="h3"><?php $text[ ] = "Не время умирать"; echo $text[6] ?></h3>
                <p class="p"><?php $text[ ] = "Джеймс Бонд оставил оперативную службу и наслаждается спокойной жизнью на Ямайке.
                    Все меняется, когда на острове появляется его старый друг Феликс Лейтер из ЦРУ с просьбой о помощи.
                    Миссия по спасению похищенного ученого оказывается опаснее, чем предполагалось изначально.
                    Бонд попадает в ловушку таинственного злодея, вооруженного опасным биологическим оружием."; echo $text[7]?></p>
            </div>
        </div>

        <!-- Блок Grig ДЗ от 02.02.2022 -->
                <div class="grid">
                    <div>
                        <a href="https://www.youtube.com/watch?v=5sgjNCHZ5C8" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/garri-1.jpg" alt="Гарри Поттер 20 лет спустя: Возвращение в Хогвартс (постер)" class="img">
                        </a>
                        <h3 class="h3-2"><?php $text[ ] = "Гарри Поттер 20 лет спустя: Возвращение в Хогвартс"; echo $text[8] ?></h3>
                        <p class="p-2"><?php $text[ ] = "Дэниэл Рэдклифф, Руперт Гринт и Эмма Уотсон встретятся со своими коллегами и впервые за долгие годы
                            окажутся в стенах Хогвартса."; echo $text[9]?></p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=TtsKOOcHNj0" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/folmoon.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2"><?php $text[ ] = "Падение Луны"; echo $text[10] ?></h3>
                        <p class="p-2"><?php $text[ ] = "По неизвестной причине Луна вдруг сходит с орбиты и идёт на столкновение с Землёй,
                            что провоцирует множественные катаклизмы."; echo $text[11]?></p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=JAbkjFzuinE" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/eterna.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2"><?php $text[ ] = "Этерна: Часть первая"; echo $text[12] ?></h3>
                        <p class="p-2"><?php $text[ ] = "Законный наследник престола в изгнании и сын убитого мятежника — что между ними общего?
                            У каждого своя цель: один мечтает занять трон и вернуть семье былую славу, другой — отомстить убийце отца,
                            который служит узурпаторам. Юноши вступают в масштабную борьбу за власть и честь, в которой те,
                            кто казались друзьями, могут предать, а былые враги превратиться в союзников.
                            Ради достижения цели и принцу, и сыну бунтовщика придется рискнуть самым ценным и сделать
                            главный выбор в своей жизни — пойти предначертанным путем или выступить против самой судьбы."; echo $text[13]?></p>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/watch?v=WtWAzYjKkp8" title="Нажмите, чтобы перейти" target="_blank">
                            <img src="../image/02.02.2022/code355.jpg" alt="" class="img">
                        </a>
                        <h3 class="h3-2"><?php $text[ ] = "Код 355"; echo $text[14] ?></h3>
                        <p class="p-2"><?php $text[ ] = "Когда сверхсекретная технология попадает в руки опасных наемников,
                            непредсказуемая агент ЦРУ Мейс вынуждена объединиться с соперницами — крутым немецким агентом Мари,
                            бывшей союзницей из МИ-6, передовым IT-спецом Хадижей и опытным колумбийским психологом
                            Грасиелой — для выполнения смертельно опасной миссии. Пять женщин-спецагентов поставят под удар
                            собственную преданность национальным интересам, что поможет им спасти мир или приведет их к гибели."; echo $text[15]?></p>
                    </div>
                </div>
    </div>
    <!--Подвал -->


<?php
//include 'footer.php';

$str = implode(" ",$text);
$str = mb_strtolower($str);
// Подсчет слов  по тупому
function countingwords($str){
    $countingwords = str_word_count($str,0,"абвгдеёжзийклмнопрстуфхцчшщъыьэюя");
    echo "Слов на странице:" . $countingwords;
}

// Подсчет гласных по тупому
function countingvowels($str){
    $vowels = ["а", "о", "э", "е", "и", "ы", "у", "ё", "ю", "я"];
    $allSymbol = mb_strlen($str);
    $Consonants = mb_strlen(str_replace( $vowels, '',$str ));
    $allvowels = $allSymbol - $Consonants;
    echo "Гласных на странице:" . $allvowels;
}

?>
    <div class="footer">
        <p class="countingwords"><?php countingwords($str); ?></p>
        <p class="countingwords"><?php countingvowels($str); ?></p>
    </div>


</body>
</html>