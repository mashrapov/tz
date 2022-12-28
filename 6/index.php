<?php
function isDvoyak($num) {
    $str_num = strval($num);
    $distinct_digits = array_unique(str_split($str_num));
    return count($distinct_digits) <= 2;
}
function findNearest($num) {
    $add = $num;
    $sub = $num;
    while(true) {
        if(isDvoyak(++$add))
            return $add;

        if(isDvoyak(--$sub))
            return $sub;
    }
}

$lines = file('INPUT.txt');
$n = intval($lines[0]);

$nearest = isDvoyak($n) ? $n : findNearest($n);
file_put_contents("OUTPUT.txt", $nearest);