<?php
$lines = file('INPUT.txt');
$count = intval($lines[0]);
$digs = explode(' ', $lines[1]);

$sum = array_sum(array_filter($digs, function($el) {
    return $el > 0;
}));

$min_key = array_search(min($digs), $digs);
$max_key = array_search(max($digs), $digs);
if($count == 2 or abs($max_key - $min_key) == 1) {
    $mult = NULL;
} else {
    if($min_key > $max_key) {
        $start = $max_key;
        $end = $min_key;
    } else {
        $start = $min_key;
        $end = $max_key;
    }
    $mult = 1;
    for($i = $start + 1 ; $i < $end; $i++) {
        $mult *= $digs[$i];
    }
}

file_put_contents("OUTPUT.txt", "$sum $mult");
