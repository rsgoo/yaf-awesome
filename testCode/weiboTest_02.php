<?php
//微博PHP面试题
function getMax($a, $b) {
    return $a>$b?$a:$b;
}

$a = 0;
$b = 0;

echo getMax($a++, $b++);  //0
echo $a;                  //1
echo $b;                  //1
