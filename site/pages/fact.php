<?php
session_start();
$i="В последний раз Вы были на fact.php";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$i;
    }
}
?>
<a href="authorization.php">Назад</a>
