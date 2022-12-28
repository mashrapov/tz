<?php

$str = file_get_contents('INPUT.TXT');

$zeros = 0;
$max_zeros = 0;

for ($i=0; $i < strlen($str); $i++) {
    if ($str[$i] == '0') {
        $zeros++;
        if ($zeros > $max_zeros) {
            $max_zeros = $zeros;
        }
    } else {
        $zeros = 0;
    }
}

file_put_contents('OUTPUT.TXT', $max_zeros);