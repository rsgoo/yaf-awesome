<?php
$array  = [
            0=>"z01",
            1=>"Z32",
            2=>"z17",
            3=>"Z16",
];

function cmp($a, $b) {
    $a = intval(substr($a, 1));
    $b = intval(substr($b, 1));
    if ($a == $b) {
        return 0;
    }
    if ($a > $b) {
        return 1;
    } else {
        return -1;
    }
}

usort($array, 'cmp');

echo '<pre>';
print_r($array);
//2017/11/1 00:00:00
$cardinal = 1509465600;

echo floor((time() - $cardinal)/3600);

echo '<br/>';
echo rand(1,10);


?>
