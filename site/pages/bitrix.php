<?php
session_start();
$i2="В последний раз Вы были на bitrix.php";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$i2;
    }

}
?>
<a href="authorization.php">Назад</a>
