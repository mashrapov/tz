<?php

$str = file_get_contents('INPUT.TXT');
$s = '';

$length = 0;

for ($i=0; $i < strlen($str); $i++) {
    $length++;
    $s = $s . $str[$i];
    if(str_repeat($s, 2) == substr($str, 0, strlen($s)*2)) {
        file_put_contents('OUTPUT.TXT', $length);
        return;
    }
}