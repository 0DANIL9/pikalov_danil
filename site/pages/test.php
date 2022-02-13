<?php

//$str = file_get_contents('index.php');
//$arr = explode(' ',$str);
//echo $str1;
//print_r($arr);

$file = file('index.php');
foreach ($file as $item) {
    $str = strip_tags($item);
    $str1= str_word_count($item, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    echo $str1 . "<br>";
}


//$file_2 = explode(" ", $str);

//echo '<pre>';
//print_r($file_2) ;
//echo '</pre>';


//$str = implode(" ",$file);
//echo mb_strlen($str,utf8_encode());
//echo str_word_count($str,0,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
//echo $str;