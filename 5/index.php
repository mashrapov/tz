<?php
$lines = file('INPUT.txt');
$n = intval($lines[0]);
$price = explode(' ', $lines[1]);

$max_price = $price[$n - 1];
$earnings = 0;
for ($i = $n - 1; $i >= 0; $i--) {
    if ($price[$i] > $max_price) {
        $max_price = $price[$i];
    }
    $earnings += $max_price;
}

file_put_contents("OUTPUT.txt", $earnings);
