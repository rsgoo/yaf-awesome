<?php

echo date("Y-m-d H:i:s", strtotime("-1 day"));

echo '<br/>';

$str = "hello,world";

echo '<pre>';
print_r(str_split($str,2));

echo '<br/>';


$word = "hello,world; hello,Go";

echo preg_replace("/world|Go/", "php", $word);

echo '<pre>';
print_r(basename("C:\\Users\\X1O\\Downloads\\aa.php"));

$data = "11/29/2003";

// echo date("Y-m-d",strtotime($data));
echo preg_match("/(\d{1,2})\/(\d{1,2})\/(\d+)/",'$3-$1-$2',$data);

echo '<pre>';

$url = "http://127.0.0.1/phpmyadmin/db_structure.inc.php?server=1&db=yii2basic&token=e7a7c8ba89ba236847f432a9fc64a199";

$pathUrl = parse_url($url);
$path = $pathUrl['path'];
$arr = pathinfo($path);
echo $arr['extension'];
 ?>
