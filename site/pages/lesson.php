<?php
session_start();
////$f = "";
//var_dump($_POST);
//if(isset($_POST['fon'])) {
//$f = $_POST['fon'];
//setcookie("fon", $f);
//}
//else if(isset($_COOKIE['fon'])){
//$f = $_COOKIE['fon'];
//}
//if(isset($_SESSION['fon'])){
//$f = $_SESSION['fon'];}
//function fon($f){
//echo $f;
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/my-style.css">
    <link rel="stylesheet" href="../styles/mystyle.css">
    <title>Document</title>
</head>
<?php include 'header.php' ?>
<body class="<?php fon($f);?>">
    <div class="container">
        <div class="block task-1 ">
            <h3 class="h3">Задание-1</h3>
            <?php
                for ($i=5; $i <=13  ; $i++) {
                    echo "<p align='center'>" . $i . "</p>";
                }
            ?>
        </div>
        <div class="block task-2">
            <h3 class="task-2-h3">Задание-2</h3>
            <div>
                <h4>С помощью while </h4>
                <?php
                    $num = 1000;
                    $it = 0;
                    while ($num >= 50) {
                         $num /=2;
                         $it++;
                    }
                    echo "Получилось число: $num <br>";
                    echo "Количество итераций: $it <br>";
                ?>
            </div>
            <div>
                <h4>С помощью for</h4>
                <?php 
                    $it = 0;
                    for ($num = 1000; $num > 50 ; $it++) { 
                        $num/=2;
                    }
                    echo "Получилось число: $num <br>";
                    echo "Количество итераций: $it <br>";

                ?>
            </div>
        </div>
        <div class="block task-3">
            <h3 class="h3">Задание-3</h3>
            <form method="post">
                Число: <input type="text" name="per" placeholder="введите число от 1 до 10">
                <input type="submit" name="p" value="OK">
            </form>

            <?php
//                if(isset($_POST['per'])){
//                    $i = strip_tags(trim($_POST['per']));
//                }
                $i = $_POST['per'];
                switch ($i) {
                    case '0':
                        echo "0,1,2,3,4,5,6,7,8,9,10";
                        break;
                    case '1':
                        echo "0,1,2,3,4,5,6,7,8,9";
                        break;
                    case '2':
                        echo "0,1,2,3,4,5,6,7,8";
                        break;
                    case '3':
                        echo "0,1,2,3,4,5,6,7";
                        break;
                    case '4':
                        echo "0,1,2,3,4,5,6";
                        break;
                    case '5':
                        echo "0,1,2,3,4,5";
                        break;
                    case '6':
                        echo "0,1,2,3,4";
                        break;
                    case '7':
                        echo "0,1,2,3";
                        break;
                    case '8':
                        echo "0,1,2";
                        break;
                    case '9':
                        echo "0,1";
                        break;
                    case '10':
                        echo "0";
                        break;
                    default:
                        echo "введите число от 0 до 10";
                        break;
                }
             ?>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>

